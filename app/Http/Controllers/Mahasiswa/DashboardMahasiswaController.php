<?php

namespace App\Http\Controllers\Mahasiswa;

use App\Http\Controllers\Controller;
use App\Models\AcademicInformation;
use App\Models\DonationRegistration;
use App\Models\student;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardMahasiswaController extends Controller
{
    public function index()
    {
        $student = student::where("id_user", Auth::user()->id)->first();
 
        return view("mahasiswa.dashboard",[
            "title"=> "Dashboard mahasiswa",
            "student"=> $student
        ]);
    }

    public function updateAcademic(Request $request,$id)
    {
        $user = User::where("id", Auth::user()->id)->first();
        $user->fullname = $request->fullname;
        $user->place_birth = $request->place_birth;
        $user->date_birth = $request->date_birth;
        $user->address = $request->address;
        $user->save();

        $academic = AcademicInformation::where("id_academic_information", $id)->first();
        $academic->faculty = $request->faculty;
        $academic->study_program = $request->study_program;
        $academic->study_year = $request->study_year;
        $academic->now_semester = $request->now_semester;
        $academic->last_gpa = $request->last_gpa;
        $academic->now_ukt = $request->now_ukt;
        $academic->save();

        return redirect()->route("mahasiswa.index")->with("success","Data berhasil di update");
    }
}
