@extends('admin.template')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        {{-- <div class="card mb-4">
            <div class="card-body">
                <h5 class="card-title">Pengumuman Belum dibuka</h5>
                <p class="card-text">
                    Pengumuman bisa dilihat pada tanggal 14 juli 2024
                </p>
            </div>
        </div> --}}
        @if ($data->status == "confirm")
        <div class="card mb-4">
            <div class="card-body">
                <h3 class="card-title">Selamat Anda Lolos Seleksi Penerimaan</h3>
                <div class="row mt-5">
                    <div class="col-3">
                        Status
                    </div>
                    <div class="col-5">
                        <p class="btn btn-success">Diterima</p>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-3">
                        Mendapatkan Bantuan
                    </div>
                    <div class="col-5">
                        <p class="">Rp 3.000.000</p>
                    </div>
                </div>
            </div>

        </div>
        @endif
     
        @if ($data->status == "rejected")
        <div class="card mb-4">
            <div class="card-body">
                <h3 class="card-title">Maaf Anda Belum Lolos </h3>
                <div class="row mt-5">
                    <div class="col-3">
                        Status
                    </div>
                    <div class="col-5">
                        <p class="btn btn-danger">Ditolak</p>
                    </div>
                </div>
   
            </div>

        </div>
        @endif
        
    </div>
@endsection
