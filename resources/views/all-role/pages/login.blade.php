@extends('all-role.layouts.auth')

@section('title', 'login')
@section('auth')
<section id="login" class="flex p-[0] m-[0]">
    <div class="w-1/2 h-[100vh] bg-blue rounded-r-[50px] hidden lg:flex flex-col gap-12 justify-center items-center">
    </div>
    <div class="w-1/2 h-[100vh] py-[50px] flex justify-center items-center">
        <div class="w-full flex justify-center flex-col items-center">
            <h1 class="text-center font-bold text-[28px] text-navy">LOGIN PAGE</h1>
            <p class="w-[450px] text-center font-light mb-[30px]">Masukan email dan password dengan benar</p>
            <form action="/authenticate" method="POST"
                class="flex flex-col justify-center w-full px-8 sm:px-14 sm:max-w-[650px] md:px-16">
                @csrf
                <span class="flex flex-col gap-2 mb-5">
                    <label for="email" class="font-semibold text-[18px]">Email</label>
                    <input type="text" name="email" id="email" class="border border-grey4 w-full px-5 py-4"
                        placeholder="Masukan email Anda!">
                    @error('email')
                    <p class="text-red">{{ $message }}</p>
                    @enderror
                </span>
                <span class="flex flex-col gap-2">
                    <label for="password" class="font-semibold text-[18px]">Password</label>
                    <input type="password" name="password" id="password" class="border border-grey4 w-full px-5 py-4"
                        placeholder="Masukan password Anda!">
                    @error('password')
                    <p class="text-red">{{ $message }}</p>
                    @enderror
                </span>
                <span class="pt-4 flex justify-between cursor-pointer">
                    <a href="/register">Belum Punya Akun?</a>
                    <p>Lupa Password</p>
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