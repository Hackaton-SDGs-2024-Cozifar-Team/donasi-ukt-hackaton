<div id="informasi-akademik"
    class="w-full h-[80dvh] py-[40px] bg-white shadow-lg border flex flex-col justify-center items-center">
    <div class="w-full flex flex-col items-center gap-3">
        <h1 class="font-bold text-[22px] text-black">Form Pendaftaran Penerima Donasi UKT Kampus 2024</h1>
        <p class="text-gray-500">Informasi Akademik</p>
    </div>
    <form action="/add-recipient" class="w-full h-full flex flex-col justify-start" method="post">
        @csrf
        <div class="pt-8 w-full flex flex-col gap-2 text-greyText">
            <div class="row flex px-[100px] gap-10">
                <span class="flex flex-1 flex-col gap-2 mb-5">
                    <label for="university" class="font-[600] text-[16px]">Universitas</label>
                    <input disabled type="text" name="university" id="university"
                        class="bg-grey border-none px-5 py-3 rounded-md" placeholder="Masukan universitas Anda!">
                    @error('name')
                    <p class="text-red">{{ $message }}</p>
                    @enderror
                </span>
                <span class="flex flex-1 flex-col gap-2 mb-5">
                    <label for="place_birth" class="font-[600] text-[16px]">Fakultas/Jurusan</label>
                    <input type="text" name="place_birth" id="place_birth"
                        class="bg-grey border-none px-5 py-3 rounded-md" placeholder="Masukan fakultas/jurusan Anda!">
                    @error('email')
                    <p class="text-red">{{ $message }}</p>
                    @enderror
                </span>
                <span class="flex flex-1 flex-col gap-2 mb-5">
                    <label for="date_birth" class="font-[600] text-[16px]">Progam Studi</label>
                    <input type="text" name="date_birth" id="date_birth"
                        class="bg-grey border-none px-5 py-3 rounded-md" placeholder="Masukan progam studi Anda!">
                    @error('email')
                    <p class="text-red">{{ $message }}</p>
                    @enderror
                </span>
            </div>
            <div class="row flex px-[100px] gap-10">
                <span class="flex flex-1 flex-col gap-2 mb-5">
                    <label for="gender" class="font-[600] text-[16px]">Angkatan</label>
                    <input type="number" name="date_birth" id="date_birth"
                        class="bg-grey border-none px-5 py-3 rounded-md" placeholder="Masukan angkatan Anda!">
                    @error('email')
                    <p class="text-red">{{ $message }}</p>
                    @enderror
                </span>
                <span class="flex flex-1 flex-col gap-2 mb-5">
                    <label for="nik" class="font-[600] text-[16px]">Semester Saat Ini
                        (NIK)</label>
                    <input type="number" name="nik" id="nik" class="bg-grey border-none px-5 py-3 rounded-md"
                        placeholder="Masukan semester saat ini">
                    @error('email')
                    <p class="text-red">{{ $message }}</p>
                    @enderror
                </span>
                <span class="flex flex-1 flex-col gap-2 mb-5">
                    <label for="no_telp" class="font-[600] text-[16px]">IPK Terakhir</label>
                    <input type="number" name="no_telp" id="no_telp" class="bg-grey border-none px-5 py-3 rounded-md"
                        placeholder="Masukan IPK terakhir Anda!">
                    @error('email')
                    <p class="text-red">{{ $message }}</p>
                    @enderror
                </span>
            </div>
        </div>
        <div class="flex w-full px-[40px] justify-between mt-auto">
            <button class="btn-back bg-blue text-white px-10 py-2 rounded-md">Kembali</button>

            <button class="btn-next bg-blue text-white px-10 py-2 rounded-md">Lanjut</button>
        </div>
    </form>
</div>