<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Register | Donasi UKT</title>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet" />
    @vite('resources/css/app.css')
    <script src="https://code.jquery.com/jquery-3.1.0.js"></script>
</head>

<body>
    <header>
        @include('all-role.components.navbar')
    </header>
    <section class="pt-[30px] pb-[5px]">
        <nav class="flex mb-6" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                <li class="inline-flex items-center">
                    <a href="/"
                        class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                        <svg class="w-3 h-3 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z" />
                        </svg>
                        Dashboard
                    </a>
                </li>
                <li aria-current="page">
                    <div class="flex items-center">
                        <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 9 4-4-4-4" />
                        </svg>
                        <span class="ms-1 text-sm font-medium text-gray-500 md:ms-2 dark:text-gray-400"> Form
                            Pendaftaran Penerima Donasi UKT</span>
                    </div>
                </li>
            </ol>
        </nav>
        <div>
            <form id="form-recipient" action="/add-recipient" method="post" enctype="multipart/form-data">
                @csrf
                @include('all-role.pages.form-register.informasi-pribadi')
                @include('all-role.pages.form-register.informasi-akademik')
                @include('all-role.pages.form-register.informasi-keluarga')
                @include('all-role.pages.form-register.informasi-keuangan')
                @include('all-role.pages.form-register.informasi-tambahan')
            </form>
        </div>
        @include('all-role.components.popup.form-register.submit-popup')
    </section>

    @include('sweetalert::alert')
    @yield('register')
    <script>
        $(document).ready(function(){
            let pages = 1;
            $('#informasi-akademik').hide();
            $('#informasi-keluarga').hide();
            $('#informasi-keuangan').hide();
            $('#informasi-tambahan').hide();

            $('.btn-next').click(function(event){
                event.preventDefault();
                if (pages == 1) {
                    $('#informasi-pribadi').hide();
                    $('#informasi-akademik').show();
                } else if (pages == 2) {
                    $('#informasi-akademik').hide();
                    $('#informasi-keluarga').show();
                } else if (pages == 3) {
                    $('#informasi-keluarga').hide();
                    $('#informasi-keuangan').show();
                } else if(pages == 4){
                    $('#informasi-keuangan').hide();
                    $('#informasi-tambahan').show();
                }

                if (pages < 5) {
                    pages += 1;
                } else {
                    $('.btn-submit').click(function(event){
                        $('#form-recipient').submit();
                    });
                }
            });

            $('.btn-back').click(function(event){
                event.preventDefault();
                if (pages == 4) {
                    $('#informasi-tambahan').hide();
                    $('#informasi-keuangan').show();
                } else if (pages == 3) {
                    $('#informasi-keuangan').hide();
                    $('#informasi-keluarga').show();
                } else if (pages == 2) {
                    $('#informasi-keluarga').hide();
                    $('#informasi-akademik').show();
                } else if (pages == 1) {
                    $('#informasi-akademik').hide();
                    $('#informasi-pribadi').show();
                }

                if (pages > 1) {
                    pages -= 1;
                }
            });
        });

    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>

</html>