<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DetailDonation;
use App\Models\Donation;
use App\Models\DonationDeveloper;
use App\Models\DonationRegistration;
use App\Models\Periode;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $periode = Periode::where("status_period","=","active")->first();
        $pengajuan = DonationRegistration::all()->count();
        $jumlahDiterima = DonationRegistration::where('status','confirm')->get()->count();
        $jumlahDitolak = DonationRegistration::where('status','rejected')->get()->count();
        $donatur = Donation::where("status","paid")->get()->groupBy("id_user")->count();

        $uangDeveloper = DonationDeveloper::sum("nominal_donation")->get();
        dd($uangDeveloper);

        $donations = Donation::where("status","paid")
        ->get();
        $uangDonasi = 0;

        
        

        foreach($donations as $donation){
            foreach($donation->detail_donation as $detail){
                if($periode->id_periode == $detail->id_periode){
                    $uangDonasi += $detail->nominal_donation;
                }
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
