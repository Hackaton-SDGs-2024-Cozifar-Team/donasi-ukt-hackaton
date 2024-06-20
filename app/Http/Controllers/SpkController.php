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
        $ukt = [];
        foreach ($student as $key => $value) {
            $hasil = $value->financial_information->father_income + $value->financial_information->mother_income;
            array_push($penghasilan, $hasil);

            $tanggungan = $value->family_information->dependents;
            array_push($jumlah_tanggunan, $tanggungan);

            $fullname = $value->users->fullname;
            array_push($nama, $fullname);

            $u = $value->academic_information->now_ukt;
            array_push($ukt, $u);
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
                "bobot"=> "0.25",
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
            ],
            [
                "id"=> "C3",
                "name"=> "UKT",
                "bobot"=> "0.25",
                "atribut"=> "benefit",
                "detail"=> [
                    [
                        "kelompok"=> "500000",
                        "nilai"=> "1",
                    ],
                    [
                        "kelompok"=> "1000000",
                        "nilai"=> "3",
                    ],
                    [
                        "kelompok"=> "2000000",
                        "nilai"=> "5",
                    ],
                    [
                        "kelompok"=> "3000000",
                        "nilai"=> "7",
                    ],
                    [
                        "kelompok"=> "4000000",
                        "nilai"=> "9",
                    ]
                ],
            ]
        ] ;

        $ubahPenghasilan = [];
        $ubahTanggungan = [];
        $ubahUkt = [];
        foreach($data as $key => $value){
            if($key == 0){
                foreach($penghasilan as $hasil){
                    foreach($value['detail'] as $key => $detail){

                        if($key == (count($value['detail']) - 1)){
                            if($hasil >= $detail['kelompok'] ){
                                array_push( $ubahPenghasilan, $detail['nilai']);
                                break;
                            }
                        }else{
                            if($hasil <= $detail['kelompok'] ){
                                array_push( $ubahPenghasilan, $detail['nilai']);
                                break;
                            }
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
            if($key == 2){
                foreach($ukt as $hasil){
                    foreach($value['detail'] as $key => $detail){

                        if($key == (count($value['detail']) - 1)){
                            if($hasil >= $detail['kelompok'] ){
                                array_push( $ubahUkt, $detail['nilai']);
                                break;
                            }
                        }else{
                            if($hasil <= $detail['kelompok'] ){
                                array_push( $ubahUkt, $detail['nilai']);
                                break;
                            }
                        }
                    }
                }
            }
            // dd($ubahUkt);
        }
   
        $penghasilanTerkecil = min($ubahPenghasilan);
        $tanggunganTerbesar = max($ubahTanggungan);
        $uktTerbesar = max($ubahUkt);

        $resultData = [];
        $resultUbahData = [];
        $resultNormalisasiData = [];
        $resultFinal = [];

        foreach($nama as $key => $value){
            array_push($resultData,[
                'name'=> $value,
                'penghasilan'=> $penghasilan[$key],
                'tanggungan'=> $jumlah_tanggunan[$key],
                'ukt'=> $ukt[$key]
            ]);
        }

        foreach($ubahPenghasilan as $key => $value){
            array_push($resultUbahData,[
                'name'=> $nama[$key],
                'penghasilan'=> $value,
                'tanggungan'=> $ubahTanggungan[$key],
                'ukt'=> $ubahUkt[$key],
            ]);
        }

        $normalisasiPenghasilan = [];
        $normalisasiTanggungan = [];
        $normalisasiUkt = [];

        foreach($ubahPenghasilan as $key => $value){
            $hasil_normalisasi_penghasilan = $penghasilanTerkecil / $value ;
            array_push($normalisasiPenghasilan, $hasil_normalisasi_penghasilan);

            $hasil_normalisasi_tanggungan =  $ubahTanggungan[$key] / $tanggunganTerbesar;
            array_push($normalisasiTanggungan, $hasil_normalisasi_tanggungan);

            $hasil_normalisasi_ukt =  $ubahUkt[$key] / $uktTerbesar;
            array_push($normalisasiUkt, $hasil_normalisasi_ukt);
        }

        foreach($normalisasiPenghasilan as $key => $value){
            array_push($resultNormalisasiData, [
                'name'=> $nama[$key],
                'penghasilan'=> $value,
                'tanggungan'=> $normalisasiTanggungan[$key],
                'ukt'=> $normalisasiUkt[$key],
            ]);
        }

        $result_penghasilan = [];
        $result_tanggungan = [];
        $result_ukt = [];
        $hasil_bobot = [];
       
        foreach($normalisasiPenghasilan as $key => $value){
            $result_akhir_penghasilan = $value * $data[0]['bobot'];
            array_push($result_penghasilan,$result_akhir_penghasilan);

            $result_akhir_tanggungan = $normalisasiTanggungan[$key] * $data[1]['bobot'];
            array_push($result_tanggungan, $result_akhir_tanggungan);

            $result_akhir_ukt = $normalisasiUkt[$key] * $data[2]['bobot'];
            array_push($result_ukt, $result_akhir_ukt);

            $jumlah_bobot = $result_akhir_penghasilan + $result_akhir_tanggungan + $result_akhir_ukt;
            array_push($hasil_bobot, $jumlah_bobot);
        }

        // dd($hasil_bobot[1]);
    
        foreach( $result_penghasilan as $key => $value){
            array_push($resultFinal, [
                'name'=> $nama[$key],
                'penghasilan'=> $value,
                'tanggungan'=> $result_tanggungan[$key],
                'jumlah' => $value + $result_tanggungan[$key],
                'ukt'=> $value + $result_ukt[$key]
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
            'ukt_terbesar'=> $uktTerbesar,
            'penghasilan_terkecil'=> $penghasilanTerkecil,
            'normalisasiData'=> $resultNormalisasiData,
            'resultFinal'=> $sortedArray,
        ]);
    }
}
