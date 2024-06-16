<div id="informasi-tambahan"
    class="w-full h-[80dvh] py-[40px] bg-white shadow-lg border flex flex-col justify-center items-center">
    <div class="w-full flex flex-col items-center gap-3 ">
        <h1 class="font-bold text-[22px] text-black">Form Pendaftaran Penerima Donasi UKT Kampus 2024</h1>
        <p class="text-gray-500">Informasi Tambahan</p>
    </div>
    <div class="pt-8 w-full flex flex-col gap-2 text-greyText">
        <div class="row flex px-[100px] gap-10">
            <span class="flex flex-1 flex-col gap-2 mb-5">
                <label for="registrant_ktp" class="font-[600] text-[16px]">KTP Pendaftar</label>
                <input type="file" name="registrant_ktp" id="registrant_ktp"
                    class="bg-grey border-none px-5 py-3 rounded-md" placeholder="Masukan KTP Anda">
                @error('name')
                <p class="text-red">{{ $message }}</p>
                @enderror
            </span>
            <span class="flex flex-1 flex-col gap-2 mb-5">
                <label for="family_card" class="font-[600] text-[16px]">Foto KK</label>
                <input type="file" name="family_card" id="family_card" class="bg-grey border-none px-5 py-3 rounded-md"
                    placeholder="Masukan foto KK Anda!">
                @error('email')
                <p class="text-red">{{ $message }}</p>
                @enderror
            </span>
            <span class="flex flex-1 flex-col gap-2 mb-5">
                <label for="birth_certificate" class="font-[600] text-[16px]">Akta Kelahiran</label>
                <input type="file" name="birth_certificate" id="birth_certificate"
                    class="bg-grey border-none px-5 py-3 rounded-md" placeholder="Masukan akta kelahiran Anda!">
                @error('email')
                <p class="text-red">{{ $message }}</p>
                @enderror
            </span>
        </div>
        <div class="row flex px-[100px] gap-10">
            <span class="flex flex-1 flex-col gap-2 mb-5">
                <label for="sktm" class="font-[600] text-[16px]">Surat Keterangan Tidak Mampu</label>
                <input type="file" name="sktm" id="sktm" class="bg-grey border-none px-5 py-3 rounded-md"
                    placeholder="Masukan SKTM">
                @error('email')
                <p class="text-red">{{ $message }}</p>
                @enderror
            </span>
            <span class="flex flex-1 flex-col gap-2 mb-5">
                <label for="lant_certificate" class="font-[600] text-[16px]">Surat Tanah</label>
                <input type="file" name="lant_certificate" id="lant_certificate"
                    class="bg-grey border-none px-5 py-3 rounded-md" placeholder="Masukan surat tanah">
                @error('email')
                <p class="text-red">{{ $message }}</p>
                @enderror
            </span>
            <span class="flex flex-1 flex-col gap-2 mb-5">
                <label for="vehicle_stnk" class="font-[600] text-[16px]">STNK Kendaraan</label>
                <input type="file" name="vehicle_stnk" id="vehicle_stnk"
                    class="bg-grey border-none px-5 py-3 rounded-md" placeholder="Masukan STNK kendaraan Anda!">
                @error('email')
                <p class="text-red">{{ $message }}</p>
                @enderror
            </span>
        </div>
        <div class="row flex px-[100px] gap-10">
            <span class="flex w-[370px] flex-col gap-2 mb-5">
                <label for="house_from_outside" class="font-[600] text-[16px]">Rumah Tampak Luar</label>
                <input type="file" name="house_from_outside" id="house_from_outside"
                    class="bg-grey border-none px-5 py-3 rounded-md" placeholder="Masukan surat tanah">
                @error('email')
                <p class="text-red">{{ $message }}</p>
                @enderror
            </span>
            <span class="flex w-[370px] flex-col gap-2 mb-5">
                <label for="house_from_inside" class="font-[600] text-[16px]">Rumah Tampak Dalam</label>
                <input type="file" name="house_from_inside" id="house_from_inside"
                    class="bg-grey border-none px-5 py-3 rounded-md" placeholder="Masukan STNK kendaraan Anda!">
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