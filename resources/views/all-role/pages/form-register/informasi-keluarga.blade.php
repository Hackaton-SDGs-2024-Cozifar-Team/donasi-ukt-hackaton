<div id="informasi-keluarga"
    class="w-full h-[80dvh] py-[40px] bg-white shadow-lg border flex flex-col justify-center items-center">
    <div class="w-full flex flex-col items-center gap-3 ">
        <h1 class="font-bold text-[22px] text-black">Form Pendaftaran Penerima Donasi UKT Kampus 2024</h1>
        <p class="text-gray-500">Informasi Keluarga</p>
    </div>
    <div class="pt-8 w-full flex flex-col gap-2 text-greyText">
        <div class="row flex px-[100px] gap-10">
            <span class="flex flex-1 flex-col gap-2 mb-5">
                <label for="father_name" class="font-[600] text-[16px]">Nama Ayah/wali</label>
                <input type="text" name="father_name" id="father_name" class="bg-grey border-none px-5 py-3 rounded-md"
                    placeholder="Masukan nama ayah/wali Anda!">
                @error('name')
                <p class="text-red">{{ $message }}</p>
                @enderror
            </span>
            <span class="flex flex-1 flex-col gap-2 mb-5">
                <label for="father_living_status" class="font-[600] text-[16px]">Status Kehidupan Ayah</label>
                <select id="father_living_status" name="father_living_status"
                    class="flex-1 bg-grey text-greyText border-none text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                    <option selected>Pilih Status Kehidupan</option>
                    <option value="masih hidup">Masih hidup</option>
                    <option value="sudah meninggal">Sudah meninggal</option>
                </select>
                @error('email')
                <p class="text-red">{{ $message }}</p>
                @enderror
            </span>
            <span class="flex flex-1 flex-col gap-2 mb-5">
                <label for="father_last_education" class="font-[600] text-[16px]">Pendidikan Terakhir Ayah</label>
                <select id="father_last_education" name="father_last_education"
                    class="flex-1 bg-grey text-greyText border-none text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                    <option selected>Pilih Pendidikan Terakhir</option>
                    <option value="tidak sekolah">Tidak sekolah</option>
                    <option value="SD">SD</option>
                    <option value="SMP">SMP</option>
                    <option value="SMA">SMA</option>
                    <option value="S1">S1 - Sarjana</option>
                    <option value="S2">S2 - Magister</option>
                    <option value="S3">S3 - Doktor</option>
                </select>
                @error('email')
                <p class="text-red">{{ $message }}</p>
                @enderror
            </span>
        </div>
        <div class="row flex px-[100px] gap-10">
            <span class="flex flex-1 flex-col gap-2 mb-5">
                <label for="father_occupation" class="font-[600] text-[16px]">Pekerjaan Ayah /wali</label>
                <input type="text" name="father_occupation" id="father_occupation"
                    class="bg-grey border-none px-5 py-3 rounded-md" placeholder="Masukan nama ayah/wali Anda!">
                @error('name')
                <p class="text-red">{{ $message }}</p>
                @enderror
            </span>
            <span class="flex flex-1 flex-col gap-2 mb-5">
                <label for="mother_name" class="font-[600] text-[16px]">Nama Ibu/Wali</label>
                <input type="text" name="mother_name" id="mother_name" class="bg-grey border-none px-5 py-3 rounded-md"
                    placeholder="Masukan nama ibu/wali Anda!">
                @error('name')
                <p class="text-red">{{ $message }}</p>
                @enderror
            </span>
            <span class="flex flex-1 flex-col gap-2 mb-5">
                <label for="mother_living_status" class="font-[600] text-[16px]">Status Kehidupan Ibu</label>
                <select id="mother_living_status" name="mother_living_status"
                    class="flex-1 bg-grey text-greyText border-none text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                    <option selected>Pilih Status Kehidupan</option>
                    <option value="masih hidup">Masih hidup</option>
                    <option value="sudah meninggal">Sudah meninggal</option>
                </select>
                @error('email')
                <p class="text-red">{{ $message }}</p>
                @enderror
            </span>
        </div>
        <div class="row flex px-[100px] gap-10">
            <span class="flex flex-1 flex-col gap-2 mb-5">
                <label for="mother_last_education" class="font-[600] text-[16px]">Pendidikan Terakhir Ibu</label>
                <select id="mother_last_education" name="mother_last_education"
                    class="flex-1 bg-grey text-greyText border-none text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                    <option selected>Pilih Pendidikan Terakhir</option>
                    <option value="tidak sekolah">Tidak sekolah</option>
                    <option value="SD">SD</option>
                    <option value="SMP">SMP</option>
                    <option value="SMA">SMA</option>
                    <option value="S1">S1 - Sarjana</option>
                    <option value="S2">S2 - Magister</option>
                    <option value="S3">S3 - Doktor</option>
                </select>
                @error('email')
                <p class="text-red">{{ $message }}</p>
                @enderror
            </span>
            <span class="flex flex-1 flex-col gap-2 mb-5">
                <label for="mother_occupation" class="font-[600] text-[16px]">Pekerjaan Ibu/wali</label>
                <input type="text" name="mother_occupation" id="mother_occupation"
                    class="bg-grey border-none px-5 py-3 rounded-md" placeholder="Masukan nama ibu/wali Anda!">
                @error('name')
                <p class="text-red">{{ $message }}</p>
                @enderror
            </span>
            <span class="flex flex-1 flex-col gap-2 mb-5">
                <label for="dependents" class="font-[600] text-[16px]">Jumlah Tanggungan</label>
                <input type="number" name="dependents" id="dependents" class="bg-grey border-none px-5 py-3 rounded-md"
                    placeholder="Masukan jumlah tanggungan orang tua!">
                @error('name')
                <p class="text-red">{{ $message }}</p>
                @enderror
            </span>
        </div>
        <div class="row flex justify-center px-[100px] gap-10">
            <span class="flex flex-1 flex-col gap-2 mb-5">
                <label for="phone_number" class="font-[600] text-[16px]">Nomor HP Ortu</label>
                <input type="number" name="phone_number" id="phone_number"
                    class="bg-grey border-none px-5 py-3 rounded-md" placeholder="Masukan nomor HP orang tua!">
                @error('name')
                <p class="text-red">{{ $message }}</p>
                @enderror
            </span>
            <span class="flex flex-1 flex-col gap-2 mb-5">
                <label for="family_photo" class="font-[600] text-[16px]">Foto Keluarga</label>
                <input type="file" name="family_photo" id="family_photo"
                    class="bg-grey border-none px-5 py-1 rounded-md" placeholder="Masukan STNK kendaraan Anda!">
                @error('email')
                <p class="text-red">{{ $message }}</p>
                @enderror
            </span>

            <span class="flex flex-1 flex-col gap-2 mb-5"></span>
        </div>
    </div>
    <div class="flex w-full px-[40px] justify-between mt-auto">
        <button class="btn-back bg-blue text-white px-10 py-2 rounded-md">Kembali</button>

        <button class="btn-next bg-blue text-white px-10 py-2 rounded-md">Lanjut</button>
    </div>
</div>