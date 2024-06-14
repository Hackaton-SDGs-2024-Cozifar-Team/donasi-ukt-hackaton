<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Register | Donasi UKT</title>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet" />
    @vite('resources/css/app.css')
    <script src="https://code.jquery.com/jquery-3.1.0.js"></script>
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script> --}}
        <!-- @TODO: replace SET_YOUR_CLIENT_KEY_HERE with your client key -->
        <script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js"
        data-client-key="{{ config('midtrans.client_key') }}"></script>
</head>

<body>
    <header>
        @include('all-role.components.navbar')
    </header>
    <section class="pt-[30px] pb-[5px]">
        <nav class="flex mb-6" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                <li class="inline-flex items-center">
                    <a href="/"
                        class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                        <svg class="w-3 h-3 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z" />
                        </svg>
                        Dashboard
                    </a>
                </li>
                <li aria-current="page">
                    <div class="flex items-center">
                        <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 9 4-4-4-4" />
                        </svg>
                        <span class="ms-1 text-sm font-medium text-gray-500 md:ms-2 dark:text-gray-400"> Form
                            Pendaftaran Penerima Donasi UKT</span>
                    </div>
                </li>
            </ol>
        </nav>
        <div id="informasi-pribadi"
            class="w-full py-[100px] bg-white shadow-lg border flex flex-col justify-center items-center">
            <h1 class="font-bold text-[22px] text-black">Form Donasi UKT</h1>
            <p class="text-gray-500">Informasi Donatur</p>
            {{-- <form class="w-full" method="post"> --}}
                @csrf
                <div class="pt-8 w-full flex flex-col gap-2 text-greyText">
                    <div class="row flex px-[100px] gap-10">
                        <span class="flex flex-1 flex-col gap-2 mb-5">
                            <label for="name" class="font-[600] text-[16px]">Nama Lengkap</label>
                            <input disabled type="text" name="name" id="name"
                                class="bg-grey border-none px-5 py-3 rounded-md"
                                placeholder="Masukan nama lengkap Anda!" value="{{ Auth::user()->fullname }}">
                            @error('name')
                            <p class="text-red">{{ $message }}</p>
                            @enderror
                        </span>
                        <span class="flex flex-1 flex-col gap-2 mb-5">
                            <label for="no_telp" class="font-[600] text-[16px]">Nomor Telepon</label>
                            <input type="text" name="no_telp" id="no_telp"
                                class="bg-grey border-none px-5 py-3 rounded-md"
                                placeholder="Masukan nomor telepon Anda!">
                            @error('no_telp')
                            <p class="text-red">{{ $message }}</p>
                            @enderror
                        </span>
                        <span class="flex flex-1 flex-col gap-2 mb-5">
                            <label for="address" class="font-[600] text-[16px]">Alamat</label>
                            <input type="text" name="address" id="address"
                                class="bg-grey border-none px-5 py-3 rounded-md" placeholder="Masukan alamat Anda!">
                            @error('address')
                            <p class="text-red">{{ $message }}</p>
                            @enderror
                        </span>
                    </div>
                    <div class="row flex justify-center px-[100px] gap-10">
                        <span class="flex w-[370px] flex-col gap-2 mb-5">
                            <label for="nominal_donation" class="font-[600] text-[16px]">Nominal Donasi</label>
                            <input type="number" name="nominal_donation" id="nominal_donation"
                                class="bg-grey border-none px-5 py-3 rounded-md"
                                placeholder="Masukan nomimal donasi Anda!">
                            @error('email')
                            <p class="text-red">{{ $message }}</p>
                            @enderror
                        </span>
                    </div>
                </div>
                <div class="flex w-full px-[40px] pt-[100px] justify-center">
                    <button class="bg-blue text-white px-10 py-2 rounded-md" id="bayar">Donasi Sekarang</button>
                </div>
            {{-- </form> --}}
        </div>
    </section>
    <div id="snap-container"></div>
    @yield('register')
    {{-- <script>
        $(document).ready(function(){
            alert('Hello World!');
            // $('#scroll-button').click(function(){

            // });
        });
    </script> --}}
    <script type="text/javascript">
        $(document).ready(function() {
            $('#bayar').click(function() {
    
                // Buat array kosong untuk menyimpan nilai-nilai
                var price = $("#nominal_donation").val();
                var no_telp = $("#no_telp").val();
                var address = $("#address").val();
                // alert(price)
                var id = {{ Auth::user()->id }};
    
                const data = {
                    price: price,
                    user_id: id,
                    no_telp: no_telp,
                    address: address
                }
                var token = "";
                $.ajax({
                    url: "/api/getToken",
                    method: "post",
                    data: data,
                    success(res) {
                        console.log(res.token)
                        token = res.token;
                        window.snap.pay(token, {
                            onSuccess: function(result) {
                                /* You may add your own implementation here */
                                // window.location.assign("http://127.0.0.1:8000/success-payment")
                            },
                            onPending: function(result) {
                                /* You may add your own implementation here */
                                alert("wating your payment!");
                                console.log(result);
                            },
                            onError: function(result) {
                                /* You may add your own implementation here */
                                alert("payment failed!");
                                console.log(result);
                            },
                            onClose: function() {
                                /* You may add your own implementation here */
                                alert(
                                    'you closed the popup without finishing the payment'
                                    );
                            }
                        })
                    },
                    error(err) {
                        console.log(err)
                    }
                })
    
            })
        });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>



</html>