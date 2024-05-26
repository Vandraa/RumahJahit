<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Roboto:wght@700&display=swap" rel="stylesheet">
    
        <!-- Tailwind CSS -->
        @vite('resources/css/app.css')
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    
        <title>ALFARUK</title>
        <link rel="shortcut icon" href="assets/logo.jpg" type="image/x-icon">
    
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
                                <a href="{{ route('pesan') }}" id="pesan" class=" text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Pesan</a>
                                <a href="{{ route('contact') }}" class="bg-gray-900 text-white hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Contact</a>
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
        
        <section id="contact" class="service bg-gray-900 text-white py-12">
            <div class="container mx-auto px-4 bg-white rounded-lg p-8">
                <h3 class="text-3xl font-bold mb-8 text-center text-black">CONTACT INFO</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <div class="text-center">
                        <h4 class="text-lg font-bold mb-2 text-black">Email</h4>
                        <p class="font-semibold text-black">meianilan87@gmail.com</p>
                    </div>
                    <div class="text-center">
                        <h4 class="text-lg font-bold mb-2 text-black">Instagram</h4>
                        <p class="font-semibold text-black">rumah_jahit_alfaruk</p>
                    </div>
                    <div class="text-center">
                        <h4 class="text-lg font-bold mb-2 text-black">Facebook</h4>
                        <p class="font-semibold text-black">lestari_tari875924</p>
                    </div>
                    <div class="text-center md:col-span-2 lg:col-span-3">
                        <h4 class="text-lg font-bold mb-2 text-black">Hp</h4>
                        <p class="font-semibold text-black">+62 821-4886-1100</p>
                    </div>
                    <div class="md:col-span-2 lg:col-span-3 text-center">
                        <h4 class="text-lg font-bold mb-2 text-black">Address</h4>
                        <p class="font-semibold text-black">Jl. Intan Sari No.100, RW.11, Basirih, Kec. Banjarmasin Bar., Kota Banjarmasin, Kalimantan Selatan 70245 (Rumah Orange di sebelah SDN BASIRIH 11), KOTA BANJARMASIN, BANJARMASIN SELATAN, KALIMANTAN SELATAN, ID, 70245</p>
                    </div>
                </div>
                <div class="mt-8">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3983.0601260384124!2d114.56943059999999!3d-3.3353217!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2de421819988419d%3A0x6a8792cd679992d4!2sSDN%20Basirih%2011!5e0!3m2!1sid!2sid!4v1696396100928!5m2!1sid!2sid" width="1000" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="w-full"></iframe>
                </div>
            </div>
        </section>
        
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
                            <li class="mb-2"><a href="https://www.instagram.com/stitchhub.tech?igsh=MXJ0aWFoeWNkNmZ1MQ==" class="hover:underline">Instagram</a></li>
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
</body>
</html>