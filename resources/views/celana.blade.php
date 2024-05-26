<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Produk</title>

    {{-- TailwindCSS --}}
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="{{ asset('LTE/dist/icon/css/all.min.css')}}">

    <style>
        footer {
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            padding-top: 20px;
            padding-bottom: 15px;
            text-align: center;
            color: #FFF;
            background-color: #1b1c21;
            margin-top: 5px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>

<body class="bg-gray-800">
    <nav class="bg-gray-800">
        <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
            <div class="relative flex h-16 items-center justify-between">
                <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
                    <div class="flex flex-shrink-0 items-center">
                        <img class="h-8 w-8 rounded-full" src="{{ asset('images/logo.jpg')}}" alt="Your Company">
                    </div>
                    <div class="hidden sm:ml-6 sm:block">
                        <div class="flex space-x-4">
                            <a href="{{ route('landing') }}" class="text-gray-300 rounded-md px-3 py-2 text-sm font-medium" aria-current="page">Home</a>
                            <a href="#pesan" id="pesan" class="text-white  bg-gray-900 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Pesan</a>
                            <a href="{{ route('contact') }}" class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Contact</a>
                        </div>
                    </div>
                </div>

                <div class="relative ml-3">
                    <div>
                        <button type="button" class="relative flex rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                            <a href="{{ route('logout') }}" class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Logout</a>
                            <img class="h-8 w-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </nav>

        <main class="flex justify-center items-end mt-16 mb-16">
            <div id="produk" class="container w-full -my-7 md:-my-14">
                <div class="px-4 py-4 bg-white rounded-t-lg relative">
                    <div class="flex justify-center">
                        <h1 class="font-bold text-xl mb-4 md:text-2xl">Discover Your Desires</h1>
                    </div>                    
                    <div class="grid grid-cols-2 md:grid-cols-3 gap-2 lg:grid-cols-4">
                        @foreach ($data as $produk)
                        <div class="w-full mb-3 md:max-w-[200px] lg:max-w-[300px]">
                            <img src="{{  Storage::url($produk->image) }}" alt="" class="max-w-[150px] h-[150px] md:w-[200px] md:shadow-md md:h-[200px] rounded-lg md:max-w-[300px] md:mb-2 lg:w-[300px] lg:h-[300px] object-cover">
                            <h1 class="font-bold text-lg font-sans truncate md:text-2xl md:mb-3 uppercase">{{$produk->nama_produk}}</h1>
                            <div class="flex md:mb-5">
                                <p class="font-semibold md:text-lg w-7 md:w-10 lg:w-36">⭐ 5.0 <span class="hidden lg:inline lg:text-xs">(1.5k Riviews)</span></p>
                                <h2 class="ml-4 self-center font-semibold md:text-xl ">Rp. {{ $produk->harga}}</h2>
                            </div>
                            <div class="flex justify-center sm:justify-normal">
                                <a href="{{route('transaksi',['id' => $produk->id])}}" class="bg-black px-3 py-1 rounded-lg ml-3 text-sm sm:w-28 sm:h-10 sm:rounded-full sm:px-6 sm:py-[10px] lg:w-32"><span class="font-bold text-white lg:ml-2">Buy Now</span></a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <hr class="mt-4">
                    <div class="flex justify-center mt-8">
                        {{ $data->links() }}
                    </div>
                </div>
            </div>
        </main>

    <footer class="bg-gray-900 text-white py-8">
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap justify-between">
                <!-- Company Info -->
                <div class="w-full sm:w-1/3 mb-6 sm:mb-0">
                    <h3 class="text-lg font-bold mb-2">Tentang Kami</h3>
                    <p>Kami adalah penyedia layanan jahit berkualitas tinggi dengan pengalaman bertahun-tahun. Kami berkomitmen untuk memberikan hasil terbaik bagi pelanggan kami.</p>
                </div>
                <!-- Quick Links -->
                <div class="w-full sm:w-1/3 mb-6 sm:mb-0">
                    <h3 class="text-lg font-bold mb-2">Tautan Cepat</h3>
                    <ul class="list-none">
                        <li class="mb-2"><a href="https://www.google.com/maps?ll=-3.335322,114.569431&z=16&t=m&hl=id&gl=ID&mapclient=embed&cid=7676265500780368596" class="hover:underline">Maps</a></li>
                        <li class="mb-2"><a href="https://www.instagram.com/stitchhub.tech?igsh=MXJ0aWFoeWNkNmZ1MQ== " class="hover:underline">Instagram</a></li>
                        <li class="mb-2"><a href="htpps://wa.me/0895338701184" class="hover:underline">Kontak</a></li>
                        <li><a href="#" class="hover:underline">Tentang Kami</a></li>
                    </ul>
                </div>
                <!-- Contact Info -->
                <div class="w-full sm:w-1/3">
                    <h3 class="text-lg font-bold mb-2">Kontak Kami</h3>
                    <p><i class="fas fa-phone-alt mr-2"></i>(62) 821-4886-1100</p>
                    <p><i class="fas fa-envelope mr-2"></i>meianilan87@gmail.com</p>
                    <!-- Social Media Icons -->
                    <div class="mt-4">
                        <a href="#" class="text-gray-400 hover:text-white mx-2"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white mx-2"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white mx-2"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white mx-2"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
            <div class="border-t border-gray-700 mt-8 pt-4 text-center">
                <p>&copy; 2024 Web Jahit. All Rights Reserved.</p>
            </div>
        </div>
    </footer>

    <script>
      // Nabar FIxed 
    window.onscroll = function(){
        const header = document.querySelector('header');
        const fixedNav = header.offsetTop;
    
        if(window.pageYOffset > fixedNav) {
            header.classList.add('navbar-fixed');         
        }else {
            header.classList.remove('navbar-fixed');
        }
    }
    
    
    //hamburger
    const hamburger = document.querySelector('#hamburger');
    const navMenu = document.querySelector('#nav-menu');
    
    hamburger.addEventListener('click', function(){
        hamburger.classList.toggle('hamburger-active');
        navMenu.classList.toggle('hidden');
    });
    
    // click diluar hamburger
    window.addEventListener('click', function(e){
        if(e.target != hamburger && e.target != navMenu){
            hamburger.classList.remove('hamburger-active');
            navMenu.classList.add('hidden');
        }
    });
    
    const scrollLeftBtn = document.getElementById('scroll-left');
      const scrollRightBtn = document.getElementById('scroll-right');
      const container = document.querySelector('.overflow-x-auto');
    
      scrollLeftBtn.addEventListener('click', () => {
        container.scrollLeft -= 100; // Ubah angka ini untuk mengatur kecepatan scroll
      });
    
      scrollRightBtn.addEventListener('click', () => {
        container.scrollLeft += 100; // Ubah angka ini untuk mengatur kecepatan scroll
      });
    
    </script>
    
    </body>
    </html>