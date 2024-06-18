@extends('admin.template')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <form action="{{ route('timeline.update', $timeline->id_timeline) }}" method="POST">
        @csrf
        <input type="hidden" value="{{ $timeline->stages }}" name="stages">
    <div class="row">
        <div class="col-xl-12">
            <div class="card mb-4">
              <h5 class="card-header">Tahapan {{ $timeline->stage }}</h5>
              <div class="card-body">
                <div>
                  <label for="defaultFormControlInput" class="form-label">Judul</label>
                  <input
                    type="text"
                    class="form-control"
                    name="title_timeline"
                    id="defaultFormControlInput"
                    placeholder="John Doe"
                    value="{{ $timeline->title_timeline }}"
                    aria-describedby="defaultFormControlHelp"
                  />
                </div>
                <div class="row">
                    <div class="col-xxl-4">
                        <div class="mb-3">
                            <label for="html5-date-input" class="col-md-2 col-form-label">Start</label>
                            <div class="col-md-10">
                              <input class="form-control" name="start" type="date" value="{{ $timeline->start }}" id="html5-date-input" />
                            </div>
                          </div>
                    </div>
                    <div class="col-xxl-4">
                        <div class="mb-3">
                            <label for="html5-date-input" class="col-md-3 col-form-label">Deadline</label>
                            <div class="col-md-10">
                              <input class="form-control" name="deadline" type="date" value="{{ $timeline->deadline }}" id="html5-date-input" />
                            </div>
                          </div>
                    </div>
                </div>
                <div>
                    <label for="defaultFormControlInput" class="form-label">Deskripsi</label>
                    <input
                      type="text"
                      class="form-control"
                      name="description"
                      value="{{ $timeline->description }}"
                      id="defaultFormControlInput"
                      placeholder="John Doe"
                      aria-describedby="defaultFormControlHelp"
                    />
                  </div>
              </div>
            </div>
            <div class="wraper"></div>
            <button type="button" class="btn btn-info" id="add-inp">Tambah Tahapan</button>
          </div>
    </div>

    <button class="btn btn-primary w-100 mt-3" type="submit">Simpan</button>
</form>
</div>
@endsection