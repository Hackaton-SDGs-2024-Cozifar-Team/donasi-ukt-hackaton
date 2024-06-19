<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use App\Models\DonationRegistration;
use App\Models\student;
use App\Models\timeline;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    public function index(){
        $id_user = Auth::user()->id ?? 0;
        $student = student::where("id_user", $id_user)->first();
        $id_student = $student->id_student ?? 0;
        $checkRegistration = DonationRegistration::where("student_id","=",$id_student)->count();

        $donatur = Donation::where("status","paid")->get()->groupBy("id_user")->count();
        $pengajuan = DonationRegistration::all()->count();
        $donations = Donation::where("status","paid")->get();
        $uangDonasi = 0;
        $dataDiterima = DonationRegistration::where("status","confirm")->get();

        foreach($donations as $donation){
            foreach($donation->detail_donation as $detail){

                $uangDonasi += $detail->nominal_donation;
            }
        }

        $timelines = timeline::all();

        $originalDate = $timelines[2]->deadline;

        $date = new DateTime($originalDate);

        $tanggal_pengumuman = $date->format('M d, Y 00:00:00');
        $donation_regist = DB::table('donation_registrations')
                                ->join('periodes', 'donation_registrations.id_periode', '=', 'periodes.id_periode')
                                ->where('donation_registrations.status', 'confirm')
                                ->where('periodes.status_period', 'active')
                                ->get();

        return view('all-role.layouts.index',[
            'timelines'=> $timelines,
            'donation_registrations' => $donation_regist,
            'checkRegistration'=> $checkRegistration,
            'donatur'=> $donatur,
            'uangDonasi'=> $uangDonasi,
            'pengajuan'=> $pengajuan,
            'dataDiterima'=> $dataDiterima,
            'tanggal_pengumuman'=> $tanggal_pengumuman,
        ]);
    }
}