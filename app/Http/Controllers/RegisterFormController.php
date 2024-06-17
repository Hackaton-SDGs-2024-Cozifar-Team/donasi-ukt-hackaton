<?php

namespace App\Http\Controllers;

use App\Models\AcademicInformation;
use App\Models\AdditionalInformation;
use App\Models\FamilyInformation;
use App\Models\FinancialInformation;
use App\Models\student;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class RegisterFormController extends Controller
{
    public function index(){
        return view('all-role.layouts.register');
    }

    public function addRecipient(Request $request){
        // Validasi data menggunakan Validator
        $validator = Validator::make($request->all(), [
            'place_birth' => 'required',
            'date_birth' => 'required',
            'gender' => 'required',
            'no_telp' => 'required',
            'university' => 'required',
            'faculty' => 'required',
            'study_program' => 'required',
            'nim' => 'required',
            'study_year' => 'required',
            'now_semester' => 'required',
            'last_gpa' => 'required',
            'now_ukt' => 'required',
            'father_name' => 'required',
            'father_living_status' => 'required',
            'father_last_education' => 'required',
            'father_occupation' => 'required',
            'mother_name' => 'required',
            'mother_living_status' => 'required',
            'mother_last_education' => 'required',
            'mother_occupation' => 'required',
            'dependents' => 'required',
            'phone_number' => 'required',
            'father_income' => 'required',
            'proof_father_income' => 'required',
            'mother_income' => 'required',
            'proof_mother_income' => 'required',
            'registrant_ktp' => 'required',
            'family_card' => 'required',
            'birth_certificate' => 'required',
            'sktm' => 'required',
            'lant_certificate' => 'required',
            'vehicle_stnk' => 'required',
            'house_from_outside' => 'required',
            'house_from_inside' => 'required',
        ]);

        if ($validator->fails()) {
            Alert::warning('Peringatan!', 'Isi data dengan benar, pastikan semua data terisi!');
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $user  = User::where('id', Auth::user()->id)->first();

        $user_update = $user->update([
            'place_birth' => $request->place_birth,
            'date_birth' => $request->date_birth,
            'gender' => $request->gender,
            'no_telp' => $request->no_telp,
            'role' => 'recipient',
        ]);

        $academic_information = AcademicInformation::create([
            'university' => $request->university,
            'faculty' => $request->faculty,
            'study_program' => $request->study_program,
            'nim' => $request->nim,
            'study_year' => $request->study_year,
            'now_semester' => $request->now_semester,
            'last_gpa' => $request->last_gpa,
            'now_ukt' => $request->now_ukt,
        ]);

        $family_information = FamilyInformation::create([
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

        // $proof_father_income_path = $request->file('proof_father_income')->store('public/img/data-pendaftar');
        // $proof_mother_income_path = $request->file('proof_mother_income')->store('public/img/data-pendaftar');
        $proof_father_income = $request->file('proof_father_income');
        $proof_mother_income = $request->file('proof_mother_income');

        $proof_father_income_name = time() . '_proof_father_income.' . $proof_father_income->getClientOriginalExtension();
        $proof_mother_income_name = time() . '_proof_mother_income.' . $proof_mother_income->getClientOriginalExtension();

        $proof_father_income->move(public_path('img/data-pendaftar'), $proof_father_income_name);
        $proof_mother_income->move(public_path('img/data-pendaftar'), $proof_mother_income_name);

        $financial_information = FinancialInformation::create([
            'father_income' => $request->father_income,
            'proof_father_income' => $proof_father_income_name,
            'mother_income' => $request->mother_income,
            'proof_mother_income' => $proof_mother_income_name,
        ]);

        $registrant_ktp = $request->file('registrant_ktp');
        $family_card = $request->file('family_card');
        $birth_certificate = $request->file('birth_certificate');
        $sktm = $request->file('sktm');
        $lant_certificate = $request->file('lant_certificate');
        $vehicle_stnk = $request->file('vehicle_stnk');
        $house_from_outside = $request->file('house_from_outside');
        $house_from_inside = $request->file('house_from_inside');

        $registrant_ktp_name = time() . '_registrant_ktp.' . $registrant_ktp->getClientOriginalExtension();
        $family_card_name = time() . '_family_card.' . $family_card->getClientOriginalExtension();
        $birth_certificate_name = time() . '_birth_certificate.' . $birth_certificate->getClientOriginalExtension();
        $sktm_name = time() . '_sktm.' . $sktm->getClientOriginalExtension();
        $lant_certificate_name = time() . '_lant_certificate.' . $lant_certificate->getClientOriginalExtension();
        $vehicle_stnk_name = time() . '_vehicle_stnk.' . $vehicle_stnk->getClientOriginalExtension();
        $house_from_outside_name = time() . '_house_from_outside.' . $house_from_outside->getClientOriginalExtension();
        $house_from_inside_name = time() . '_house_from_inside.' . $house_from_inside->getClientOriginalExtension();

        $registrant_ktp->move(public_path('img/data-pendaftar'), $registrant_ktp_name);
        $family_card->move(public_path('img/data-pendaftar'), $family_card_name);
        $birth_certificate->move(public_path('img/data-pendaftar'), $birth_certificate_name);
        $sktm->move(public_path('img/data-pendaftar'), $sktm_name);
        $lant_certificate->move(public_path('img/data-pendaftar'), $lant_certificate_name);
        $vehicle_stnk->move(public_path('img/data-pendaftar'), $vehicle_stnk_name);
        $house_from_outside->move(public_path('img/data-pendaftar'), $house_from_outside_name);
        $house_from_inside->move(public_path('img/data-pendaftar'), $house_from_inside_name);

        $additional_information = AdditionalInformation::create([
            'registrant_ktp' => $registrant_ktp_name,
            'family_card' => $family_card_name,
            'birth_certificate' => $birth_certificate_name,
            'sktm' => $sktm_name,
            'lant_certificate' => $lant_certificate_name,
            'vehicle_stnk' => $vehicle_stnk_name,
            'house_from_outside' => $house_from_outside_name,
            'house_from_inside' => $house_from_inside_name,
        ]);

        student::create([
            'id_user' => Auth::user()->id,
            'id_academic_information' => $academic_information->id_academic_information,
            'id_family_information' => $family_information->id_family_information,
            'id_financial_information' => $financial_information->id_financial_information,
            'id_additional_information' => $additional_information->id_additional_information,
        ]);

        if($user_update){
            return redirect('/');
            Alert::success('Berhasil!', 'Data berhasil terkirim!');
        }
    }
}