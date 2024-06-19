<div id="informasi-pribadi"
    class="w-full h-[80dvh] py-[40px] bg-white shadow-lg border flex flex-col justify-center items-center">
    <div class="w-full flex flex-col items-center gap-3 ">
        <h1 class="font-bold text-[22px] text-black">Form Pendaftaran Penerima Donasi UKT Kampus 2024</h1>
        <p class="text-gray-500">Informasi Pribadi</p>
    </div>
    <div class="pt-8 w-full flex flex-col gap-2 text-greyText">
        <div class="row flex px-[100px] gap-10">
            <span class="flex flex-1 flex-col gap-2 mb-5">
                <label for="name" class="font-[600] text-[16px]">Nama Lengkap</label>
                <input disabled type="text" name="name" id="name" class="bg-grey border-none px-5 py-3 rounded-md"
                    placeholder="Masukan nama lengkap Anda!" value="{{ Auth::user()->fullname}}">
                @error('name')
                <p class="text-red">{{ $message }}</p>
                @enderror
            </span>
            <span class="flex flex-1 flex-col gap-2 mb-5">
                <label for="place_birth" class="font-[600] text-[16px]">Tempat Lahir</label>
                <input type="text" name="place_birth" id="place_birth" class="bg-grey border-none px-5 py-3 rounded-md"
                    placeholder="Masukan tempat lahir Anda!">
                @error('email')
                <p class="text-red">{{ $message }}</p>
                @enderror
            </span>
            <span class="flex flex-1 flex-col gap-2 mb-5">
                <label for="date_birth" class="font-[600] text-[16px]">Tanggal Lahir</label>
                <input type="date" name="date_birth" id="date_birth" class="bg-grey border-none px-5 py-3 rounded-md"
                    placeholder="Masukan tanggal lahir Anda!">
                @error('email')
                <p class="text-red">{{ $message }}</p>
                @enderror
            </span>
        </div>
        <div class="row flex px-[100px] gap-10">
            <span class="flex flex-1 flex-col gap-2 mb-5">
                <label for="gender" class="font-[600] text-[16px]">Jenis Kelamin</label>
                <select id="gender" name="gender"
                    class="flex-1 bg-grey text-greyText border-none text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                    <option selected>Pilih Jenis Kelamin</option>
                    <option value="male">Laki - laki</option>
                    <option value="female">Perempuan</option>
                </select>
                @error('email')
                <p class="text-red">{{ $message }}</p>
                @enderror
            </span>
            <span class="flex flex-1 flex-col gap-2 mb-5">
                <label for="nik" class="font-[600] text-[16px]">Nomor Individu Kependudukan
                    (NIK)</label>
                <input type="text" name="nik" id="nik" class="bg-grey border-none px-5 py-3 rounded-md"
                    placeholder="Masukan Nomor Individu Kependudukan (NIK) Anda!">
                @error('email')
                <p class="text-red">{{ $message }}</p>
                @enderror
            </span>
            <span class="flex flex-1 flex-col gap-2 mb-5">
                <label for="no_telp" class="font-[600] text-[16px]">Nomor Telepon</label>
                <input type="text" name="no_telp" id="no_telp" class="bg-grey border-none px-5 py-3 rounded-md"
                    placeholder="Masukan nomor telepon Anda!">
                @error('email')
                <p class="text-red">{{ $message }}</p>
                @enderror
            </span>
        </div>
        <div class="row flex px-[100px] gap-10">
            <span class="flex flex-1 flex-col gap-2 mb-5">
                <label for="email" class="font-[600] text-[16px]">Alamat Email</label>
                <input disabled type="text" name="email" id="email" class="bg-grey border-none px-5 py-3 rounded-md"
                    placeholder="Masukan email Anda!" value="{{ Auth::user()->email}}">
                @error('email')
                <p class="text-red">{{ $message }}</p>
                @enderror
            </span>
            <span class="flex flex-1 flex-col gap-2 mb-5">
<<<<<<< Updated upstream
=======
                <label for="photo" class="font-[600] text-[16px]">Foto Pribadi</label>
                <input type="file" name="photo" id="photo" class="bg-grey border-none px-5 py-1 rounded-md"
                    placeholder="Masukan STNK kendaraan Anda!">
                @error('email')
                <p class="text-red">{{ $message }}</p>
                @enderror
            </span>
            <span class="flex flex-1 flex-col gap-2 mb-5">
>>>>>>> Stashed changes
                <label for="address" class="font-[600] text-[16px]">Alamat</label>
                <textarea style="resize: none;" type="text" name="address" id="address" rows="4"
                    class="bg-grey border-none px-5 py-3 rounded-md"
                    placeholder="Masukan alamat lengkap Anda!"></textarea>
                @error('email')
                <p class="text-red">{{ $message }}</p>
                @enderror
            </span>
            <div class="flex-1">
            </div>
        </div>

    </div>
    <div class="flex w-full px-[40px] justify-between mt-auto">
        <button class="btn-back bg-blue text-white px-10 py-2 rounded-md">Kembali</button>
        <button class="btn-next bg-blue text-white px-10 py-2 rounded-md">Lanjut</button>
    </div>
</div>