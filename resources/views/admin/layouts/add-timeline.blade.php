@extends('admin.template')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-xl-12">
            <div class="card mb-4">
              <h5 class="card-header">Urutan 1</h5>
              <div class="card-body">
                <div>
                  <label for="defaultFormControlInput" class="form-label">Judul</label>
                  <input
                    type="text"
                    class="form-control"
                    id="defaultFormControlInput"
                    placeholder="John Doe"
                    aria-describedby="defaultFormControlHelp"
                  />
                </div>
                <div>
                    <label for="defaultFormControlInput" class="form-label">Name</label>
                    <input
                      type="text"
                      class="form-control"
                      id="defaultFormControlInput"
                      placeholder="John Doe"
                      aria-describedby="defaultFormControlHelp"
                    />
                  </div>
                  <div>
                    <label for="defaultFormControlInput" class="form-label">Name</label>
                    <input
                      type="text"
                      class="form-control"
                      id="defaultFormControlInput"
                      placeholder="John Doe"
                      aria-describedby="defaultFormControlHelp"
                    />
                  </div>
              </div>
            </div>
          </div>
    </div>
</div>
@endsection