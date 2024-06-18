<?php

namespace App\Http\Controllers\Mahasiswa;

use App\Http\Controllers\Controller;
use App\Models\DonationRegistration;
use App\Models\student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StatusMahasiswaController extends Controller
{
    public function index()
    {

        $student = student::where("id_user",Auth::user()->id)->first();
        $data = DonationRegistration::where("student_id",$student->id_student)->first(); 

        return view("mahasiswa.status",[
            "title"=> "Status",
            "data"=> $data
        ]);
    }
}
