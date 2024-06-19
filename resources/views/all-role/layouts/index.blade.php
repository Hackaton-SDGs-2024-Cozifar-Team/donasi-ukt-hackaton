<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Donasi UKT</title>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet" />
    @vite('resources/css/app.css')
    <script src="https://code.jquery.com/jquery-3.1.0.js"></script>
</head>

<body>
    <header class="fixed w-full z-[999]">
        @include('all-role.components.navbar')
    </header>
    {{-- hero section --}}
    <section id="hero-section" class="flex flex-col justify-center items-center text-white pt-[180px]">
        <div class="flex gap-4 items-center">
            <img src="../img/kemendikbud.png" alt="kemendikbud" class="w-[80px]">
            <img src="../img/sgds-logo-transparent.png" alt="logo-sdgs" class="w-[80px]">
            <img src="../img/logo-donasi-ukt.png" alt="logo-sdgs" class="w-[80px]">
        </div>
        <h1 class="font-bold text-[32px]">PROGAM DONASI UKT</h1>
        <h3 class="font-medium text-[20px]">“Bersama, Membangun Masa Depan Pendidikan yang Lebih Baik”</h3>
        <h4 class="max-w-[800px] text-center text-[18px] font-thin mt-3 text-justify">Dukungan Anda melalui donasi UKT
            adalah langkah
            nyata dalam
            mendukung
            Sustainable
            Development Goals (SDGs),
            khususnya dalam mengurangi kemiskinan dan ketidaksetaraan. Bersama, kita dapat memberikan kesempatan
            pendidikan yang merata, memberdayakan generasi muda, dan menciptakan masa depan yang lebih adil dan
            berkelanjutan.</h4>
        <a href="/form-register" class="button-blue mt-4"><span>Daftar Sekarang</span></a>
        <button id="scroll-button"
            class="w-[70px] h-[70px] bg-blue absolute bottom-12 rounded-full flex items-center justify-center shadow-md">
            <i class="ri-arrow-down-s-line text-[40px]"></i>
        </button>
    </section>
    {{-- about me section --}}
    <section id="about-me" class="flex bg-blueLight flex-col justify-center items-center">
        <h2 class="bg-black text-white px-8 py-2 mb-14">ABOUT ME</h2>
        <div class="flex items-center text-black">
            <div class="w-1/2">
                <h3 class="font-bold text-[30px] mb-2">PROGAM DONASI UKT</h3>
                <h4 class="max-w-[600px] text-[20px] font-thin text-justify">Donasi UKT adalah platform donasi UKT yang
                    bertujuan
                    untuk
                    mendukung mahasiswa
                    yang membutuhkan
                    bantuan biaya kuliah. Dengan berdonasi, Anda tidak hanya membantu mereka menyelesaikan pendidikan
                    tinggi tetapi juga berkontribusi dalam mencapai Sustainable Development Goals (SDGs), khususnya
                    dalam upaya ketidaksetaraan (SDG 10).</h4>
                <div class="flex gap-2 mt-4">
                    <div id="donation-amount"
                        class="bg-white text-blue shadow-sm border px-8 py-2 border-blue flex flex-col justify-center items-center rounded-md">
                        <h3 class="text-[20px] font-bold">+0 Juta</h3>
                        <h3>Uang Donasi</h3>
                    </div>
                    <div id="donors-count"
                        class="bg-white text-blue shadow-sm border border-blue px-8 py-2 flex flex-col justify-center items-center rounded-md">
                        <h3 class="text-[20px] font-bold">0 Donatur</h3>
                        <h3>Terdaftar</h3>
                    </div>
                    <div id="verified-recipients"
                        class="bg-white text-blue shadow-sm border border-blue px-8 py-2 flex flex-col justify-center items-center rounded-md">
                        <h3 class="text-[20px] font-bold">0 Calon Penerima</h3>
                        <h3>Terverifikasi</h3>
                    </div>
                </div>

                <a href="/form-donasi" class="button-blue mt-4"><span>Donasi Sekarang</span"></a>
            </div>
            <div class="w-1/2">
                <img src="../img/landing-page/about-img.png" alt="">
            </div>
        </div>
    </section>
    {{-- timeline pendaftaran section --}}
    <section id="timeline-section" class="flex flex-col justify-center items-center">
        <h2 class="bg-black text-white px-8 py-2 mb-14">TIMELINE PENDAFTARAN</h2>
        <div class="text-black flex flex-col">
            @foreach($timelines as $timeline)
            <div class="card-timeline flex gap-6">
                <div class="flex flex-col items-center">
                    <div class="w-12 h-12 bg-blue text-white flex justify-center items-center rounded-full">
                        <i class="ri-calendar-fill"></i>
                    </div>
                    <span class="relative block w-[2px] h-[75px] bg-gray-300"></span>
                </div>
                <div>
                    <h5 class="text-[20px] font-semibold">{{ $timeline->title_timeline }}</h5>
                    <h6 class="text-gray-500">{{ $timeline->start }} - {{ $timeline->deadline }} </h6>
                    <p>{{ $timeline->description }}</p>
                </div>
            </div>
            @endforeach
    </section>
    {{-- pengumuman section --}}
    <section class="bg-gradient-to-r from-[#125C9D] to-[#4F129D]">
        <div class="flex">
            <div class="w-1/2">
                <h2 class="font-bold text-white text-[32px]">Pengumuman Final</h2>
                <h4 class="max-w-[700px] text-white font-thin text-[20px]">Pengumuman Finalis Penerima Donasi UKT 2024
                    Akan
                    dilaksanakan
                    umumkan pada tanggal 10 Juli 2024</h4>
                <div class="flex justify-start mt-4 gap-8">
                    <div class="flex flex-col items-center justify-center gap-2">
                        <p id="days"
                            class="w-[60px] h-[80px] bg-white rounded-full text-[24px] font-bold text-black flex justify-center items-center">
                            0
                        </p>
                        <p class="text-white">Hari</p>
                    </div>
                    <div class="flex flex-col items-center justify-center gap-2">
                        <p id="hours"
                            class="w-[60px] h-[80px] bg-white rounded-full text-[24px] font-bold text-black flex justify-center items-center">
                            0
                        </p>
                        <p class="text-white">Jam</p>
                    </div>
                    <div class="flex flex-col items-center justify-center gap-2">
                        <p id="minutes"
                            class="w-[60px] h-[80px] bg-white rounded-full text-[24px] font-bold text-black flex justify-center items-center">
                            0
                        </p>
                        <p class="text-white">Menit</p>
                    </div>
                    <div class="flex flex-col items-center justify-center gap-2">
                        <p id="seconds"
                            class="w-[60px] h-[80px] bg-white rounded-full text-[24px] font-bold text-black flex justify-center items-center">
                            0
                        </p>
                        <p class="text-white">Detik</p>
                    </div>
                </div>
            </div>
            <div class="w-1/2 flex gap-3 justify-end items-center">
                <img src="../img/kemendikbud.png" alt="" class="w-[150px]">
                <img src="../img/sgds-logo-transparent.png" alt="" class="w-[150px]">
            </div>
        </div>
    </section>
    {{-- penerima section --}}
    <section id="pengumuman-section" class="flex flex-col justify-center items-center">
        <h2 class="bg-black text-white px-8 py-2 mb-14">PENGUMUMAN PENERIMA DONASI UKT</h2>
        <table class="w-full">
            <thead class="bg-blue text-center text-white">
                <tr>
                    <td class="border border-gray-300 py-3">No</td>
                    <td class="border border-gray-300 py-3">Nama Penerima</td>
                    <td class="border border-gray-300 py-3">Fakultas/Jurusan</td>
                    <td class="border border-gray-300 py-3">Progam Studi</td>
                </tr>
            </thead>
            <tbody class="text-center">
                @if ($donation_registrations->count() > 0)
                <tr class="senin">
                    <td class="border border-gray-300 py-3">1</td>
                    <td class="border border-gray-300 py-3">Nico Flassy</td>
                    <td class="border border-gray-300 py-3">Teknologi Informasi</td>
                    <td class="border border-gray-300 py-3">Teknik Informatika</td>
                </tr>
                <tr class="senin">
                    <td class="border border-gray-300 py-3">1</td>
                    <td class="border border-gray-300 py-3">Nico Flassy</td>
                    <td class="border border-gray-300 py-3">Teknologi Informasi</td>
                    <td class="border border-gray-300 py-3">Teknik Informatika</td>
                </tr>
                <tr class="senin">
                    <td class="border border-gray-300 py-3">1</td>
                    <td class="border border-gray-300 py-3">Nico Flassy</td>
                    <td class="border border-gray-300 py-3">Teknologi Informasi</td>
                    <td class="border border-gray-300 py-3">Teknik Informatika</td>
                </tr>
                <tr class="senin">
                    <td class="border border-gray-300 py-3">1</td>
                    <td class="border border-gray-300 py-3">Nico Flassy</td>
                    <td class="border border-gray-300 py-3">Teknologi Informasi</td>
                    <td class="border border-gray-300 py-3">Teknik Informatika</td>
                </tr>
                <tr class="senin">
                    <td class="border border-gray-300 py-3">1</td>
                    <td class="border border-gray-300 py-3">Nico Flassy</td>
                    <td class="border border-gray-300 py-3">Teknologi Informasi</td>
                    <td class="border border-gray-300 py-3">Teknik Informatika</td>
                </tr>
                @else
                <tr class="senin">
                    <td class="border border-gray-300 py-[50px]" colspan="4">
                        <div class="flex justify-center w-[450px] mx-auto items-center p-4 text-sm text-gray-800 border border-gray-300 rounded-lg bg-gray-50 dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600"
                            role="alert">
                            <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                            </svg>
                            <span class="sr-only">Info</span>
                            <div>
                                <span class="font-medium">Penerima donasi UKT akan di tampilkan tanggal 10 Juli
                                    2024</span>
                            </div>
                        </div>
                    </td>
                </tr>
                @endif

            </tbody>
        </table>
    </section>

    @include('all-role.components.footer')

    <script>
        $(document).ready(function(){
        $('#scroll-button').click(function(){
            $('html, body').animate({
                scrollTop: $('#about-me').offset().top
            }, 600);
        });
    });
    </script>

    <script src="/js/timer.js"></script>
    <script src="/js/progam-donasi.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>

</html>