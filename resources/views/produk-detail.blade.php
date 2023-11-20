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
            <div>
                <h2 class="mb-4 text-4xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $article->title }}</h2>
                <p class="mb-4 font-medium">{!! $article->content !!}</p>
            </div>
        </div>
        <div class="relative items-center col-span-1 min-h-32">
            <hr>
            <div class="py-5">
                <h2 class="pb-3 text-lg font-bold text-red-500">Produk</h2>
                <ul>
                    @foreach ($all_articles->take(5) as $all_article)
                        <li><a href="{{ route('produk-detail', ['articleName' => $all_article->title]) }}" class="hover:text-red-500">{{ $all_article->title }}</a></li>
                    @endforeach
                </ul>
            </div>
            <hr>
            <div class="py-5">
                <h2 class="pb-3 text-lg font-bold text-red-500">Download Brosure</h2>
                <ul>
                    @foreach ($brochures as $brochure)
                        <li><a href="{{ route('brochures.show', $brochure->id) }}" class="hover:text-red-500" target="_blank">{{ $brochure->name }}</a></li>
                    @endforeach
                </ul>
            </div>
            <hr>
            <div class="py-5">
                <h2 class="pb-3 text-lg font-bold text-red-500">New Flash</h2>
                <ul>
                    @foreach ($tags as $tag)
                        <li><a href="{{ route('produk-tag', $tag->name) }}" class="hover:text-red-500">{{ $tag->name }}</a></li>
                    @endforeach
                </ul>
            </div>
            <hr>
        </div>
    </div>
</div>

@include('component.footer')