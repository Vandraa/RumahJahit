<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Transaksi</title>
    @vite('resources/css/app.css')
    <style>
        /* Gaya untuk memperlihatkan pop up card */
        .show-popup {
            display: flex;
        }
    </style>
</head>
<body class="bg-gray-900">
    
<div>
    <div class=" container mx-auto -mt-6">
        <!-- Produk Start -->
        <div class="bg-white w-full p-5 sm:w-[550px] sm:mx-auto sm:mt-5 sm:rounded-md sm:shadow-lg">
            <div class="mb-5 -mt-3 grid grid-cols-4">
                <span class="text-sm font-medium justify-end col-start-4"><a href="{{ route('landing') }}">home</a> / <a href="{{ route('kemeja') }}">back</a></span>
            </div>
            <div class="flex">
                <img src="{{ Storage::url($data->image) }}" alt="" class="rounded-lg shadow-lg max-h-[80px]">
                <div class="ml-5">
                    <h1 class="font-bold text-xl mb-2">{{$data->nama_produk}}</h1>
                    <p class="hidden text-xs sm:block">{{$data->detail}}</p>
                    <button class="font-bold text-xs text-blue-800 sm:hidden" id="popupBtn">Cek Deksripsi Produk</button>
                </div>
            </div>
        </div>
        <!-- Produk End -->

        <!-- Masukan Jumlah Start -->
<form action="{{ route('transaksi.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class=" bg-white w-full px-5 border sm:w-[550px] sm:mx-auto sm:rounded-md sm:shadow-lg sm:mt-5">
        <h2 class="text-xl font-sans font-bold mb-3 mt-2">Masukan Jumlah Pembelian</h2>
        <input type="number" id="quantityInput" class="hover:bg-gray-700 [appearance:textfield] [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none rounded-md shadow-lg mb-4 h-[40px] w-full p-5 font-bold text-lg" value="1" name="jumlah">
    </div>
    <!-- Masukan Jumlah End -->

    <!-- Metode Size Start -->
    <div class="bg-white rounded-md shadow-lg mt-5 px-5 py-5 border sm:w-[550px] sm:mx-auto">
        <h2 class="text-xl font-bold font-sans mb-3">Pilih Ukuran</h2>
        <div class="sm:grid sm:grid-cols-2 sm:gap-2 justify-center">
            <input type="radio" class="peer hidden" name="size" value="S" id="S">
            <label for="S" class="group">
                <div class="flex items-center rounded-md hover:bg-gray-700 shadow-md overflow-hidden mb-4 p-5 border-2 border-transparent group-focus-within:border-sky-500 group-active:border-sky-500 justify-center">
                    <div class="flex items-center justify-center">
                        <input type="checkbox" id="S" class="absolute opacity-0 w-0 h-0 focus:ring-0 focus:outline-none">
                    </div>
                    <div class="w-full text-center">
                        <h2 class="text-lg sm:text-sm font-semibold"><span class="font-bold text-sm">S</span></h2>
                    </div>
                </div>
            </label>
    
            <input type="radio" class="peer hidden" name="size" value="M" id="M">
            <label for="M" class="group">
                <div class="flex items-center  rounded-md hover:bg-gray-700 shadow-md overflow-hidden mb-4 p-5 border-2 border-transparent group-focus-within:border-sky-500 group-active:border-sky-500 justify-center">
                    <div class="flex items-center justify-center">
                        <input type="checkbox" id="M" class="absolute opacity-0 w-0 h-0 focus:ring-0 focus:outline-none">
                    </div>
                    <div class="w-full text-center">
                        <h2 class="text-lg sm:text-sm font-semibold"><span class="font-bold text-sm">M</span></h2>
                    </div>
                </div>
            </label>
    
            <input type="radio" class="peer hidden" name="size" value="L" id="L">
            <label for="L" class="group">
                <div class="flex items-center  rounded-md hover:bg-gray-700 shadow-md overflow-hidden mb-4 p-5 border-2 border-transparent group-focus-within:border-sky-500 group-active:border-sky-500 justify-center">
                    <div class="flex items-center justify-center">
                        <input type="checkbox" id="L" class="absolute opacity-0 w-0 h-0 focus:ring-0 focus:outline-none">
                    </div>
                    <div class="w-full text-center">
                        <h2 class="text-lg sm:text-sm font-semibold"><span class="font-bold text-sm">L</span></h2>
                    </div>
                </div>
            </label>
    
            <input type="radio" class="peer hidden" name="size" value="XL" id="XL">
            <label for="XL" class="group">
                <div class="flex items-center  rounded-md hover:bg-gray-700 shadow-md overflow-hidden mb-4 p-5 border-2 border-transparent group-focus-within:border-sky-500 group-active:border-sky-500 justify-center">
                    <div class="flex items-center justify-center">
                        <input type="checkbox" id="XL" class="absolute opacity-0 w-0 h-0 focus:ring-0 focus:outline-none">
                    </div>
                    <div class="w-full text-center">
                        <h2 class="text-lg sm:text-sm font-semibold"><span class="font-bold text-sm">XL</span></h2>
                    </div>
                </div>
            </label>
    
            <input type="radio" class="peer hidden" name="size" value="XXL" id="XXL">
            <label for="XXL" class="group">
                <div class="flex items-center rounded-md hover:bg-gray-700 shadow-md overflow-hidden mb-4 p-5 border-2 border-transparent group-focus-within:border-sky-500 group-active:border-sky-500 justify-center">
                    <div class="flex items-center justify-center">
                        <input type="checkbox" id="XXL" class="absolute opacity-0 w-0 h-0 focus:ring-0 focus:outline-none">
                    </div>
                    <div class="w-full text-center">
                        <h2 class="text-lg sm:text-sm font-semibold"><span class="font-bold text-sm">XXL</span></h2>
                    </div>
                </div>
            </label>
        </div>
    </div>
    
    <!-- Metode Size End -->

    <!-- HIDDEN INPUT -->
    <input type="text" class="hidden" name="name" value="{{ Auth::user()->name }}">
    <input type="text" class="hidden" name="idProduk" value="{{ $data->idProduk }}">
    <input type="text" class="hidden" name="nameproduk" value="{{ $data->nama_produk }}">
    <input type="text" class="hidden" name="image" value="{{ $data->image}}">

            <!-- Metode Transaksi Start -->
            <div class="bg-white rounded-md shadow-lg mt-5 px-5 py-5 border sm:w-[550px] sm:mx-auto">
                <h2 class="text-xl font-bold font-sans mb-3">Pilih Metode Pembayaran</h2>
                <p class="font-semibold mb-3">E-Wallet dan QRIS</p>
                <div class="sm:grid sm:grid-cols-2 sm:gap-2">
                    <input type="radio" class="peer hidden" name="metode" value="Dana" id="Dana">
                    <label for="Dana" class="group">
                        <div class="flex items-center justify-between rounded-md hover:bg-gray-700 shadow-md overflow-hidden mb-4 p-5 border-2 border-transparent group-focus-within:border-sky-500 group-active:border-sky-500">
                            <div class="flex items-center">
                                <input type="checkbox" id="Dana" class="absolute opacity-0 w-0 h-0 focus:ring-0 focus:outline-none">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/72/Logo_dana_blue.svg/2560px-Logo_dana_blue.svg.png" alt="Dana Logo" class="mr-3 h-[30px] w-[120px] sm:w-[55px] sm:h-[20px]">
                            </div>
                            <div class="w-full text-right">
                                <h2 class="text-lg sm:text-sm font-semibold"> <span class="font-bold text-sm" id="totalPriceDana">{{ $data->harga }}</span></h2>
                            </div>
                        </div>
                    </label>
                    
                    <input type="radio" class="peer hidden" name="metode" value="Spay" id="spay">
                    <label for="spay" class="group">
                        <div class="flex w-full rounded-md shadow-md hover:bg-gray-700 overflow-hidden mb-4 p-5 border-2 border-transparent group-focus-within:border-sky-500 group-active:border-sky-500">
                            <input type="checkbox" id="spay" class="absolute opacity-0 w-0 h-0 focus:ring-0 focus:outline-none">
                            <img src="https://tse1.mm.bing.net/th?id=OIP.QQEJiDjvNx_XwXUUdRmmKwHaD3&pid=Api&P=0&h=220" alt="" class="mr-3 h-[30px] sm:w-[55px] sm:h-[20px]">
                            <div class="w-full text-right">
                                <h2 class="text-lg sm:text-sm font-semibold"><span class="font-bold text-sm" id="totalPriceSpay">{{ $data->harga }}</span></h2>
                            </div>
                        </div>
                    </label>
                    
                    <input type="radio" class="peer hidden" name="metode" value="Gopay" id="gopay">
                    <label for="gopay" class="group">
                        <div class="flex w-full rounded-md shadow-md hover:bg-gray-700 overflow-hidden mb-4 p-5 border-2 border-transparent group-focus-within:border-sky-500 group-active:border-sky-500">
                            <input type="checkbox" id="gopay" class="absolute opacity-0 w-0 h-0 focus:ring-0 focus:outline-none">
                            <img src="https://cdn.5minvideo.id/images/kumpulan-gambar-logo-gopay/gopay-logo-vector.png" alt="" class="mr-3 h-[30px] sm:w-[55px] sm:h-[20px]">
                            <div class="w-full text-right">
                                <h2 class="text-lg sm:text-sm font-semibold"> <span class="font-bold text-sm" id="totalPriceGopay">{{ $data->harga }}</span></h2>
                            </div>
                        </div>
                    </label>
                    
                    <input type="radio" class="peer hidden" name="metode" value="Ovo" id="ovo">
                    <label for="ovo" class="group">
                        <div class="flex w-full rounded-md shadow-md hover:bg-gray-700 overflow-hidden mb-4 p-5 border-2 border-transparent group-focus-within:border-sky-500 group-active:border-sky-500">
                            <input type="checkbox" id="ovo" class=" absolute opacity-0 w-0 h-0 focus:ring-0 focus:outline-none">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/eb/Logo_ovo_purple.svg/512px-Logo_ovo_purple.svg.png" alt="" class="mr-3 h-[30px] sm:w-[55px] sm:h-[20px]">
                            <div class="w-full text-right">
                                <h2 class="text-lg sm:text-sm font-semibold"> <span class="font-bold text-sm" id="totalPriceOvo">{{ $data->harga }}</span></h2>
                            </div>
                        </div>
                    </label>
                </div>
            </div>
            <!-- Metode Transaksi End -->

            <!-- Kontak Start -->
            <div class="bg-white rounded-md shadow-lg w-full mt-5 px-5 border sm:w-[550px] sm:mx-auto">
                <h2 class="text-xl font-sans font-bold mb-3 mt-2">Masukan Alamat Anda</h2>
                <input type="text" name="alamat" class="hover:bg-gray-700 rounded-md shadow-lg mb-4 h-[40px] w-full p-5 font-semibold text-lg" placeholder="Masukan Alamat Anda" required/>
            </div>
            <div class="bg-white rounded-md shadow-lg w-full mt-5 px-5 border sm:w-[550px] sm:mx-auto">
                <h2 class="text-xl font-sans font-bold mb-3 mt-2 ">Masukan Nomor Telepon Anda</h2>
                <input type="text" name="notelp" class="hover:bg-gray-700 rounded-md shadow-lg mb-4 h-[40px] w-full p-5 font-semibold text-lg " placeholder="Masukan Nomor Telepon Anda" required/>
            </div>
            <!-- Kontak End -->

            <!-- Botton Bayar Start -->
            <div class="bg-white rounded-md shadow-lg w-full mt-5 px-5 grid grid-cols-3 gap-1 p-3 border-t sm:w-[550px] sm:mx-auto">
                <div class="font-sans m-5 col-span-2">
                    <h2 class="text-red-500 font-bold" id="totalPriceAll">Rp. {{ $data->harga}}</h2>
                    <input type="hidden" name="harga" id="hiddenTotalPrice"  value="{{ $data->harga}}">
                    <p class="text-sm text-slate-500">{{ $data->nama_produk}}</p>
                    <p class="text-sm text-slate-500" id="selected-method"></p>
                </div>
                <div class="col-start-3 flex">
                    <div class="self-center">
                        <button type="submit" name="submit" class="bg-violet-500 p-2 rounded-full shadow-lg text-sm text-white font-bold active:opacity-40 active:text-slate-100 sm:w-32 hover:bg-gray-700">Bayar Sekarang</button>
                    </div>
                </div>
            </div>
            <!-- Botton Bayar End -->
        </form>
    </div>
</div>

<!-- Pop Up card start-->
<div class="fixed inset-0 items-center justify-center bg-black bg-opacity-50 hidden" id="popup">
    <div class="bg-white p-8 rounded-lg shadow-lg max-w-[370px]">
        <div class="bg-gray-100 flex p-5 -mt-[32px] mb-3 -mx-8 rounded-t-lg justify-between items-center">
            <h2 class="font-bold text-gray-500 text-lg">Deskripsi Produk</h2>
            <button id="closePopup" class="w-7">
                <svg focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="CloseIcon"><path d="M19 6.41 17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"></path></svg>
            </button>
        </div>
        <p class="text-sm font-semibold text-justify">{{$data->detail}}</p>
    </div>
</div>
<!-- Pop up card end -->

<!-- Js untuk Memunculkan Pop up Card Start -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const quantityInput = document.getElementById('quantityInput');
    const hiddenTotalPriceInput = document.getElementById('hiddenTotalPrice');
    const totalPriceAllDisplay = document.getElementById('totalPriceAll');
    const unitPrice = {{ $data->harga }}; // Assuming this value is available from your backend

    const totalPriceElements = {
        Dana: document.getElementById('totalPriceDana'),
        Spay: document.getElementById('totalPriceSpay'),
        Gopay: document.getElementById('totalPriceGopay'),
        Ovo: document.getElementById('totalPriceOvo')
    };

    function updateTotalPrice() {
        const quantity = parseInt(quantityInput.value);
        const totalPrice = unitPrice * quantity;

        for (let key in totalPriceElements) {
            totalPriceElements[key].textContent = totalPrice.toLocaleString('id-ID');
        }

        hiddenTotalPriceInput.value = totalPrice;
        totalPriceAllDisplay.textContent = `Rp. ${totalPrice.toLocaleString('id-ID')}`;
    }

    quantityInput.addEventListener('input', updateTotalPrice);

    // Initialize the total price on page load
    updateTotalPrice();
});

document.addEventListener('DOMContentLoaded', function () {
    const radios = document.querySelectorAll('input[name="metode"]');
    const selectedMethod = document.getElementById('selected-method');

    radios.forEach(radio => {
        radio.addEventListener('change', function () {
            if (this.checked) {
                selectedMethod.textContent = ` ${this.value}`;
            }
        });
    });
});

document.addEventListener('DOMContentLoaded', function () {
        const quantityInput = document.getElementById('quantityInput');
        const radios = document.querySelectorAll('input[name="size"]');
        const methodRadios = document.querySelectorAll('input[name="metode"]');
        const hiddenTotalPriceInput = document.getElementById('hiddenTotalPrice');
        const totalPriceAllDisplay = document.getElementById('totalPriceAll');
        const unitPrice = {{ $data->harga }}; // Harga awal produk
        let selectedSize = 'S'; // Ukuran yang dipilih secara default
        const sizePriceDifference = 5000; // Perbedaan harga antara ukuran M dan ukuran S

        // Fungsi untuk mengupdate harga total
        function updateTotalPrice() {
            let price = unitPrice;
            if (selectedSize === 'M') {
                price += sizePriceDifference;
            } else if (selectedSize === 'L') {
                price += sizePriceDifference * 2; // Tambahkan 2x perbedaan harga untuk ukuran L
            } else if (selectedSize === 'XL') {
                price += sizePriceDifference * 3; // Tambahkan 3x perbedaan harga untuk ukuran XL
            } else if (selectedSize === 'XXL') {
                price += sizePriceDifference * 4; // Tambahkan 4x perbedaan harga untuk ukuran XXL
            }
            const quantity = parseInt(quantityInput.value);
            price *= quantity; // Kalikan harga dengan jumlah pembelian

            hiddenTotalPriceInput.value = price;
            totalPriceAllDisplay.textContent = `Rp. ${price.toLocaleString('id-ID')}`;

            // Update harga di bagian metode pembayaran
            methodRadios.forEach(radio => {
                const method = radio.value;
                const methodPriceElement = document.getElementById(`totalPrice${method}`);
                if (methodPriceElement) {
                    methodPriceElement.textContent = `Rp. ${price.toLocaleString('id-ID')}`;
                }
            });
        }

        // Event listener untuk pemilihan ukuran
        radios.forEach(radio => {
            radio.addEventListener('change', function () {
                if (this.checked) {
                    selectedSize = this.value;
                    updateTotalPrice(); // Panggil fungsi untuk mengupdate harga total saat ukuran berubah
                }
            });
        });

        // Event listener untuk pembaruan jumlah pembelian
        quantityInput.addEventListener('input', updateTotalPrice);

        // Event listener untuk pemilihan metode pembayaran
        methodRadios.forEach(radio => {
            radio.addEventListener('change', function () {
                if (this.checked) {
                    updateTotalPrice(); // Panggil fungsi untuk mengupdate harga total saat metode pembayaran berubah
                }
            });
        });

        // Panggil fungsi untuk menginisialisasi harga total
        updateTotalPrice();
    });

    // Fungsi untuk menampilkan pop up card
    function showPopup() {
        document.getElementById('popup').classList.add('show-popup');
    }

    // Fungsi untuk menyembunyikan pop up card
    function hidePopup() {
        document.getElementById('popup').classList.remove('show-popup');
    }

    // Event listener untuk tombol "Cek Deskripsi Produk"
    document.querySelector('#popupBtn').addEventListener('click', function() {
        showPopup();
    });

    // Event listener untuk tombol "Tutup"
    document.querySelector('#closePopup').addEventListener('click', function() {
        hidePopup();
    });
</script>

</body>
</html>
