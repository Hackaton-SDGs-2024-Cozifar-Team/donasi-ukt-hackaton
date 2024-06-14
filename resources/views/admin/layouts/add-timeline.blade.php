@extends('admin.template')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <form action="{{ route('timeline.store') }}" method="POST">
        @csrf
    <div class="row">
        <div class="col-xl-12">
            <div class="card mb-4">
              <h5 class="card-header">Tahapan 1</h5>
              <div class="card-body">
                <div>
                  <label for="defaultFormControlInput" class="form-label">Judul</label>
                  <input
                    type="text"
                    class="form-control"
                    name="title_timeline[]"
                    id="defaultFormControlInput"
                    placeholder="John Doe"
                    aria-describedby="defaultFormControlHelp"
                  />
                </div>
                <div class="row">
                    <div class="col-xxl-4">
                        <div class="mb-3">
                            <label for="html5-date-input" class="col-md-2 col-form-label">Start</label>
                            <div class="col-md-10">
                              <input class="form-control" name="start[]" type="date" value="2021-06-18" id="html5-date-input" />
                            </div>
                          </div>
                    </div>
                    <div class="col-xxl-4">
                        <div class="mb-3">
                            <label for="html5-date-input" class="col-md-3 col-form-label">Deadline</label>
                            <div class="col-md-10">
                              <input class="form-control" name="deadline[]" type="date" value="2021-06-18" id="html5-date-input" />
                            </div>
                          </div>
                    </div>
                </div>
                <div>
                    <label for="defaultFormControlInput" class="form-label">Deskripsi</label>
                    <input
                      type="text"
                      class="form-control"
                      name="description[]"
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

<script type="text/javascript">
    $(document).ready(function() {
        var max_field = 10;
        var wraper = $(".wraper");
        var addButton = $("#add-inp");
        var no = 1;
        $(addButton).click(function(e) {
            e.preventDefault();
            if (no < max_field) {
                no++
                console.log(no)
                $(wraper).append(
                    `<div class="card mb-4">
              <h5 class="card-header">Tahapan ${no}</h5>
              <div class="card-body">
                <div>
                  <label for="defaultFormControlInput" class="form-label">Judul</label>
                  <input
                    type="text"
                    name="title_timeline[]"
                    class="form-control"
                    id="defaultFormControlInput"
                    placeholder="John Doe"
                    aria-describedby="defaultFormControlHelp"
                  />
                </div>
                <div class="row">
                    <div class="col-xxl-4">
                        <div class="mb-3">
                            <label for="html5-date-input" class="col-md-2 col-form-label">Start</label>
                            <div class="col-md-10">
                              <input class="form-control" type="date" name="start[]" value="2021-06-18" id="html5-date-input" />
                            </div>
                          </div>
                    </div>
                    <div class="col-xxl-4">
                        <div class="mb-3">
                            <label for="html5-date-input" class="col-md-3 col-form-label">Deadline</label>
                            <div class="col-md-10">
                              <input class="form-control" name="deadline[]" type="date" value="2021-06-18" id="html5-date-input" />
                            </div>
                          </div>
                    </div>
                </div>
                <div>
                    <label for="defaultFormControlInput" class="form-label">Deskripsi</label>
                    <input
                      type="text"
                      class="form-control"
                      id="defaultFormControlInput"
                      name="description[]"
                      placeholder="John Doe"
                      aria-describedby="defaultFormControlHelp"
                    />
                  </div>
              </div>
             
                <button type="button" style="display: inline-block;" class="btn btn-danger mx-4 mb-4 remove-field">Hapus</button>
               
            </div>`
                    )
            }
        });
        $(wraper).on("click",".remove-field",function(e){
          e.preventDefault();
          $(this).parent('div').remove();
          x--;
        })
    
    })
    </script>
@endsection