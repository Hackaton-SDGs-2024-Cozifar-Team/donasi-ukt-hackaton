<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DetailDonation;
use App\Models\DonationRegistration;
use Illuminate\Http\Request;

class RecipientController extends Controller
{
    public function index()
    {
        $totalDonation = DetailDonation::sum('nominal_donation');
        $recipients = DonationRegistration::where('status', 'Diterima')->get();
        $recipientCount = $recipients->count();

        // Jika tidak ada penerima, nominal diterima default adalah 0
        $nominalAcceptedDefault = $recipientCount > 0 ? $totalDonation / $recipientCount : 0;

        // Pembagian awal
        $totalAccepted = 0;
        foreach ($recipients as $recipient) {
            $nowUkt = $recipient->student->academic_information->now_ukt;
            $recipient->nominalAccepted = min($nominalAcceptedDefault, $nowUkt);
            $totalAccepted += $recipient->nominalAccepted;
        }

        // Hitung sisa donasi yang belum didistribusikan
        $remainingDonation = $totalDonation - $totalAccepted;

        // Filter mahasiswa yang masih kurang donasi
        $recipientsNeedingMore = $recipients->filter(function ($recipient) {
            return $recipient->nominalAccepted < $recipient->student->academic_information->now_ukt;
        });

        $recipientsNeedingMoreCount = $recipientsNeedingMore->count();

        if ($recipientsNeedingMoreCount > 0) {
            $additionalDonationPerRecipient = $remainingDonation / $recipientsNeedingMoreCount;

            foreach ($recipientsNeedingMore as $recipient) {
                $nowUkt = $recipient->student->academic_information->now_ukt;
                $currentAccepted = $recipient->nominalAccepted;
                $difference = $nowUkt - $currentAccepted;

                if ($difference > 0) {
                    $recipient->nominalAccepted += min($difference, $additionalDonationPerRecipient);
                }
            }
        }

        return view('admin.layouts.recipient', [
            "title" => "Penerima Donasi",
            "recipients" => $recipients
        ]);
    }
}
