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
                <h2>Data </h2>
                <table id="myTable" class="table table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Penghasilan Keluarga</th>
                            <th>Jumlah Tanggungan</th>
                            <th>Jumlah UKT</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $d)
                            <tr>

                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $d['name'] }}</td>
                                <td>{{ $d['penghasilan'] }}</td>
                                <td>{{ $d['tanggungan'] }}</td>
                                <td>{{ $d['ukt'] }}</td>
                                
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="table-responsive text-nowrap p-3">
                <h2>Data Ubah</h2>
                <table id="myTable" class="table table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Penghasilan Keluarga</th>
                            <th>Jumlah Tanggungan</th>
                            <th>Jumlah UKT</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($ubahData as $d)
                            <tr>

                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $d['name'] }}</td>
                                <td>{{ $d['penghasilan'] }}</td>
                                <td>{{ $d['tanggungan'] }}</td>
                                <td>{{ $d['ukt'] }}</td>
                                
                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>{{ $penghasilan_terkecil }}</td>
                            <td>{{ $tanggungan_terbesar }}</td>
                            <td>{{ $ukt_terbesar }}</td>
                        </tr>
                    </tfoot>
                </table>
            </div>

            <div class="table-responsive text-nowrap p-3">
                <h2>Data Normalisasi</h2>
                <table id="myTable" class="table table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Penghasilan Keluarga</th>
                            <th>Jumlah Tanggungan</th>
                            <th>Jumlah UKT</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($normalisasiData as $d)
                            <tr>

                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $d['name'] }}</td>
                                <td>{{ $d['penghasilan'] }}</td>
                                <td>{{ $d['tanggungan'] }}</td>
                                <td>{{ $d['ukt'] }}</td>
                                
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="table-responsive text-nowrap p-3">
                <h2>Hasil</h2>
                <table id="myTable" class="table table-hover">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Penghasilan Keluarga</th>
                            <th>Jumlah Tanggungan</th>
                            <th>Jumlah UKT</th>
                            <th>Total</th>
                            <th>Ranking</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($resultFinal as $d)
                            <tr>

                                
                                <td>{{ $d['name'] }}</td>
                                <td>{{ $d['penghasilan'] }}</td>
                                <td>{{ $d['tanggungan'] }}</td>
                                <td>{{ $d['ukt'] }}</td>
                                <td>{{ $d['jumlah'] }}</td>
                                <td>{{ $loop->iteration }}</td>
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
