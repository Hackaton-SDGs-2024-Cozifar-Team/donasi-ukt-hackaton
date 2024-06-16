@extends('admin.template')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">


       

        <div class="nav-align-top mb-4">
            <ul class="nav nav-tabs nav-fill" role="tablist">
                <li class="nav-item">
                    <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab"
                        data-bs-target="#navs-biodata" aria-controls="navs-biodata" aria-selected="true">
                        <i class="tf-icons bx bx-user"></i> Biodata
                    </button>
                </li>
                <li class="nav-item">
                    <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                        data-bs-target="#navs-keluarga" aria-controls="navs-keluarga"
                        aria-selected="false">
                        <i class="tf-icons bx bx-home"></i> Keluarga
                    </button>
                </li>
                <li class="nav-item">
                    <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                        data-bs-target="#navs-ekonomi" aria-controls="navs-ekonomi"
                        aria-selected="false">
                        <i class="tf-icons bx bx-message-square"></i> Ekonomi
                    </button>
                </li>
                <li class="nav-item">
                    <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                        data-bs-target="#navs-tambahan" aria-controls="navs-tambahan"
                        aria-selected="false">
                        <i class="tf-icons bx bx-message-square"></i> Tambahan
                    </button>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane fade show active" id="navs-biodata" role="tabpanel">
                    <div class="d-flex gap-3">
                        
                        <img src="{{ asset('images/profile.JPG') }}" width="400px" alt="">
                        <div class="w-100">

                            <table class="table table-striped">
                                <tbody>
                                    <tr>
                                        <th><strong>Nomor Induk Mahasiswa (NIM)</strong></th>
                                        <td>{{ $student->academic_information->nim }}</td>    
                                    </tr>     
                                    <tr>
                                        <th><strong>Nama</strong></th>
                                        <td>Adza Zarif Nur Iskandar</td>    
                                    </tr>
                                    <tr>
                                        <th><strong>Tempat tanggal lahit</strong></th>
                                        <td>Blitar,  14 Februari 2003</td>    
                                    </tr>
                                    <tr>
                                        <th><strong>Alamat</strong></th>
                                        <td>Sumberaden rt 01 / rw 06 Mronjo Selopuro Blitar</td>    
                                    </tr>
                                    <tr>
                                        <th><strong>Program Studi</strong></th>
                                        <td>{{ $student->academic_information->study_program }}</td>    
                                    </tr>  
                                    <tr>
                                        <th><strong>Fakultas</strong></th>
                                        <td>{{ $student->academic_information->faculty }}</td>    
                                    </tr>  
                                    <tr>
                                        <th><strong>Tahun awal masuk</strong></th>
                                        <td>{{ $student->academic_information->study_year }}</td>    
                                    </tr>  
                                    <tr>
                                        <th><strong>Semester saat ini</strong></th>
                                        <td>{{ $student->academic_information->now_curriculum }}</td>    
                                    </tr>  
                                    <tr>
                                        <th><strong>IPK terakhir</strong></th>
                                        <td>{{ $student->academic_information->last_ipk }}</td>    
                                    </tr>  
                                    <tr>
                                        <th><strong>Uang Kuliah Tunggal (UKT)</strong></th>
                                        <td>{{ $student->academic_information->now_ukt }}</td>    
                                    </tr>  
                                </tbody>    
                            </table>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="navs-keluarga" role="tabpanel">
                    <div class="d-flex gap-3">
                        
                        <img src="{{ asset('images/profile.JPG') }}" width="400px" alt="">
                        <div class="w-100">

                            <table class="table table-striped">
                                <tbody>
                                    <tr>
                                        <th><strong>Nomor KK</strong></th>
                                        <td>{{ $student->family_information->number_kk }}</td>    
                                    </tr> 
                                    <tr>
                                        <th><strong>NIK Kepala keluarha</strong></th>
                                        <td>{{ $student->family_information->nik_headof_family }}</td>    
                                    </tr> 
                                    <tr>
                                        <th><strong>Nama Ayah</strong></th>
                                        <td>{{ $student->family_information->father_name }}</td>    
                                    </tr>
                                    <tr>
                                        <th><strong>Status Ayah</strong></th>
                                        <td>{{ $student->family_information->father_living_status }}</td>    
                                    </tr>  
                                    <tr>
                                        <th><strong>Pendidikan Ayah</strong></th>
                                        <td>{{ $student->family_information->father_last_education }}</td>    
                                    </tr>  
                                    <tr>
                                        <th><strong>Nama Ibu</strong></th>
                                        <td>{{ $student->family_information->mother_name }}</td>    
                                    </tr>
                                    <tr>
                                        <th><strong>Status Ibu</strong></th>
                                        <td>{{ $student->family_information->mother_living_status }}</td>    
                                    </tr>  
                                    <tr>
                                        <th><strong>Pendidikan Ibu</strong></th>
                                        <td>{{ $student->family_information->mother_last_education }}</td>    
                                    </tr>   
                                    <tr>
                                        <th><strong>Jumlah Tanggungan</strong></th>
                                        <td>{{ $student->family_information->dependents }}</td>    
                                    </tr>  
                                    <tr>
                                        <th><strong>Nomor Telepon Orang tua</strong></th>
                                        <td>{{ $student->family_information->phone_number }}</td>    
                                    </tr>  
                                </tbody>    
                            </table>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="navs-ekonomi" role="tabpanel">
                    <div class="d-flex gap-3">
                        
                        <img src="{{ asset('images/profile.JPG') }}" width="400px" alt="">
                        <div class="w-100">

                            <table class="table table-striped">
                                <tbody>
                                    <tr>
                                        <th><strong>Pekerjaan Ayah</strong></th>
                                        <td>{{ $student->family_information->father_last_education }}</td>    
                                    </tr>  
                                    <tr>
                                        <th><strong>Penghasilan Ayah</strong></th>
                                        <td>{{ $student->financial_information->father_income }}</td>    
                                    </tr>     
                                    <tr>
                                        <th><strong>Pekerjaan Ibu</strong></th>
                                        <td>{{ $student->family_information->mother_last_education }}</td>    
                                    </tr> 
                                    <tr>
                                        <th><strong>Penghasilan Ayah</strong></th>
                                        <td>{{ $student->financial_information->mother_income }}</td>    
                                    </tr>      
                            
                                </tbody>    
                            </table>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="navs-tambahan" role="tabpanel">
                    <div class="d-flex gap-3">
                        
                        <img src="{{ asset('images/profile.JPG') }}" width="400px" alt="">
                        <div class="w-100">

                            {{-- <table class="table table-striped">
                                <tbody>
                                    <tr>
                                        <th><strong>Pekerjaan Ayah</strong></th>
                                        <td>{{ $student->family_information->father_last_education }}</td>    
                                    </tr>  
                                    <tr>
                                        <th><strong>Penghasilan Ayah</strong></th>
                                        <td>{{ $student->financial_information->father_income }}</td>    
                                    </tr>     
                                    <tr>
                                        <th><strong>Pekerjaan Ibu</strong></th>
                                        <td>{{ $student->family_information->mother_last_education }}</td>    
                                    </tr> 
                                    <tr>
                                        <th><strong>Penghasilan Ayah</strong></th>
                                        <td>{{ $student->financial_information->mother_income }}</td>    
                                    </tr>      
                            
                                </tbody>    
                            </table> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
