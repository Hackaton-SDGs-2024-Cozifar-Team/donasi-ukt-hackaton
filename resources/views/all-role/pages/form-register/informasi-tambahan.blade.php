<div id="informasi-tambahan"
    class="w-full h-[80dvh] py-[40px] bg-white shadow-lg border flex flex-col justify-center items-center">
    <form action="/add-recipient" class="w-full h-full flex flex-col justify-start" method="post">
        @csrf
        <div class="w-full flex flex-col items-center gap-3 ">
            <h1 class="font-bold text-[22px] text-black">Form Pendaftaran Penerima Donasi UKT Kampus 2024</h1>
            <p class="text-gray-500">Informasi Tambahan</p>
        </div>
        <div class="pt-8 w-full flex flex-col gap-2 text-greyText">
            <div class="row flex px-[100px] gap-10">
                <span class="flex flex-1 flex-col gap-2 mb-5">
                    <label for="name" class="font-[600] text-[16px]">KTP Pendaftar</label>
                    <input disabled type="text" name="name" id="name" class="bg-grey border-none px-5 py-3 rounded-md"
                        placeholder="Masukan KTP Anda" value="{{ Auth::user()->fullname}}">
                    @error('name')
                    <p class="text-red">{{ $message }}</p>
                    @enderror
                </span>
                <span class="flex flex-1 flex-col gap-2 mb-5">
                    <label for="place_birth" class="font-[600] text-[16px]">KTP Ayah/Wali</label>
                    <input type="text" name="place_birth" id="place_birth"
                        class="bg-grey border-none px-5 py-3 rounded-md" placeholder="Masukan KTP ayah/wali Anda!">
                    @error('email')
                    <p class="text-red">{{ $message }}</p>
                    @enderror
                </span>
                <span class="flex flex-1 flex-col gap-2 mb-5">
                    <label for="date_birth" class="font-[600] text-[16px]">KTP Ibu/Wali</label>
                    <input type="text" name="date_birth" id="date_birth"
                        class="bg-grey border-none px-5 py-3 rounded-md" placeholder="Masukan KTP ibu/wali Anda!">
                    @error('email')
                    <p class="text-red">{{ $message }}</p>
                    @enderror
                </span>
            </div>
            <div class="row flex px-[100px] gap-10">
                <span class="flex flex-1 flex-col gap-2 mb-5">
                    <label for="date_birth" class="font-[600] text-[16px]">Surat Keterangan Tidak Mampu</label>
                    <input type="text" name="date_birth" id="date_birth"
                        class="bg-grey border-none px-5 py-3 rounded-md" placeholder="Masukan SKTM">
                    @error('email')
                    <p class="text-red">{{ $message }}</p>
                    @enderror
                </span>
                <span class="flex flex-1 flex-col gap-2 mb-5">
                    <label for="nik" class="font-[600] text-[16px]">Surat Tanah</label>
                    <input type="text" name="nik" id="nik" class="bg-grey border-none px-5 py-3 rounded-md"
                        placeholder="Masukan surat tanah">
                    @error('email')
                    <p class="text-red">{{ $message }}</p>
                    @enderror
                </span>
                <span class="flex flex-1 flex-col gap-2 mb-5">
                    <label for="no_telp" class="font-[600] text-[16px]">STNK Kendaraan</label>
                    <input type="text" name="no_telp" id="no_telp" class="bg-grey border-none px-5 py-3 rounded-md"
                        placeholder="Masukan STNK kendaraan Anda!">
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