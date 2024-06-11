@extends('admin.template')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">

        {{-- alert untuk menampilkan notifikasi jika berhasil ditambahkan --}}
        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible" role="alert">
                {{ session()->get('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="card ">
            <div class="table-responsive text-nowrap p-3">
                <table id="myTable" class="table table-hover">
                    <thead>
                        <tr>
                            <th>NIM</th>
                            <th>Nama Mahasiswa</th>
                            <th>Jurusan</th>
                            <th>Prodi</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($submision_list as $data)
                            <tr>
                                <td>{{ $data->student->academic_information->nim }}</td>
                                <td>{{ $data->student->users->fullname }}</td>
                                <td>{{ $data->student->academic_information->faculty }}</td>
                                <td>{{ $data->student->academic_information->study_program }}</td>
                                <td class="d-flex gap-2">
                                    <a href="{{ route('submission.detail', ['id_user' => $data->student->id_user]) }}" class="btn btn-icon btn-outline-secondary">
                                        <i class="bx bx-info-circle"></i>
                                    </a>
                                    <form action="{{ route('submission.updateStatus', ['id_donation_registration' => $data->id_donation_registration]) }}" method="post">
                                        @csrf
                                        @method('put')
                                        <button type="submit" class="btn btn-icon btn-outline-success">
                                            <i class='bx bx-check'></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    {{-- @foreach ($submision_list as $data)
        <div class="col-lg-4 col-md-3">
            <!-- Modal -->
            <div class="modal fade" id="modalLong{{ $data->id }}" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="container">
                                <p><b>Nama Lengkap :</b> {{ $data->fullname }}</p>
                                <p><b>Tempat Lahir :</b> {{ $data->place_birth }}</p>
                                <p><b>Tanggal Lahir :</b> {{ $data->date_birth }}</p>
                                <p><b>No Telephone :</b> {{ $data->no_telp }}</p>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                Close
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach --}}


    <script>
        let table = new DataTable('#myTable');
    </script>
@endsection
