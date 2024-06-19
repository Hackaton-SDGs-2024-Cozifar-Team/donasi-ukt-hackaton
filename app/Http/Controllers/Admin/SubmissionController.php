<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DonationRegistration;
use App\Models\student;
use Illuminate\Http\Request;

class SubmissionController extends Controller
{
    public function index()
    {
        $submision_list = DonationRegistration::all()->where('status', 'process');

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
}
