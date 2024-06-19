<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DetailDonation;
use App\Models\Donation;
use App\Models\Periode;
use Illuminate\Http\Request;

class DonaturController extends Controller
{
    public function index()
    {
        $periode = Periode::where("status_period","=","active")->first();

        $donatur = DetailDonation::where('id_periode', $periode->id_periode)
        ->join('donations', 'detail_donations.id_donation', '=', 'donations.id_donation')
        ->where('donations.status', 'paid')
        ->select('detail_donations.*', 'donations.*')
        ->get();

        return view("admin.layouts.donatur", [
            "title" => "Donatur",
            "donatur" => $donatur
        ]);
}
}