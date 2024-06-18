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
                    <button
                          type="button"
                          class="btn btn-primary mb-2"
                          data-bs-toggle="modal"
                          data-bs-target="#basicModal"
                        >
                          Edit
                        </button>
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
                                        <td>{{ $student->users->fullname }}</td>    
                                    </tr>
                                    <tr>
                                        <th><strong>Tempat tanggal lahit</strong></th>
                                        <td>{{ $student->users->place_birth }},  {{ $student->users->date_birth }}</td>    
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
                                        <td>{{ $student->academic_information->now_semester }}</td>    
                                    </tr>  
                                    <tr>
                                        <th><strong>IPK terakhir</strong></th>
                                        <td>{{ $student->academic_information->last_gpa }}</td>    
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
                                        <td>{{ $student->family_information->father_occupation }}</td>    
                                    </tr>  
                                    <tr>
                                        <th><strong>Penghasilan Ayah</strong></th>
                                        <td>{{ $student->financial_information->father_income }}</td>    
                                    </tr>     
                                    <tr>
                                        <th><strong>Pekerjaan Ibu</strong></th>
                                        <td>{{ $student->family_information->mother_occupation }}</td>    
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
                        
                        {{-- <img src="{{ asset('images/profile.JPG') }}" width="400px" alt=""> --}}
                        <div class="w-100">

                            <table class="table table-striped">
                                <tbody>
                                    <tr>
                                        <th><strong>Foto KTP</strong></th>
                                        <td><img src="{{ asset('img/data-pendaftar/'.$student->additional_information->registrant_ktp) }}" width="200px" alt=""> </td>    
                                    </tr>  
                                    <tr>
                                        <th><strong>Foto Kartu Keluarga</strong></th>
                                        <td><img src="{{ asset('img/data-pendaftar/'.$student->additional_information->family_card) }}" width="200px" alt=""> </td>    
                                    </tr>  
                                    <tr>
                                        <th><strong>Foto Akta Kelahiran</strong></th>
                                        <td><img src="{{ asset('img/data-pendaftar/'.$student->additional_information->birth_certificate) }}" width="200px" alt=""> </td>    
                                    </tr>  
                                    <tr>
                                        <th><strong>Foto Sertifikat Tanah</strong></th>
                                        <td><img src="{{ asset('img/data-pendaftar/'.$student->additional_information->lant_certicate) }}" width="200px" alt=""> </td>    
                                    </tr>  
                                    <tr>
                                        <th><strong>Foto Stnk motor</strong></th>
                                        <td><img src="{{ asset('img/data-pendaftar/'.$student->additional_information->vehicle_stnk) }}" width="200px" alt=""> </td>    
                                    </tr>  
                                    <tr>
                                        <th><strong>Foto Rumah tampak luar</strong></th>
                                        <td><img src="{{ asset('img/data-pendaftar/'.$student->additional_information->house_from_outside) }}" width="200px" alt=""> </td>    
                                    </tr>  
                                    <tr>
                                        <th><strong>Foto Rumah tampak dalam</strong></th>
                                        <td><img src="{{ asset('img/data-pendaftar/'.$student->additional_information->house_from_inside) }}" width="200px" alt=""> </td>    
                                    </tr>  
                                </tbody>    
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

{{-- Modal edit biodata --}}
    <div class="modal fade" id="basicModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel1">Edit Biodata</h5>
              <button
                type="button"
                class="btn-close"
                data-bs-dismiss="modal"
                aria-label="Close"
              ></button>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col mb-3">
                  <label for="nameBasic" class="form-label">Nama</label>
                  <input type="text" id="nameBasic" value="{{ $student->users->fullname }}" class="form-control" placeholder="Masukan nama" />
                </div>
              </div>
              
              <div class="row g-2">
                <div class="col mb-0">
                  <label for="emailBasic" class="form-label">Tempat</label>
                  <input type="text" id="emailBasic" class="form-control" value="{{ $student->users->place_birth }}" placeholder="Masukan tempat" />
                </div>
                <div class="col mb-0">
                  <label for="dobBasic" class="form-label">tanggal lahir</label>
                  <input type="date" id="dobBasic" class="form-control" value="{{ $student->users->date_birth }}" placeholder="DD / MM / YY" />
                </div>
              </div>
              <div class="row">
                <div class="col mb-3">
                  <label for="nameBasic" class="form-label">Alamat</label>
                  <input type="text" id="nameBasic" class="form-control" value="Sumberaden rt 01 / rw 06 Mronjo Selopuro Blitar" placeholder="Enter Name" />
                </div>
              </div>
              <div class="row">
                <div class="col mb-3">
                  <label for="nameBasic" class="form-label">Program studi</label>
                  <input type="text" id="nameBasic" class="form-control" value="{{ $student->academic_information->study_program }}" placeholder="Enter Name" />
                </div>
              </div>
              <div class="row">
                <div class="col mb-3">
                  <label for="nameBasic" class="form-label">Fakultas</label>
                  <input type="text" id="nameBasic" class="form-control" value="{{ $student->academic_information->faculty }}" placeholder="Enter Name" />
                </div>
              </div>

              <div class="row g-2">
                <div class="col mb-0">
                  <label for="emailBasic" class="form-label">Tahun masuk</label>
                  <input type="number" id="emailBasic" value="{{ $student->academic_information->study_year }}" class="form-control" placeholder="Masukan tempat" />
                </div>
                <div class="col mb-0">
                  <label for="dobBasic" class="form-label">Semester saat ini</label>
                  <input type="number" id="dobBasic" class="form-control" value="{{ $student->academic_information->now_semester }}" placeholder="DD / MM / YY" />
                </div>
              </div>

              <div class="row g-2">
                <div class="col mb-0">
                  <label for="emailBasic" class="form-label">Ipk Terakhir</label>
                  <input type="number" id="emailBasic" value="{{ $student->academic_information->last_gpa }}" class="form-control" placeholder="Masukan tempat" />
                </div>
                <div class="col mb-0">
                  <label for="dobBasic" class="form-label">Uang Kuliah Tunggal (UKT)</label>
                  <input type="number" id="dobBasic" class="form-control" value="{{ $student->academic_information->now_ukt }}" placeholder="DD / MM / YY" />
                </div>
              </div>
              
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                Close
              </button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
      </div>
@endsection
