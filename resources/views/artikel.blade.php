@include('component.app')
@include('component.navbar')

<title>Artikel - Anti Petir</title>

{{-- header --}}
<div class="relative overflow-hidden h-[50vh] pt-[25vh]">
    <div class="absolute top-0 left-0 w-full h-full bg-cover bg-center transform translate-z-0 scale-150"
         style="background-image: url('/img/bg/bg-petir.jpg')" data-wow-duration="1.5s">
    </div>
    <div class="absolute top-0 left-0 w-full h-full bg-black opacity-50"></div>
    <div class="relative z-10 p-10 text-white wow fadeInUp" data-wow-duration="1s">
        <h2 class="text-center text-4xl font-semibold">ARTIKEL</h2>
    </div>
</div>

{{-- Daftar Logo --}}
<div class="container relative items-center justify-between min-h-min px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
    <div class="grid grid-cols-3 gap-10 py-10">
        <div class="min-h-32 relative items-center col-span-2">
            <div class="grid grid-cols-3 gap-4 pt-0">
                <!-- Baris 1 -->
                <div class="max-w-sm rounded overflow-hidden shadow-lg transform hover:scale-105 transition-transform duration-300 ease-in-out">
                    <img class="w-full h-32 object-cover" src="https://source.unsplash.com/random/" alt="Gambar Card">
                    <div class="px-6 py-4">
                        <div class="font-bold text-base mb-2">NYY Sebagai Kabel Penyalur Petir</div>
                        <p class="text-gray-700 text-sm flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 mr-2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            4 September 2023
                        </p>
                    </div>
                </div>
                <div class="max-w-sm rounded overflow-hidden shadow-lg transform hover:scale-105 transition-transform duration-300 ease-in-out">
                    <img class="w-full h-32 object-cover" src="https://source.unsplash.com/random/" alt="Gambar Card">
                    <div class="px-6 py-4">
                        <div class="font-bold text-base mb-2">Penangkal Petir Elektrostatis NeoFLASH</div>
                        <p class="text-gray-700 text-sm flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 mr-2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            4 September 2023
                        </p>
                    </div>
                </div>
                <div class="max-w-sm rounded overflow-hidden shadow-lg transform hover:scale-105 transition-transform duration-300 ease-in-out">
                    <img class="w-full h-32 object-cover" src="https://source.unsplash.com/random/" alt="Gambar Card">
                    <div class="px-6 py-4">
                        <div class="font-bold text-base mb-2">Arrester Petir / Listrik Tegangan Surge</div>
                        <p class="text-gray-700 text-sm flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 mr-2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            4 September 2023
                        </p>
                    </div>
                </div>
                <!-- Baris 2 -->
                <div class="max-w-sm rounded overflow-hidden shadow-lg transform hover:scale-105 transition-transform duration-300 ease-in-out">
                    <img class="w-full h-32 object-cover" src="https://source.unsplash.com/random/" alt="Gambar Card">
                    <div class="px-6 py-4">
                        <div class="font-bold text-base mb-2">Penangkal Petir Rumah / Konvensional</div>
                        <p class="text-gray-700 text-sm flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 mr-2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            4 September 2023
                        </p>
                    </div>
                </div>
                <div class="max-w-sm rounded overflow-hidden shadow-lg transform hover:scale-105 transition-transform duration-300 ease-in-out">
                    <img class="w-full h-32 object-cover" src="https://source.unsplash.com/random/" alt="Gambar Card">
                    <div class="px-6 py-4">
                        <div class="font-bold text-base mb-2">Kabel Penyalur Petir</div>
                        <p class="text-gray-700 text-sm flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 mr-2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            4 September 2023
                        </p>
                    </div>
                </div>
                <div class="max-w-sm rounded overflow-hidden shadow-lg transform hover:scale-105 transition-transform duration-300 ease-in-out">
                    <img class="w-full h-32 object-cover" src="https://source.unsplash.com/random/" alt="Gambar Card">
                    <div class="px-6 py-4">
                        <div class="font-bold text-base mb-2">Tiang Penyangga Penangkal Petir</div>
                        <p class="text-gray-700 text-sm flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 mr-2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            4 September 2023
                        </p>
                    </div>
                </div>
                <!-- Baris 3 -->
                <div class="max-w-sm rounded overflow-hidden shadow-lg transform hover:scale-105 transition-transform duration-300 ease-in-out">
                    <img class="w-full h-32 object-cover" src="https://source.unsplash.com/random/" alt="Gambar Card">
                    <div class="px-6 py-4">
                        <div class="font-bold text-base mb-2">Alat Penghitung Sambaran Petir / Lightning Event Counter</div>
                        <p class="text-gray-700 text-sm flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 mr-2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            4 September 2023
                        </p>
                    </div>
                </div>
                <div class="max-w-sm rounded overflow-hidden shadow-lg transform hover:scale-105 transition-transform duration-300 ease-in-out">
                    <img class="w-full h-32 object-cover" src="https://source.unsplash.com/random/" alt="Gambar Card">
                    <div class="px-6 py-4">
                        <div class="font-bold text-base mb-2">Grounding Penangkal Petir</div>
                        <p class="text-gray-700 text-sm flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 mr-2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            4 September 2023
                        </p>
                    </div>
                </div>
                <div class="max-w-sm rounded overflow-hidden shadow-lg transform hover:scale-105 transition-transform duration-300 ease-in-out">
                    <img class="w-full h-32 object-cover" src="https://source.unsplash.com/random/" alt="Gambar Card">
                    <div class="px-6 py-4">
                        <div class="font-bold text-base mb-2">Sertifikasi Disnaker Penyalur Petir</div>
                        <p class="text-gray-700 text-sm flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 mr-2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            4 September 2023
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="min-h-32 relative items-center col-span-1">
            <hr>
            <div class="py-5">
                <h2 class="text-lg text-red-500 font-bold pb-3">Produk</h2>
                <ul>
                    <li><a href="#" class="hover:text-red-500">Penangkal Petir Elektrostatik</a></li>
                    <li><a href="#" class="hover:text-red-500">Penangkal Petir Rumah</a></li>
                    <li><a href="#" class="hover:text-red-500">Kabel Penghantar</a></li>
                    <li><a href="#" class="hover:text-red-500">Surge Arrester</a></li>
                    <li><a href="#" class="hover:text-red-500">Tiang Penyangga</a></li>
                </ul>
            </div>
            <hr>
            <div class="py-5">
                <h2 class="text-lg text-red-500 font-bold pb-3">Download Brosure</h2>
                <ul>
                    <li><a href="#" class="hover:text-red-500">Brosure Head Terminal Neoflash</a></li>
                    <li><a href="#" class="hover:text-red-500">Manual Pemasangan Head Terminal Neoflash</a></li>
                    <li><a href="#" class="hover:text-red-500">Event Counter Flashtrike</a></li>
                    <li><a href="#" class="hover:text-red-500">Peraturan Pemerintah “Disnaker K3”</a></li>
                </ul>
            </div>
            <hr>
            <div class="py-5">
                <h2 class="text-lg text-red-500 font-bold pb-3">New Flash</h2>
                <ul>
                    <li><a href="#" class="hover:text-red-500">Accident</a></li>
                    <li><a href="#" class="hover:text-red-500">Gatget</a></li>
                    <li><a href="#" class="hover:text-red-500">Info Petir</a></li>
                    <li><a href="#" class="hover:text-red-500">Mancanegara</a></li>
                    <li><a href="#" class="hover:text-red-500">Technology</a></li>
                </ul>
            </div>
            <hr>
        </div>
    </div>
</div>

@include('component.footer')