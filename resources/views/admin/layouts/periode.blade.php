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
                <div class="d-inline-block mb-3">
                    <a href="{{ route('periode.create') }}" class="btn btn-primary d-flex align-items-center">Tambah</a>
                </div>
                <table id="myTable" class="table table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Periode Sekarang</th>
                            <th>Status</th>
                            {{-- <th>Actions</th> --}}
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($periode as $data)
                            <tr>

                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $data->school_year }}</td>
                                <td><span class="badge <?= $data->status_period == 'active' ? 'bg-label-success' : 'bg-label-danger'  ?> me-1">{{ $data->status_period }}</span></td>
                                {{-- <td>
                                    <button type="button" class="btn btn-icon btn-outline-danger">
                                        <i class="bx bx-trash"></i>
                                    </button>
                                </td> --}}
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
