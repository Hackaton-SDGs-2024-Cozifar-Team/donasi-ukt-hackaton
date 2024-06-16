<?php

namespace App\Http\Controllers;

use App\Models\AcademicInformation;
use App\Models\AdditionalInformation;
use App\Models\FamilyInformation;
use App\Models\FinancialInformation;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterFormController extends Controller
{
    public function index(){
        return view('all-role.layouts.register');
    }

    public function addRecipient(Request $request){
        // dd($request->all());
        $user  = User::where('id', Auth::user()->id)->first();

        $user_update = $user->update([
            'place_birth' => $request->place_birth,
            'date_birth' => $request->input('date_birth'),
            'gender' => $request->gender,
            'no_telp' => $request->no_telp,
            'role' => 'recipient',
        ]);

        AcademicInformation::create([
            'university' => $request->university,
            'faculty' => $request->faculty,
            'study_program' => $request->study_program,
            'nim' => $request->nim,
            'study_year' => $request->study_year,
            'now_semester' => $request->now_semester,
            'last_gpa' => $request->last_gpa,
            'now_ukt' => $request->now_ukt,
        ]);

        FamilyInformation::create([
            'father_name' => $request->father_name,
            'father_living_status' => $request->father_living_status,
            'father_last_education' => $request->father_last_education,
            'father_occupation' => $request->father_occupation,
            'mother_name' => $request->mother_name,
            'mother_living_status' => $request->mother_living_status,
            'mother_last_education' => $request->mother_last_education,
            'mother_occupation' => $request->mother_occupation,
            'dependents' => $request->dependents,
            'phone_number' => $request->phone_number,
        ]);

        FinancialInformation::create([
            'father_income' => $request->father_income,
            'proof_father_income' => $request->proof_father_income,
            'mother_income' => $request->mother_income,
            'proof_mother_income' => $request->proof_mother_income,
        ]);

        AdditionalInformation::create([
            'registrant_ktp' => $request->registrant_ktp,
            'family_card' => $request->family_card,
            'birth_certificate' => $request->birth_certificate,
            'sktm' => $request->sktm,
            'lant_certificate' => $request->lant_certificate,
            'vehicle_stnk' => $request->vehicle_stnk,
            'house_from_outside' => $request->house_from_outside,
            'house_from_inside' => $request->house_from_inside,
        ]);


        if($user_update){
            return redirect('/');
        }
    }
}