<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DonationRegistration;
use App\Models\Periode;
use App\Models\student;
use Illuminate\Http\Request;

class SubmissionController extends Controller
{
    public function index()
    {
        $periode = Periode::where("status_period","=","active")->first();
        $submision_list = DonationRegistration::where('status', 'process')
        ->where("id_periode",$periode->id_periode)->get();

        return view("admin.layouts.submission", [
            "title" => "Pengajuan",
            "submision_list" => $submision_list
        ]);
    }

    public function detailSubmission($id_user)
    {
        $submission = Student::all()->where('id_user', $id_user)->firstOrFail();

        return view("admin.layouts.detail_submissions", [
            "title" => "Detail Pengajuan",
            "submission" => $submission
        ]);
    }

    public function updateStatus($id)
    {
        $submission = DonationRegistration::where('id_donation_registration', $id)->firstOrFail();
        $submission->status = "confirm";
        $submission->save();
        return redirect()->route('submission.index');
    }

    public function updateStatusRejected($id)
    {
        $submission = DonationRegistration::where('id_donation_registration', $id)->firstOrFail();
        $submission->status = "rejected";
        $submission->save();
        return redirect()->route('submission.index');
    }
}
