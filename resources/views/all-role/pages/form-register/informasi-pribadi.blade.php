<div id="informasi-pribadi"
    class="w-full h-[80dvh] bg-white shadow-lg border flex flex-col justify-center items-center">
    <h1 class="font-bold text-[22px] text-black">Form Pendaftaran Penerima Donasi UKT Kampus 2024</h1>
    <p class="text-gray-500">Informasi Pribadi</p>
    <form action="/add-recipient" class="w-full" method="post">
        @csrf
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
                    <input type="text" name="place_birth" id="place_birth"
                        class="bg-grey border-none px-5 py-3 rounded-md" placeholder="Masukan tempat lahir Anda!">
                    @error('email')
                    <p class="text-red">{{ $message }}</p>
                    @enderror
                </span>
                <span class="flex flex-1 flex-col gap-2 mb-5">
                    <label for="date_birth" class="font-[600] text-[16px]">Tanggal Lahir</label>
                    <input type="date" name="date_birth" id="date_birth"
                        class="bg-grey border-none px-5 py-3 rounded-md" placeholder="Masukan tanggal lahir Anda!">
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
                    <label for="father_name" class="font-[600] text-[16px]">Nama Ayah/Wali</label>
                    <input type="text" name="father_name" id="father_name"
                        class="bg-grey border-none px-5 py-3 rounded-md" placeholder="Masukan ayah/wali Anda!">
                    @error('email')
                    <p class="text-red">{{ $message }}</p>
                    @enderror
                </span>
                <span class="flex flex-1 flex-col gap-2 mb-5">
                    <label for="mother_name" class="font-[600] text-[16px]">Nama Ibu/Wali</label>
                    <input type="text" name="mother_name" id="mother_name"
                        class="bg-grey border-none px-5 py-3 rounded-md" placeholder="Masukan nama ibu/wali Anda!">
                    @error('email')
                    <p class="text-red">{{ $message }}</p>
                    @enderror
                </span>
            </div>
            <div class="row flex justify-center items-center px-[100px] gap-10">
                <span class="flex w-[370px] flex-col gap-2 mb-5">
                    <label for="address" class="font-[600] text-[16px]">Alamat</label>
                    <textarea type="text" name="address" id="address" rows="4"
                        class="bg-grey border-none px-5 py-3 rounded-md"
                        placeholder="Masukan alamat lengkap Anda!"></textarea>
                    @error('email')
                    <p class="text-red">{{ $message }}</p>
                    @enderror
                </span>
            </div>
        </div>
        <div class="flex w-full px-[40px] justify-between">
            <button class="bg-blue text-white px-10 py-2 rounded-md">Kembali</button>
            <button type="submit" class="bg-blue text-white px-10 py-2 rounded-md">Simpan</button>
            <button class="bg-blue text-white px-10 py-2 rounded-md">Lanjut</button>
        </div>
    </form>
</div>