<div id="informasi-keuangan"
    class="w-full h-[80dvh] py-[40px] bg-white shadow-lg border flex flex-col justify-center items-center">
    <div class="w-full flex flex-col items-center gap-3 ">
        <h1 class="font-bold text-[22px] text-black">Form Pendaftaran Penerima Donasi UKT Kampus 2024</h1>
        <p class="text-gray-500">Informasi Keuangan</p>
    </div>
    <div class="pt-8 w-full flex flex-col gap-2 text-greyText">
        <div class="row flex px-[100px] gap-10">
            <span class="flex flex-1 flex-col gap-2 mb-5">
                <label for="father_income" class="font-[600] text-[16px]">Pendapatan Ayah/Wali</label>
                <input type="number" name="father_income" id="father_income"
                    class="bg-grey border-none px-5 py-3 rounded-md" placeholder="Masukan pendapatan ayah/wali Anda!">
                @error('name')
                <p class="text-red">{{ $message }}</p>
                @enderror
            </span>
            <span class="flex flex-1 flex-col gap-2 mb-5">
                <label for="proof_father_income" class="font-[600] text-[16px]">Bukti Gaji Ayah/Wali</label>
                <input type="file" name="proof_father_income" id="proof_father_income"
                    class="bg-grey border-none px-5 py-1 rounded-md" placeholder="Masukan tanggal lahir Anda!">
                @error('email')
                <p class="text-red">{{ $message }}</p>
                @enderror
            </span>
            <span class="flex flex-1 flex-col gap-2 mb-5">
                <label for="mother_income" class="font-[600] text-[16px]">Pendapatan Ibu/Wali</label>
                <input type="number" name="mother_income" id="mother_income"
                    class="bg-grey border-none px-5 py-3 rounded-md" placeholder="Masukan pendapatan ibu/wali Anda!">
                @error('name')
                <p class="text-red">{{ $message }}</p>
                @enderror
        </div>
        <div class="row flex px-[100px] gap-10">
            <span class="flex flex-1 flex-col gap-2 mb-5">
                <label for="proof_mother_income" class="font-[600] text-[16px]">Bukti Gaji Ibu/Wali</label>
                <input type="file" name="proof_mother_income" id="proof_mother_income"
                    class="bg-grey border-none px-5 py-1 rounded-md" placeholder="Masukan bukti gaji ibu/wali Anda!">
                @error('email')
                <p class="text-red">{{ $message }}</p>
                @enderror
            </span>
            <span class="flex flex-1 flex-col gap-2 mb-5">
                <label for="dependents" class="font-[600] text-[16px]">Jumlah Tanggungan</label>
                <input type="number" name="dependents" id="dependents" class="bg-grey border-none px-5 py-3 rounded-md"
                    placeholder="Masukan bukti gaji ibu/wali Anda!">
                @error('email')
                <p class="text-red">{{ $message }}</p>
                @enderror
            </span>
            <span class="flex flex-1 flex-col gap-2 mb-5">

            </span>
        </div>
    </div>
    <div class="flex w-full px-[40px] justify-between mt-auto">
        <button class="btn-back bg-blue text-white px-10 py-2 rounded-md">Kembali</button>

        <button class="btn-next bg-blue text-white px-10 py-2 rounded-md">Lanjut</button>
    </div>
</div>