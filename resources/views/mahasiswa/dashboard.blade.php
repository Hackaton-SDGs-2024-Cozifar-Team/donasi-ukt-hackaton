@extends('admin.template')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">


       

        <div class="nav-align-top mb-4">
            <ul class="nav nav-tabs nav-fill" role="tablist">
                <li class="nav-item">
                    <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab"
                        data-bs-target="#navs-justified-home" aria-controls="navs-justified-home" aria-selected="true">
                        <i class="tf-icons bx bx-user"></i> Biodata
                        <span class="badge rounded-pill badge-center h-px-20 w-px-20 bg-label-danger">3</span>
                    </button>
                </li>
                <li class="nav-item">
                    <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                        data-bs-target="#navs-justified-profile" aria-controls="navs-justified-profile"
                        aria-selected="false">
                        <i class="tf-icons bx bx-home"></i> Keluarga
                    </button>
                </li>
                <li class="nav-item">
                    <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                        data-bs-target="#navs-justified-messages" aria-controls="navs-justified-messages"
                        aria-selected="false">
                        <i class="tf-icons bx bx-message-square"></i> Ekonomi
                    </button>
                </li>
                <li class="nav-item">
                    <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                        data-bs-target="#navs-justified-messages" aria-controls="navs-justified-messages"
                        aria-selected="false">
                        <i class="tf-icons bx bx-message-square"></i> Tambahan
                    </button>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane fade show active" id="navs-justified-home" role="tabpanel">
                    <div class="d-flex gap-3">
                        
                        <img src="{{ asset('images/profile.JPG') }}" width="400px" alt="">
                        <div class="w-100">

                            <table class="table table-striped">
                                <tbody>
                                    <tr>
                                        <th><strong>Nomor Induk Mahasiswa (NIM)</strong></th>
                                        <td>{{ $student->academic_information->nim }}</td>    
                                    </tr>     
                                    <tr>
                                        <th><strong>Nama</strong></th>
                                        <td>Adza Zarif Nur Iskandar</td>    
                                    </tr>
                                    <tr>
                                        <th><strong>Program Studi</strong></th>
                                        <td>{{ $student->academic_information->study_program }}</td>    
                                    </tr>  
                                </tbody>    
                            </table>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="navs-justified-profile" role="tabpanel">
                    <p>
                        Donut dragée jelly pie halvah. Danish gingerbread bonbon cookie wafer candy oat cake ice
                        cream. Gummies halvah tootsie roll muffin biscuit icing dessert gingerbread. Pastry ice cream
                        cheesecake fruitcake.
                    </p>
                    <p class="mb-0">
                        Jelly-o jelly beans icing pastry cake cake lemon drops. Muffin muffin pie tiramisu halvah
                        cotton candy liquorice caramels.
                    </p>
                </div>
                <div class="tab-pane fade" id="navs-justified-messages" role="tabpanel">
                    <p>
                        Oat cake chupa chups dragée donut toffee. Sweet cotton candy jelly beans macaroon gummies
                        cupcake gummi bears cake chocolate.
                    </p>
                    <p class="mb-0">
                        Cake chocolate bar cotton candy apple pie tootsie roll ice cream apple pie brownie cake. Sweet
                        roll icing sesame snaps caramels danish toffee. Brownie biscuit dessert dessert. Pudding jelly
                        jelly-o tart brownie jelly.
                    </p>
                </div>
            </div>
        </div>

    </div>
@endsection
