<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DonationRegistration;
use Illuminate\Http\Request;

class SubmissionController extends Controller
{
    public function index()
    {
        $submision_list = DonationRegistration::select('donation_registrations.*', 'students.*', 'academic_information.*',
        'family_information.*',  'financial_information.*', 'additional_information.*', 'users.*', 'periodes.*')
        ->join('students', 'students.id_student', '=', 'donation_registrations.student_id')
        ->join('users', 'students.id_user', '=', 'users.id')
        ->join('academic_information', 'academic_information.id_academic_information', '=', 'students.id_academic_information')
        ->join('family_information', 'family_information.id_family_information', '=', 'students.id_family_information')
        ->join('financial_information', 'financial_information.id_financial_information', '=', 'students.id_financial_information')
        ->join('additional_information', 'additional_information.id_additional_information', '=', 'students.id_additional_information')
        ->join('periodes', 'periodes.id_periode', '=', 'donation_registrations.id_periode')
        ->where('donation_registrations.status', '=', 'Pengajuan')
        ->get();

        return view("admin.layouts.submission",[
            "title"=> "Pengajuan",
            "submision_list" => $submision_list
        ]);
    }
}
