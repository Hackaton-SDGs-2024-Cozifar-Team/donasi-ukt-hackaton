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
    </div>

    <script>
        let table = new DataTable('#myTable');
    </script>
@endsection
