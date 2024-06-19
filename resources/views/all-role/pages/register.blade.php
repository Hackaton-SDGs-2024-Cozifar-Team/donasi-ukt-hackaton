@extends('all-role.layouts.auth')

@section('title', 'login')
@section('auth')
<section id="register" class="flex p-[0] m-[0]">
    <div class="w-1/2 h-[100vh] bg-blue rounded-r-[50px] hidden lg:flex flex-col gap-12 justify-center items-center">
        <img src="../img/img_login.svg" alt="" class="w-[650px]">
    </div>
    <div class="w-1/2 h-[100vh] py-[50px] flex justify-center items-center">
        <div class="w-full flex justify-center flex-col items-center">
            <h1 class="text-center font-bold text-[28px] text-navy">REGISTER PAGE</h1>
            <p class="w-[450px] text-center font-light mb-[30px]">Masukan indentitas Anda untuk melanjutkan pendaftaran
                akun </p>
            <form action="/add-register" method="POST"
                class="flex flex-col justify-center w-full px-8 sm:px-14 sm:max-w-[650px] md:px-16">
                @csrf
                <span class="flex flex-col gap-2 mb-5">
                    <label for="name" class="font-semibold text-[18px]">Nama Pengguna</label>
                    <input type="text" name="name" id="name" class="border border-grey4 w-full px-5 py-4"
                        placeholder="Masukan nama Anda!">
                    @error('name')
                    <p class="text-red">{{ $message }}</p>
                    @enderror
                </span>
                <span class="flex flex-col gap-2 mb-5">
                    <label for="email" class="font-semibold text-[18px]">Email</label>
                    <input type="text" name="email" id="email" class="border border-grey4 w-full px-5 py-4"
                        placeholder="Masukan email Anda!">
                    @error('email')
                    <p class="text-red">{{ $message }}</p>
                    @enderror
                </span>
                <span class="flex flex-col gap-2 mb-5">
                    <label for="password" class="font-semibold text-[18px]">Password</label>
                    <input type="password" name="password" id="password" class="border border-grey4 w-full px-5 py-4"
                        placeholder="Masukan password Anda!">
                    @error('password')
                    <p class="text-red">{{ $message }}</p>
                    @enderror
                </span>
                <span class="flex flex-col gap-2">
                    <label for="confirm_password" class="font-semibold text-[18px]">Konfirmasi Password</label>
                    <input type="password" name="confirm_password" id="confirm_password"
                        class="border border-grey4 w-full px-5 py-4" placeholder="Masukan konfirmasi password Anda!">
                    @error('confirm_password')
                    <p class="text-red">{{ $message }}</p>
                    @enderror
                </span>
                <span class="pt-4 flex justify-start cursor-pointer">
                    <a href="/login">Sudah Punya Akun?</a>
                </span>
                <span class="flex justify-center">
                    <button type="submit"
                        class="bg-blue mt-8 w-[250px] text-center py-2 font-semibold text-white">LOGIN</button>
                </span>
            </form>
        </div>
    </div>
</section>
@endsection