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


                  <div class="card " >
                    <div class="table-responsive text-nowrap p-3">
                    <div class="d-inline-block mb-3">
                    <a href="{{ route('timeline.create') }}"  class="btn btn-primary d-flex align-items-center">Tambah</a>
                    </div>
                      <table id="myTable" class="table table-hover">
                        <thead>
                          <tr>
                            <th>Tahapan</th>
                            <th>Judul</th>
                            <th>Start</th>
                            <th>Deadline</th>
                            <th>Deskripsi</th>
                            <th>Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                            
                          @foreach ($timelines as $timeline)
                          <tr>
                            <td>{{ $timeline['stages'] }}</td>
                            <td>{{ $timeline['title_timeline'] }}</td>
                            <td>{{ $timeline['start'] }}</td>
                            <td>{{ $timeline['deadline'] }}</td>
                            <td>{{ $timeline['description'] }}</td>
                            <td class="d-flex gap-2">            
                              <form action="/admin/time-line/{{ $timeline['id_timeline'] }}/delete" method="post">
                                @csrf
                                <button type="submit" onclick="return confirm('Apakah yakin untuk menghapus')" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></button>
                              </form>
                              
                              <a class="btn btn-warning" href="/admin/time-line/{{ $timeline['id_timeline'] }}/edit" role="button"><i class="fa-solid fa-pen-to-square"></i></a>
                            
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