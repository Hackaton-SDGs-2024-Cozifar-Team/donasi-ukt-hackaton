<?php

namespace App\Http\Controllers\Mahasiswa;

use App\Http\Controllers\Controller;
use App\Models\DonationRegistration;
use App\Models\student;
use Illuminate\Http\Request;

class DashboardMahasiswaController extends Controller
{
    public function index()
    {
        $student = student::where("id_user", 1)->first();
 
        return view("mahasiswa.dashboard",[
            "title"=> "Dashboard mahasiswa",
            "student"=> $student
        ]);
    }
}
