<?php

namespace App\Http\Controllers;

use App\Models\FinancialInformation;
use App\Models\student;
use Illuminate\Http\Request;

class SpkController extends Controller
{
    public function index()
    {
        $student = student::all();
        $nama = [];
        $penghasilan = [];
        $jumlah_tanggunan = [];
        foreach ($student as $key => $value) {
            $hasil = $value->financial_information->father_income + $value->financial_information->mother_income;
            array_push($penghasilan, $hasil);

            $tanggungan = $value->family_information->dependents;
            array_push($jumlah_tanggunan, $tanggungan);

            $fullname = $value->users->fullname;
            array_push($nama, $fullname);
        }
        // dd($nama);
        // dd($jumlah_tanggunan);
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
                'penghasilan'=> $value,
                'tanggungan'=> $result_tanggungan[$key],
                'jumlah' => $value + $result_tanggungan[$key],
            ]);
        }
        $collectResult = collect($resultFinal);
        $final = $collectResult->sortByDesc(function ($value) {
            return $value;
        });
        $sortedArray = $final->values()->all();

        return view("admin.layouts.spk",[
            "title"=> "spk",
            "data"=> $resultData,
            "ubahData"=> $resultUbahData,
            'tanggungan_terbesar'=> $tanggunganTerbesar,
            'penghasilan_terkecil'=> $penghasilanTerkecil,
            'normalisasiData'=> $resultNormalisasiData,
            'resultFinal'=> $sortedArray,
        ]);
    }
}
