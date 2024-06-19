@extends('admin.template')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div id="pemesanan_top" class="w-full d-flex align-items-center">
            <div id="penerima-donasi" class="me-3">
                <h4 class="tab-link">Penerima Donasi</h4>
                <span class="line-text"></span>
            </div>
            <div id="pengajuan-ditolak">
                <h4 class="tab-link" id="pesanan-terkonfirmasi">Pengajuan Ditolak</h4>
                <span class="line-text"></span>
            </div>
        </div>
        {{-- alert untuk menampilkan notifikasi jika berhasil ditambahkan --}}
        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible" role="alert">
                {{ session()->get('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="card ">
            <div id="content_penerima">
                <div class="table-responsive text-nowrap p-3">
                    <table id="myTable" class="table table-hover">
                        <thead>
                            <tr>
                                <th>NIM</th>
                                <th>Nama Mahasiswa</th>
                                <th>Jurusan</th>
                                <th>Prodi</th>
                                <th>Ukt Sekarang</th>
                                <th>Nominal Diterima</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($recipients as $data)
                                <tr>
                                    <td>{{ $data->student->academic_information->nim }}</td>
                                    <td>{{ $data->student->users->fullname }}</td>
                                    <td>{{ $data->student->academic_information->faculty }}</td>
                                    <td>{{ $data->student->academic_information->study_program }}</td>
                                    <td>{{ number_format($data->student->academic_information->now_ukt, 0, ',', '.') }}</td>
                                    <td>{{ number_format($data->nominal_accepted, 0, ',', '.') }}</td>
                                    <td class="d-flex gap-2">
                                        <a href="{{ route('submission.detail', ['id_user' => $data->student->id_user]) }}"
                                            class="btn btn-icon btn-outline-secondary">
                                            <i class="bx bx-info-circle"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div id="content_ditolak">
                <div class="table-responsive text-nowrap p-3">
                    <table id="myTable2" class="table table-hover"> <!-- Menggunakan ID yang berbeda untuk table ini -->
                        <thead>
                            <tr>
                                <th>NIM</th>
                                <th>Nama Mahasiswa</th>
                                <th>Jurusan</th>
                                <th>Prodi</th>
                                <th>Ukt Sekarang</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($submissionRejected as $data)
                                <tr>
                                    <td>{{ $data->student->academic_information->nim }}</td>
                                    <td>{{ $data->student->users->fullname }}</td>
                                    <td>{{ $data->student->academic_information->faculty }}</td>
                                    <td>{{ $data->student->academic_information->study_program }}</td>
                                    <td>{{ number_format($data->student->academic_information->now_ukt, 0, ',', '.') }}
                                    </td>
                                    <td class="d-flex gap-2">
                                        <a href="{{ route('submission.detail', ['id_user' => $data->student->id_user]) }}"
                                            class="btn btn-icon btn-outline-secondary">
                                            <i class="bx bx-info-circle"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#penerima-donasi").addClass("active");
            $("#content_penerima").show();
            $("#content_ditolak").hide();

            $("#penerima-donasi").click(function() {
                $("#content_penerima").show();
                $("#content_ditolak").hide();

                $(this).addClass("active");
                $("#pengajuan-ditolak").removeClass("active");

                $(".line-text").css("left", $(this).position().left);
            });

            $("#pengajuan-ditolak").click(function() {
                $("#content_ditolak").show();
                $("#content_penerima").hide();

                $(this).addClass("active");
                $("#penerima-donasi").removeClass("active");

                $(".line-text").css("left", $(this).position().left);
            });
        });
    </script>

    <script>
        let table = new DataTable('#myTable');
        let table2 = new DataTable('#myTable2');
    </script>
@endsection
