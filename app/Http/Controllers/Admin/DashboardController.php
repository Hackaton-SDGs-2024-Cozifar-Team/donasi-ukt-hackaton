<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DetailDonation;
use App\Models\Donation;
use App\Models\DonationRegistration;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $pengajuan = DonationRegistration::all()->count();
        $jumlahDiterima = DonationRegistration::where('status','diterima')->get()->count();
        $jumlahDitolak = DonationRegistration::where('status','ditolak')->get()->count();
        $donatur = Donation::where("status","paid")->get()->groupBy("id_user")->count();
        $donations = Donation::where("status","unpaid")->get();
        $uangDonasi = 0;

        
        

        foreach($donations as $donation){
            foreach($donation->detail_donation as $detail){
             
                $uangDonasi += $detail->nominal_donation;
            }
        }
        return view("admin.layouts.dashboard",[
            "title"=> "Dashboard",
            "pengajuan"=> $pengajuan,
            "jumlahDiterima"=> $jumlahDiterima,
            "jumlahDitolak"=> $jumlahDitolak,
            "donatur"=> $donatur,
            "uangDonasi"=> $uangDonasi,
        ]);
    }

    public function dataGrafik()
    {
        $grafikDonasi = DetailDonation::select(
            DB::raw('YEAR(donation_date) as year'),
            DB::raw('MONTH(donation_date) as month'),
            DB::raw('SUM(nominal_donation) as jumlah')
        )
        ->groupBy('year', 'month')
        // ->orderBy('year', 'month')
        ->get();

        $hasil = $grafikDonasi->map(function ($item) {
            $item->month_name = Carbon::create()->month($item->month)->locale('id')->monthName;
            return $item;
        });

        return response()->json($hasil);
    }
}
