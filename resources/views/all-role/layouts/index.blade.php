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
        <h4 class="max-w-[800px] text-center text-[18px] font-thin mt-3">Dukungan Anda melalui donasi UKT adalah langkah
            nyata dalam
            mendukung
            Sustainable
            Development Goals (SDGs),
            khususnya dalam mengurangi kemiskinan dan ketidaksetaraan. Bersama, kita dapat memberikan kesempatan
            pendidikan yang merata, memberdayakan generasi muda, dan menciptakan masa depan yang lebih adil dan
            berkelanjutan.</h4>
        <a href="#" class="button-blue mt-4"><span>Daftar Sekarang</span></a>
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
                <h3 class="font-bold text-[28px]">PROGAM DONASI UKT</h3>
                <h4 class="max-w-[600px] text-[20px] font-thin">Donasi UKT adalah platform donasi UKT yang bertujuan
                    untuk
                    mendukung mahasiswa
                    yang membutuhkan
                    bantuan biaya kuliah. Dengan berdonasi, Anda tidak hanya membantu mereka menyelesaikan pendidikan
                    tinggi tetapi juga berkontribusi dalam mencapai Sustainable Development Goals (SDGs), khususnya
                    dalam upaya ketidaksetaraan (SDG 10).</h4>
                <a href="#" class="button-blue mt-4"><span>Donasi Sekarang</span"></a>
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
            @for ($i = 0; $i < 4; $i++) <div class="card-timeline flex gap-6">
                <div class="flex flex-col items-center">
                    <div class="w-12 h-12 bg-blue text-white flex justify-center items-center rounded-full">
                        <i class="ri-calendar-fill"></i>
                    </div>
                    <span class="relative block w-[2px] h-[75px] bg-gray-300"></span>
                </div>
                <div>
                    <h5 class="text-[20px] font-semibold">Pendaftaran dan Pengajuan Pendaftar</h5>
                    <h6 class="text-gray-500">3 Juni - 3 Juli 2024</h6>
                    <p>Pendaftaran dilakukan secara daring dan akan diteruskan ke proses Verifikasi.</p>
                </div>
        </div>
        @endfor
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
            </div>
            <div class="w-1/2 flex gap-3 justify-end">
                <img src="../img/kemendikbud.png" alt="" class="w-[130px]">
                <img src="../img/sgds-logo-transparent.png" alt="" class="w-[130px]">
            </div>
        </div>
    </section>
    {{-- penerima section --}}
    <section class="flex flex-col justify-center items-center">
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
                @for ($i = 0; $i <= 10; $i++) <tr class="senin">
                    <td class="border border-gray-300 py-3">{{ $i +1 }}</td>
                    <td class="border border-gray-300 py-3">Nico Flassy</td>
                    <td class="border border-gray-300 py-3">Teknologi Informasi</td>
                    <td class="border border-gray-300 py-3">Teknik Informatika</td>
                    </tr>
                    @endfor
            </tbody>
        </table>
    </section>

    @include('all-role.components.footer')

    <script>
        $(document).ready(function(){
        $('#scroll-button').click(function(){
            $('html, body').animate({
                scrollTop: $('#about-me').offset().top
            }, 600); // 1000 adalah durasi animasi dalam milidetik
        });
    });
    </script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>

</html>