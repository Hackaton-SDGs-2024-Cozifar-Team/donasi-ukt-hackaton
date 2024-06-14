@extends('admin.template')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="col-md-6">
            <div class="card mb-2">
                <div class="card-body">
                    <form action="{{ route('periode.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label" for="school_year">Tahun Ajaran</label>
                            <input type="text" class="form-control" id="school_year" placeholder="Masukkan tahun ajaran"
                                name="school_year" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="status_period">Status</label>
                            <select class="form-select" id="status_period" aria-label="Default select example"
                                name="status_period">
                                <option value=""><--- Pilih Status ---></option>
                                <option value="Aktif">Aktif</option>
                                <option value="Tidak Aktif">Tidak Aktif</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
