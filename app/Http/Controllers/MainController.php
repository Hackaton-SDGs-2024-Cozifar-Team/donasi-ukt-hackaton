<?php

namespace App\Http\Controllers;

use App\Models\timeline;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    public function index(){
        $timelines = timeline::all();
        $donation_regist = DB::table('donation_registrations')
                                ->join('periodes', 'donation_registrations.id_periode', '=', 'periodes.id_periode')
                                ->where('donation_registrations.status', 'confirm')
                                ->where('periodes.status_period', 'active')
                                ->get();

        return view('all-role.layouts.index',[
            'timelines'=> $timelines,
            'donation_registrations' => $donation_regist
        ]);
    }
}