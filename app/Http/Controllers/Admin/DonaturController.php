<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DetailDonation;
use App\Models\Donation;
use Illuminate\Http\Request;

class DonaturController extends Controller
{
    public function index()
    {
        $donatur = DetailDonation::all();


        return view("admin.layouts.donatur", [
            "title" => "Donatur",
            "donatur" => $donatur
        ]);
}
}
