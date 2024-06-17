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
                            <th>Nama</th>
                            <th>Jumlah Donasi</th>
                            <th>Email</th>
                            <th>No HP</th>
                            <th>Tanggal Donasi</th>
                        </tr>
                    </thead>
                    @foreach ($donatur as $data)
                        <tr>
                            <td>{{ $data->donation->user->fullname }}</td>
                            <td>{{ $data->nominal_donation }}</td>
                            <td>{{  $data->donation->user->email }}</td>
                            <td>{{  $data->donation->user->no_telp }}</td>
                            <td>{{ $data->donation_date }}</td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>

    <script>
        let table = new DataTable('#myTable');
    </script>
@endsection
