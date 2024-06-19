<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DetailDonation;
use App\Models\DonationRegistration;
use App\Models\Periode;
use Illuminate\Http\Request;

class RecipientController extends Controller
{
    public function index()
    {
        // Menampilkan data penerima dan pengajuan yang ditolak berdasarkan periode sekarang
    $periode = Periode::where("status_period","=","active")->first(); 
    $totalDonation = DetailDonation::sum('nominal_donation'); // Menghitung total donasi dari kolom 'nominal_donation'
    
    // Mendapatkan pengajuan donasi yang ditolak berdasarkan periode saat ini
    $submissionRejected = DonationRegistration::where('status', 'rejected')
        ->where('id_periode',$periode->id_periode)->get();
    
    // Mendapatkan penerima donasi yang sudah dikonfirmasi berdasarkan periode saat ini
    $recipients = DonationRegistration::where('status', 'confirm')
        ->where('id_periode',$periode->id_periode)->get();
    
    // Menghitung jumlah seluruh penerima donasi yang dikonfirmasi
    $recipientCount = $recipients->count();
    
    // Menghitung nominal uang yang diterima oleh masing-masing penerima donasi
    $nominalAcceptedDefault = $recipientCount > 0 ? $totalDonation / $recipientCount : 0; // Jika jumlah penerima > 0, hitung rata-rata donasi per penerima, jika tidak, 0
    
    // Menginisialisasi total nominal donasi yang diterima
    $totalAccepted = 0;
    
    // Loop untuk menetapkan nominal donasi yang diterima oleh setiap penerima
    foreach ($recipients as $recipient) {
        $nowUkt = $recipient->student->academic_information->now_ukt; // Mendapatkan nilai UKT (Uang Kuliah Tunggal) saat ini dari penerima
        $recipient->nominal_accepted = min($nominalAcceptedDefault, $nowUkt); // Menetapkan nominal yang diterima, maksimal sebesar UKT
        $totalAccepted += $recipient->nominal_accepted; // Menambahkan nominal yang diterima ke total nominal yang diterima
        $recipient->save();
    }
    
    // Menghitung sisa nominal donasi
    $remainingDonation = $totalDonation - $totalAccepted;
    
    // Memfilter penerima yang masih membutuhkan uang donasi tambahan
    $recipientsNeedingMore = $recipients->filter(function ($recipient) {
        return $recipient->nominal_accepted < $recipient->student->academic_information->now_ukt; // Mengembalikan penerima yang nominal diterimanya kurang dari UKT
    });
    
    // Menghitung jumlah penerima yang masih membutuhkan donasi tambahan
    $recipientsNeedingMoreCount = $recipientsNeedingMore->count();
    
    // Jika ada penerima yang masih membutuhkan donasi tambahan
    if ($recipientsNeedingMoreCount > 0) {
        // Menghitung donasi tambahan per penerima
        $additionalDonationPerRecipient = $remainingDonation / $recipientsNeedingMoreCount;
        
        // Loop untuk menetapkan donasi tambahan bagi penerima yang membutuhkan
        foreach ($recipientsNeedingMore as $recipient) {
            $nowUkt = $recipient->student->academic_information->now_ukt; // Mendapatkan UKT saat ini dari penerima
            $currentAccepted = $recipient->nominal_accepted; // Mendapatkan nominal donasi yang sudah diterima penerima
            $difference = $nowUkt - $currentAccepted; // Menghitung selisih antara UKT dan donasi yang sudah diterima
            
            if ($difference > 0) {
                // Menambah donasi yang diterima, maksimal sebesar selisih atau donasi tambahan per penerima
                $recipient->nominal_accepted += min($difference, $additionalDonationPerRecipient); 
                $recipient->save(); 
            }
        }
    }

        return view('admin.layouts.recipient', [
            "title" => "Penerima Donasi",
            "recipients" => $recipients,
            "submissionRejected" => $submissionRejected,
        ]);
    }
}
