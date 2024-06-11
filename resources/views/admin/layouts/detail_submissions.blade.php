@extends('admin.template')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="nav-align-top mb-4">
            <ul class="nav nav-tabs nav-fill" role="tablist">
                <li class="nav-item">
                    <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab"
                        data-bs-target="#navs-justified-home" aria-controls="navs-justified-home" aria-selected="true">
                        <i class="tf-icons bx bx-user"></i> Biodata
                    </button>
                </li>
                <li class="nav-item">
                    <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                        data-bs-target="#navs-justified-profile" aria-controls="navs-justified-profile"
                        aria-selected="false">
                        <i class="tf-icons bx bx-home"></i> Keluarga
                    </button>
                </li>
                <li class="nav-item">
                    <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                        data-bs-target="#navs-justified-messages" aria-controls="navs-justified-messages"
                        aria-selected="false">
                        <i class="tf-icons bx bx-message-square"></i> Ekonomi
                    </button>
                </li>
                <li class="nav-item">
                    <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                        data-bs-target="#navs-justified-messages" aria-controls="navs-justified-messages"
                        aria-selected="false">
                        <i class="tf-icons bx bx-message-square"></i> Tambahan
                    </button>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane fade show active" id="navs-justified-home" role="tabpanel">
                    <div class="d-flex gap-3">
                        {{-- <img src="{{ asset('images/profile.JPG') }}" width="400px" alt=""> --}}
                        <div class="w-100">
                            <table class="table table-striped">
                                <tbody>
                                    <tr>
                                        <th><strong>Nomor Induk Mahasiswa (NIM)</strong></th>
                                        <td>{{ $submission->academic_information->nim }}</td>
                                    </tr>
                                    <tr>
                                        <th><strong>Nama</strong></th>
                                        <td>{{ $submission->users->fullname }}</td>
                                    </tr>
                                    <tr>
                                        <th><strong>Tempat Lahir</strong></th>
                                        <td>{{ $submission->users->place_birth }}</td>
                                    </tr>
                                    <tr>
                                        <th><strong>Tanggal Lahir</strong></th>
                                        <td>{{ $submission->users->date_birth }}</td>
                                    </tr>
                                    <tr>
                                        <th><strong>Jenis Kelamin</strong></th>
                                        <td>{{ $submission->users->gender }}</td>
                                    </tr>
                                    <tr>
                                        <th><strong>Email</strong></th>
                                        <td>{{ $submission->users->email }}</td>
                                    </tr>
                                    <tr>
                                        <th><strong>Fakultas</strong></th>
                                        <td>{{ $submission->academic_information->faculty }}</td>
                                    </tr>
                                    <tr>
                                        <th><strong>Program Studi</strong></th>
                                        <td>{{ $submission->academic_information->study_program }}</td>
                                    </tr>
                                    <tr>
                                        <th><strong>Angkatan</strong></th>
                                        <td>{{ $submission->academic_information->study_year }}</td>
                                    </tr>
                                    <tr>
                                        <th><strong>IPK Terakhir</strong></th>
                                        <td>{{ $submission->academic_information->last_ipk }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="navs-justified-profile" role="tabpanel">
                    <div class="d-flex gap-3">
                        {{-- <img src="{{ asset('images/profile.JPG') }}" width="400px" alt=""> --}}
                        <div class="w-100">
                            <table class="table table-striped">
                                <tbody>
                                    <tr>
                                        <th><strong>Nama Ayah</strong></th>
                                        <td>{{ $submission->family_information->father_name }}</td>
                                    </tr>
                                    <tr>
                                        <th><strong>Status Ayah</strong></th>
                                        <td>{{ $submission->family_information->father_living_status }}</td>
                                    </tr>
                                    <tr>
                                        <th><strong>Pekerjaan Ayah</strong></th>
                                        <td>{{ $submission->family_information->father_occupation }}</td>
                                    </tr>
                                    <tr>
                                        <th><strong>Pendidikan Terakhir</strong></th>
                                        <td>{{ $submission->family_information->father_last_education }}</td>
                                    </tr>
                                    <tr>
                                        <th><strong>Nama Ibu</strong></th>
                                        <td>{{ $submission->family_information->mother_name }}</td>
                                    </tr>
                                    <tr>
                                        <th><strong>Status Ibu</strong></th>
                                        <td>{{ $submission->family_information->mother_living_status }}</td>
                                    </tr>
                                    <tr>
                                        <th><strong>Pekerjaan Ibu</strong></th>
                                        <td>{{ $submission->family_information->mother_occupation }}</td>
                                    </tr>
                                    <tr>
                                        <th><strong>Pendidikan Terakhir</strong></th>
                                        <td>{{ $submission->family_information->mother_last_education }}</td>
                                    </tr>
                                    <tr>
                                        <th><strong>Tanggungan Kepala Keluar</strong></th>
                                        <td>{{ $submission->family_information->dependents }}</td>
                                    </tr>
                                    <tr>
                                        <th><strong>No HP Orang Tua</strong></th>
                                        <td>{{ $submission->family_information->phone_number }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="navs-justified-messages" role="tabpanel">
                    <div class="d-flex gap-3">
                        <div class="w-100">
                            <table class="table table-striped">
                                <tbody>
                                    <tr>
                                        <th><strong>SKTM</strong></th>
                                        {{-- <td>{{ $submission->additional_information->sktm }}</td> --}}
                                        <td><img src="{{ asset('images/profile.JPG') }}" width="100px" alt=""></td>
                                    </tr>
                                    <tr>
                                        <th><strong>Foto KTP</strong></th>
                                        <td>{{ $submission->additional_information->registrant_ktp }}</td>
                                    </tr>
                                    <tr>
                                        <th><strong>Kartu Keluarga</strong></th>
                                        <td>{{ $submission->additional_information->family_card }}</td>
                                    </tr>
                                    <tr>
                                        <th><strong>Akte Kelahiran</strong></th>
                                        <td>{{ $submission->additional_information->birth_certificate }}</td>
                                    </tr>
                                    <tr>
                                        <th><strong>Surat Tanah</strong></th>
                                        <td>{{ $submission->additional_information->lant_certificate }}</td>
                                    </tr>
                                    <tr>
                                        <th><strong>STNK Kendaraan</strong></th>
                                        <td>{{ $submission->additional_information->vehicle_stnk }}</td>
                                    </tr>
                                    <tr>
                                        <th><strong>Rumah Tampak Depan</strong></th>
                                        <td>{{ $submission->additional_information->house_from_outside }}</td>
                                    </tr>
                                    <tr>
                                        <th><strong>Rumah Tampak Dalam</strong></th>
                                        <td>{{ $submission->additional_information->house_from_inside }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
