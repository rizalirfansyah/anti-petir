@include('component.app')
@include('component.navbar')

<title>Artikel - Anti Petir</title>

{{-- header --}}
<div class="relative overflow-hidden h-[50vh] pt-[25vh]">
    <div class="absolute top-0 left-0 w-full h-full transform scale-150 bg-center bg-cover translate-z-0"
         style="background-image: url('/img/bg/bg-petir.jpg')" data-wow-duration="1.5s">
    </div>
    <div class="absolute top-0 left-0 w-full h-full bg-black opacity-50"></div>
    <div class="relative z-10 p-10 text-white wow fadeInUp" data-wow-duration="1s">
        <h2 class="text-4xl font-semibold text-center">Produk</h2>
    </div>
</div>

{{-- Daftar Logo --}}
<div class="container relative items-center justify-between px-4 mx-auto min-h-min max-w-7xl sm:px-6 lg:px-8">
    <div class="grid grid-cols-3 gap-10 py-10">
        <div class="relative items-center col-span-2 min-h-32">
            <div class="grid grid-cols-3 gap-4 pt-0">
                <!-- Baris 1 -->
                @foreach ($articles as $article)
                <a href="{{ route('articles.edit', $article->id) }}" class="max-w-sm overflow-hidden transition-transform duration-300 ease-in-out transform rounded shadow-lg hover:scale-105">
                    <img class="object-cover w-full h-32" src="{{ route('articles.show', $article->id) }}" alt="{{ $article->title }}">
                    <div class="px-6 py-4">
                        <div class="mb-2 text-base font-bold">{{ $article->title }}</div>
                        <p class="flex items-center text-sm text-gray-700">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 mr-2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            {{ $article->created_at->format('d F Y') }}
                        </p>
                    </div>
                </a>
                @endforeach
            </div>
        </div>
        <div class="relative items-center col-span-1 min-h-32">
            <hr>
            <div class="py-5">
                <h2 class="pb-3 text-lg font-bold text-red-500">Produk</h2>
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
                <h2 class="pb-3 text-lg font-bold text-red-500">Download Brosure</h2>
                <ul>
                    <li><a href="#" class="hover:text-red-500">Brosure Head Terminal Neoflash</a></li>
                    <li><a href="#" class="hover:text-red-500">Manual Pemasangan Head Terminal Neoflash</a></li>
                    <li><a href="#" class="hover:text-red-500">Event Counter Flashtrike</a></li>
                    <li><a href="#" class="hover:text-red-500">Peraturan Pemerintah “Disnaker K3”</a></li>
                </ul>
            </div>
            <hr>
            <div class="py-5">
                <h2 class="pb-3 text-lg font-bold text-red-500">New Flash</h2>
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