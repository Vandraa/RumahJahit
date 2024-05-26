<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ALFARUK</title>
    <link rel="shortcut icon" href="assets/logo.jpg" type="image/x-icon">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <style>
        
        .swiper-container {
            width: 100%;
            height: 100vh;
        }

        .swiper-slide {
            position: relative;
        }

        .swiper-slide img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .text-overlay {
            position: absolute;
            top: 50%; /* Adjusted from 45% to 50% */
            left: 50%; 
            transform: translate(-50%, -50%);
            color: white; 
            font-size: 25px; 
            text-align: center;
            background: #1b1c2188;
            padding: 10px;
            z-index: 1;
        }
        
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
                            <a href="{{ route('landing') }}" class="  text-gray-300 rounded-md px-3 py-2 text-sm font-medium" aria-current="page">Home</a>
                            <a href="#pesan"  class=" text-white bg-gray-900 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Pesan</a>
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

    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide touch-action: pan-y;">
                <img src="{{ asset('images/slide1.jpg') }}" class="w-full" alt="Slide 1" style="touch-action: pan-y;">
                <div class="text-overlay">Dapatkan pakaian yang pas, nyaman, dan sesuai dengan kebutuhan Anda. Kami mengutamakan kualitas, keahlian, dan perhatian terhadap detail dalam setiap jahitan.</div>
            </div>
            <div class="swiper-slide touch-action: pan-y;">
                <img src="{{ asset('images/slide2.jpg') }}" class="w-full" alt="Slide 2" style="touch-action: pan-y;">
                <div class="text-overlay"> Percayakan pada kami untuk mendapatkan pakaian yang sesuai dengan gaya Anda dan buatlah penampilan yang memukau. Dapatkan hasil jahitan yang presisi dan memukau dengan menggunakan layanan kami!</div>
            </div>
            <div class="swiper-slide touch-action: pan-y;">
                <img src="{{ asset('images/slide3.jpg') }}" class="w-full" alt="Slide 3" style="touch-action: pan-y;">
                <div class="text-overlay">Menemukan gaya Anda dengan kenyamanan yang luar biasa. Kami siap membantu Anda mengekspresikan diri dengan pilihan busana yang tepat, sesuai dengan keinginan dan gaya Anda.
                </div>
            </div>
        </div>

        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>

        <!-- Add Navigation -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>  
    
    <main class="flex justify-center items-end mt-16 mb-16">
        <section class="flex flex-row space-x-8">
            <div id="pesan" class="box-border h-32 w-44 p-4 border-4 bg-white rounded-3xl">
                <p class="text-center font-bold">Display Produk</p>
                <div class="btn mt-4 text-center">
                    <a class="bg-black p-2 rounded-full shadow-lg text-sm text-white font-bold active:opacity-40 active:text-slate-100 sm:w-32 px-4 py-2 hover:bg-gray-700" href="{{ route('kemeja') }}">Lihat Sekarang</a>
                </div>
            </div>
        </section>
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
    
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        const swiper = new Swiper('.swiper-container', {
            loop: true,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    </script>
</body>
</html>
