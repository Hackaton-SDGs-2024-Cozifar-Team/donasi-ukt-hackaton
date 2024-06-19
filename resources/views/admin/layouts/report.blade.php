@extends('admin.template')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div id="pemesanan_top" class="w-full d-flex align-items-center">
            <div id="donatur" class="me-3">
                <h4 id="pesanan-masuk" class="tab-link">Donatur</h4>
                <span class="line-text"></span>
            </div>
            <div id="penerima_donasi">
                <h4 id="pesanan-terkonfirmasi" class="tab-link">Penerima Donasi</h4>
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
        <div class="card">
            <div id="content_donatur">
                <div class="table-responsive text-nowrap p-3">
                    <form action="{{ route('report.index') }}" method="GET">
                        <div class="row mb-3 align-items-end">
                            <div class="col-2">
                                <label for="tgl_awal" class="form-label">Periode</label>
                                <select class="form-select" id="exampleFormControlSelect1"
                                    aria-label="Default select example" name="periode">
                                    <option selected disabled><--- Pilih Periode ---></option>
                                    @foreach ($periode as $item)
                                        <option value="{{ $item->id_periode }}">{{ $item->school_year }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-2">
                                <label for="tgl_awal" class="form-label">Tanggal Awal</label>
                                <input type="date" class="form-control" id="tgl_awal" name="tgl_awal">
                            </div>
                            <div class="col-2">
                                <label for="tgl_akhir" class="form-label">Tanggal Akhir</label>
                                <input type="date" class="form-control" id="tgl_akhir" name="tgl_akhir">
                            </div>
                            <div class="col-2">
                                <label class="form-label d-block">&nbsp;</label>
                                <button type="submit" class="btn btn-primary">Cari</button>
                            </div>
                        </div><br>
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
                            <tbody>
                                @foreach ($donatur as $data)
                                    <tr>
                                        <td>{{ $data->donation->user->fullname }}</td>
                                        <td>{{ $data->nominal_donation }}</td>
                                        <td>{{ $data->donation->user->email }}</td>
                                        <td>{{ $data->donation->user->no_telp }}</td>
                                        <td>{{ $data->donation_date }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <button type="submit" class="btn btn-success">Cetak</button>
                    </form>
                </div>
            </div>
            <div id="content_penerima_donasi">
                <div class="table-responsive text-nowrap p-3">
                    <form action="{{ route('report.index') }}" method="GET">
                        <div class="row mb-3 align-items-end">
                            <div class="col-2">
                                <label for="tgl_awal" class="form-label">Periode</label>
                                <select class="form-select" id="exampleFormControlSelect1"
                                    aria-label="Default select example" name="periode">
                                    <option selected disabled><--- Pilih Periode ---></option>
                                    @foreach ($periode as $item)
                                        <option value="{{ $item->id_periode }}">{{ $item->school_year }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-2">
                                <label class="form-label d-block">&nbsp;</label>
                                <button type="submit" class="btn btn-primary">Cari</button>
                            </div>
                        </div><br>
                        <table id="myTable2" class="table table-hover">
                            <thead>
                                <tr>
                                    <th>NIM</th>
                                    <th>Nama</th>
                                    <th>Fakultas</th>
                                    <th>Prodi</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($penerima_donasi as $data)
                                    <tr>
                                        <td>{{ $data->student->academic_information->nim }}</td>
                                        <td>{{ $data->student->users->fullname }}</td>
                                        <td>{{ $data->student->academic_information->faculty }}</td>
                                        <td>{{ $data->student->academic_information->study_program }}</td>
                                        <td>{{ $data->status }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <button type="submit" class="btn btn-success">Cetak</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#content_penerima_donasi").hide();
            $("#donatur").addClass("active");

            $("#donatur").click(function() {
                $("#content_donatur").show();
                $("#content_penerima_donasi").hide();

                $(this).addClass("active");
                $("#penerima_donasi").removeClass("active");

                $(".line-text").css("left", $(this).position().left);
            });

            $("#penerima_donasi").click(function() {
                $("#content_penerima_donasi").show();
                $("#content_donatur").hide();

                $(".line-text").css("left", $(this).position().left);

                $(this).addClass("active");
                $("#donatur").removeClass("active");
            });
        });
    </script>
    <script>
        let table = new DataTable('#myTable');
        let table2 = new DataTable('#myTable2');
    </script>
@endsection
