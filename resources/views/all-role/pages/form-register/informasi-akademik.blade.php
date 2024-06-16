<div id="informasi-akademik"
    class="w-full h-[80dvh] py-[40px] bg-white shadow-lg border flex flex-col justify-center items-center">
    <div class="w-full flex flex-col items-center gap-3">
        <h1 class="font-bold text-[22px] text-black">Form Pendaftaran Penerima Donasi UKT Kampus 2024</h1>
        <p class="text-gray-500">Informasi Akademik</p>
    </div>
    <div class="pt-8 w-full flex flex-col gap-2 text-greyText">
        <div class="row flex px-[100px] gap-10">
            <span class="flex flex-1 flex-col gap-2 mb-5">
                <label for="university" class="font-[600] text-[16px]">Universitas</label>
                <input type="text" name="university" id="university" class="bg-grey border-none px-5 py-3 rounded-md"
                    placeholder="Masukan universitas Anda!">
                @error('name')
                <p class="text-red">{{ $message }}</p>
                @enderror
            </span>
            <span class="flex flex-1 flex-col gap-2 mb-5">
                <label for="faculty" class="font-[600] text-[16px]">Fakultas/Jurusan</label>
                <input type="text" name="faculty" id="faculty" class="bg-grey border-none px-5 py-3 rounded-md"
                    placeholder="Masukan fakultas/jurusan Anda!">
                @error('email')
                <p class="text-red">{{ $message }}</p>
                @enderror
            </span>
            <span class="flex flex-1 flex-col gap-2 mb-5">
                <label for="study_program" class="font-[600] text-[16px]">Progam Studi</label>
                <input type="text" name="study_program" id="study_program"
                    class="bg-grey border-none px-5 py-3 rounded-md" placeholder="Masukan progam studi Anda!">
                @error('email')
                <p class="text-red">{{ $message }}</p>
                @enderror
            </span>
        </div>
        <div class="row flex px-[100px] gap-10">
            <span class="flex flex-1 flex-col gap-2 mb-5">
                <label for="nim" class="font-[600] text-[16px]">Nomor Induk Mahasiswa (NIM)</label>
                <input type="number" name="nim" id="nim" class="bg-grey border-none px-5 py-3 rounded-md"
                    placeholder="Masukan NIM Anda!">
                @error('email')
                <p class="text-red">{{ $message }}</p>
                @enderror
            </span>
            <span class="flex flex-1 flex-col gap-2 mb-5">
                <label for="study_year" class="font-[600] text-[16px]">Angkatan</label>
                <input type="number" name="study_year" id="study_year" class="bg-grey border-none px-5 py-3 rounded-md"
                    placeholder="Masukan angkatan Anda!">
                @error('email')
                <p class="text-red">{{ $message }}</p>
                @enderror
            </span>
            <span class="flex flex-1 flex-col gap-2 mb-5">
                <label for="now_semester" class="font-[600] text-[16px]">Semester Saat Ini</label>
                <input type="number" name="now_semester" id="now_semester"
                    class="bg-grey border-none px-5 py-3 rounded-md" placeholder="Masukan semester saat ini">
                @error('email')
                <p class="text-red">{{ $message }}</p>
                @enderror
            </span>
        </div>
        <div class="row flex justify-center px-[100px] gap-10">
            <span class="flex w-[370px] flex-col gap-2 mb-5">
                <label for="last_gpa" class="font-[600] text-[16px]">IPK Terakhir</label>
                <input type="number" name="last_gpa" id="last_gpa" class="bg-grey border-none px-5 py-3 rounded-md"
                    placeholder="Masukan IPK terakhir Anda!">
                @error('email')
                <p class="text-red">{{ $message }}</p>
                @enderror
            </span>
            <span class="flex w-[370px] flex-col gap-2 mb-5">
                <label for="now_ukt" class="font-[600] text-[16px]">UKT Sekarang</label>
                <input type="number" name="now_ukt" id="now_ukt" class="bg-grey border-none px-5 py-3 rounded-md"
                    placeholder="Masukan UKT Anda!">
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
</div>