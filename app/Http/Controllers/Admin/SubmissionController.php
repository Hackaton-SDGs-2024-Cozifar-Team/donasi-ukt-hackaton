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

        $student = student::all();
        $nama = [];
        $id_donation_registration = [];

        $penghasilan = [];
        $jumlah_tanggunan = [];
        $fakultas = [];
        $universitas = [];
        $nim = [];
        $id_user = [];
        foreach ($student as $key => $value) {
            $hasil = $value->financial_information->father_income + $value->financial_information->mother_income;
            array_push($penghasilan, $hasil);

            $tanggungan = $value->family_information->dependents;
            array_push($jumlah_tanggunan, $tanggungan);

            $fullname = $value->users->fullname;
            array_push($nama, $fullname);

            $id_donation = $value->donation_registration->id_donation_registration;
            array_push($id_donation_registration, $id_donation);

            $fk = $value->academic_information->faculty;
            array_push($fakultas, $fk);

            $univ =  $value->academic_information->university ;
            array_push($universitas, $univ);

            $n =  $value->academic_information->nim ;
            array_push($nim, $n);

            $ids =  $value->id_user ;
            array_push($id_user, $ids);
        }

        $data = [
            [
                "id"=> "C1",
                "name"=> "Gaji Orang tua",
                "bobot"=> "0.50",
                "atribut"=> "cost",
                "detail"=> [
                    [
                        "kelompok"=> "1000000",
                        "nilai"=> "9",
                    ],
                    [
                        "kelompok"=> "1500000",
                        "nilai"=> "7",
                    ],
                    [
                        "kelompok"=> "2000000",
                        "nilai"=> "5",
                    ],
                    [
                        "kelompok"=> "3500000",
                        "nilai"=> "3",
                    ],
                    [
                        "kelompok"=> "3500000",
                        "nilai"=> "9",
                    ]
                ],
            ],
            [
                "id"=> "C2",
                "name"=> "Jumlah Saudara",
                "bobot"=> "0.50",
                "atribut"=> "benefit",
                "detail"=> [
                    [
                        "kelompok"=> "1",
                        "nilai"=> "1",
                    ],
                    [
                        "kelompok"=> "2",
                        "nilai"=> "3",
                    ],
                    [
                        "kelompok"=> "3",
                        "nilai"=> "5",
                    ],
                    [
                        "kelompok"=> "4",
                        "nilai"=> "7",
                    ],
                    [
                        "kelompok"=> "5",
                        "nilai"=> "9",
                    ]
                ],
            ]
        ] ;

        $ubahPenghasilan = [];
        $ubahTanggungan = [];
        foreach($data as $key => $value){
            if($key == 0){
                foreach($penghasilan as $hasil){
                    foreach($value['detail'] as $detail){
                        if($hasil <= $detail['kelompok'] ){
                            array_push( $ubahPenghasilan, $detail['nilai']);
                            break;
                        }
                    }
                }
            }
            if($key == 1){
                foreach($jumlah_tanggunan as $hasil){
                    foreach($value['detail'] as $detail){
                        if($hasil <= $detail['kelompok'] ){
                            array_push( $ubahTanggungan, $detail['nilai']);
                            break;
                        }
                    }
                }
            }
        }
   
        $penghasilanTerkecil = min($ubahPenghasilan);
        $tanggunganTerbesar = max($ubahTanggungan);

        $resultData = [];
        $resultUbahData = [];
        $resultNormalisasiData = [];
        $resultFinal = [];

        foreach($nama as $key => $value){
            array_push($resultData,[
                'name'=> $value,
                'penghasilan'=> $penghasilan[$key],
                'tanggungan'=> $jumlah_tanggunan[$key]
            ]);
        }

        foreach($ubahPenghasilan as $key => $value){
            array_push($resultUbahData,[
                'name'=> $nama[$key],
                'penghasilan'=> $value,
                'tanggungan'=> $ubahTanggungan[$key],

            ]);
        }

        $normalisasiPenghasilan = [];
        $normalisasiTanggungan = [];

        foreach($ubahPenghasilan as $key => $value){
            $hasil_normalisasi_penghasilan = $penghasilanTerkecil / $value ;
            array_push($normalisasiPenghasilan, $hasil_normalisasi_penghasilan);

            $hasil_normalisasi_tanggungan =  $ubahTanggungan[$key] / $tanggunganTerbesar;
            array_push($normalisasiTanggungan, $hasil_normalisasi_tanggungan);
        }

        foreach($normalisasiPenghasilan as $key => $value){
            array_push($resultNormalisasiData, [
                'name'=> $nama[$key],
                'penghasilan'=> $value,
                'tanggungan'=> $normalisasiTanggungan[$key],
            ]);
        }

        $result_penghasilan = [];
        $result_tanggungan = [];
        $hasil_bobot = [];
       
        foreach($normalisasiPenghasilan as $key => $value){
            $result_akhir_penghasilan = $value * $data[0]['bobot'];
            array_push($result_penghasilan,$result_akhir_penghasilan);

            $result_akhir_tanggungan = $normalisasiTanggungan[$key] * $data[1]['bobot'];
            array_push($result_tanggungan, $result_akhir_tanggungan);

            $jumlah_bobot = $result_akhir_penghasilan + $result_akhir_tanggungan;
            array_push($hasil_bobot, $jumlah_bobot);
        }

        // dd($hasil_bobot[1]);
    
        foreach( $result_penghasilan as $key => $value){
            array_push($resultFinal, [
                'name'=> $nama[$key],
                'university'=> $universitas[$key],
                'id_donation_registration'=> $id_donation_registration[$key],
                'faculty'=> $fakultas[$key],
                'nim'=> $nim[$key],
                'id_user'=> $id_user[$key],
            ]);
        }
        $collectResult = collect($resultFinal);
        $final = $collectResult->sortByDesc(function ($value) {
            return $value;
        });
        $sortedArray = $final->values()->all();

        $periode = Periode::where("status_period","=","active")->first();
        $submision_list = DonationRegistration::where('status', 'process')
        ->where("id_periode",$periode->id_periode)->get();

        return view("admin.layouts.submission", [
            "title" => "Pengajuan",
            "submision_list" => $sortedArray
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
