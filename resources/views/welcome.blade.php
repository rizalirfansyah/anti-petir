@include('component.app')
@include('component.navbar')

<title>Penangkal Petir</title>

    {{-- floating whatsapp --}}
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <a href="https://api.whatsapp.com/send?phone=082336646156&text=Hola%21%20Test%20m%C3%A1s%20Rizal." class="float" target="_blank">
    <i class="fa fa-whatsapp my-float"></i>
    </a>

    {{-- Content --}}
    <div class="container max-w-full max-h-screen mx-auto overflow-hidden bg-no-repeat 2xl:w-full lg:w-full md:w-full sm:max-w-full">
        <img src="{{ URL::asset('img/bg/bg-petir.jpg') }}" class="object-cover w-full h-screen brightness-50">
        <div class="absolute w-full text-white animate__animated animate__fadeInDown top-[270px]">
            <h6 class="text-3xl font-bold text-center">Selamat datang di</h6>
            <h2 class="mt-3 text-4xl font-bold text-center"><span id="element"></span></h2>
        </div>
        <div class="absolute wow animate__fadeInUp animate_slow top-[380px] xl:top-[310px] lg:top-[315px] md:top-[340px] lg:px-96 lg:mt-8 h-12 w-full text-white items-center">
            <h6 class="px-12 items-center justify-center mt-8 mb-3 text-lg text-center xl:w-[750px] mx-auto lg:text-lg top-56">Dewata Technoindo menyediakan pemasangan Penangkal Petir NeoFLASH jenis Elektrostatik dan Arrester melayani instalasi se-Indonesia beserta kelengkapan material</h6>
            <div class="flex justify-center wow animate__fadeInUp animate_slower">
                <a href="#" class="text-white bg-green-500 hover:bg-green-600 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 focus:outline-none">Konsultasi sekarang</a>
            </div>
        </div>
    </div>

    {{-- Carousel --}}
        <div id="carouselExampleCrossfade" class="relative" data-te-carousel-init data-te-carousel-slide>
        <div class="absolute inset-x-0 bottom-0 z-[2] mx-[15%] mb-4 flex list-none justify-center p-0" data-te-carousel-indicators>
            <button type="button" data-te-target="#carouselExampleCrossfade" data-te-slide-to="0" data-te-carousel-active class="mx-[3px] box-content h-[3px] w-[30px] flex-initial cursor-pointer border-0 border-y-[10px] border-solid border-transparent bg-white bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-te-target="#carouselExampleCrossfade" data-te-slide-to="1" class="mx-[3px] box-content h-[3px] w-[30px] flex-initial cursor-pointer border-0 border-y-[10px] border-solid border-transparent bg-white bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none" aria-label="Slide 2"></button>
        </div>
        <div class="relative w-full h-[500px] overflow-hidden after:clear-both after:block after:content-['']">
            <div class="relative float-left -mr-[100%] w-full !transform-none opacity-0 transition-opacity duration-[600ms] ease-in-out motion-reduce:transition-none" data-te-carousel-fade data-te-carousel-item data-te-carousel-active>
            <img
                src="img/bg/cable.jpg" class="block object-cover w-full h-screen brightness-75" alt="Wild Landscape" />
                <div class="absolute top-48 lg:inset-x-[15%] md:inset-x-32 gap-4 inset-[5%] bottom-5 py-5 px-8 lg:px-6 text-white wow slideInRight">
                <a href="" class="px-1 font-bold text-gray-100 bg-red-900 rounded-sm lg:text-sm border-md">KABEL PENYALUR PETIR</a>
                <h4 class="text-white lg:text-sm lg:inline-block">Januari 28, 2014 - by <strong>abah petir</strong></h4>
                <h1 class="text-2xl font-semibold text-gray-200 lg:text-4xl xl:text-4xl md:text-3xl wow animate__fadeInBottomRight animate_slow">
                    NYY Sebagai Kabel Penyalur Petir
                </h1>
                </div>
            </div>
            <div class="relative float-left -mr-[100%] w-full !transform-none opacity-0 transition-opacity duration-[600ms] ease-in-out motion-reduce:transition-none" data-te-carousel-fade data-te-carousel-item>
            <img
                src="https://mdbcdn.b-cdn.net/img/new/slides/042.webp" class="block object-cover w-full h-screen brightness-50" alt="Camera"/>
                <div class="absolute top-48 lg:inset-x-[15%] md:inset-x-32 inset-[5%] bottom-5 py-5 px-8 lg:px-6 text-white md:block wow slideInRight">
                <a href="" class="px-1 font-bold text-gray-100 bg-red-900 rounded-sm lg:text-sm border-md">PENANGKAL PETIR ELEKTROSTATIK</a>
                <h4 class="text-white lg:text-sm lg:inline-block">Oktober 18, 2011 - by <strong>abah petir</strong></h4>
                <h1 class="text-2xl font-semibold text-gray-200 lg:text-4xl xl:text-4xl md:text-3xl wow animate__fadeInBottomRight animate_slow">
                    Penangkal Petir Elektrostatis NeoFLASH
                </h2>
                </div>
            </div>
        </div>
        <button
            class="absolute top-0 bottom-0 left-0 z-[1] flex w-[15%] items-center justify-center border-0 bg-none p-0 text-center text-white opacity-50 transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-white hover:no-underline hover:opacity-90 hover:outline-none focus:text-white focus:no-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none"
            type="button"
            data-te-target="#carouselExampleCrossfade"
            data-te-slide="prev">
            <span class="inline-block w-8 h-8">
            <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="1.5"
                stroke="currentColor"
                class="w-6 h-6">
                <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M15.75 19.5L8.25 12l7.5-7.5" />
            </svg>
            </span>
            <span
            class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]"
            >Previous</span
            >
        </button>
        <button
            class="absolute top-0 bottom-0 right-0 z-[1] flex w-[15%] items-center justify-center border-0 bg-none p-0 text-center text-white opacity-50 transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-white hover:no-underline hover:opacity-90 hover:outline-none focus:text-white focus:no-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none"
            type="button"
            data-te-target="#carouselExampleCrossfade"
            data-te-slide="next">
            <span class="inline-block w-8 h-8">
            <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="1.5"
                stroke="currentColor"
                class="w-6 h-6">
                <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M8.25 4.5l7.5 7.5-7.5 7.5" />
            </svg>
            </span>
            <span
            class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]"
            >Next</span>
        </button>
        
    </div>

    {{-- Produk --}}
    <div class="w-full px-6 py-6 mx-auto">
        <div class="relative inset-x-[10%] w-4/5 py-5 wow animate__fadeInUp">
            <h2 class="text-4xl font-semibold text-center text-slate-800">Produk Kami</h2>
        </div>
        <div class="mx-auto mb-5 w-36 wow animate__fadeInUp animate_slower">
            <hr class="bg-orange-700 border-0 pt-0.5 wow animate__fadeInRight">
        </div>
            <div class="flex flex-wrap justify-center px-8 -mx-3 sm:gap-4 top-20">
                
                @foreach ($articles->take(4) as $article)
                    <div class="px-6">
                        <a href="{{ route('articles.show', $article->id) }}" class="max-w-sm overflow-hidden transition-transform duration-300 ease-in-out transform rounded shadow-lg hover:scale-105">
                            <img class="object-cover w-full h-32" src="{{ route('articles.edit', $article->id) }}" alt="{{ $article->title }}">
                            <div class="px-6 py-4">
                                <div class="mb-2 text-xl font-bold text-slate-700">{{ $article->title }}</div>
                                <div class="flex items-center w-full mt-3">
                                    <i class="fa-solid fa-clock"></i>
                                    <p class="ml-2 text-sm">{{ $article->created_at->format('d F Y') }}</p>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
                
            </div>
            
    </div>
    {{-- product end --}}

    {{-- Testimoni --}}
    <div class="w-full px-6 py-6 mx-auto">
        <div class="relative inset-x-[10%] w-4/5 py-5 wow animate__fadeInUp">
            <h2 class="text-4xl font-semibold text-center text-slate-800">Klien Kami</h2>
        </div>
        <div class="mx-auto mb-5 w-36 wow animate__fadeInUp animate_slower">
            <hr class="bg-orange-700 border-0 pt-0.5 wow animate__fadeInRight">
        </div>
    </div>
    {{-- carousel klien kami --}}
    <div class="container mx-auto mb-5">
         <section class="customer-logos slider">
            @foreach ($references as $reference)
                <div class="slide">
                    {{-- <img src="{{ route('image', ['imageName' => $reference->image]) }}" alt="{{ $reference->name }}"> --}}
                    <img src="{{ route('references.show', $reference->id) }}" alt="{{ $reference->name }}" />
                </div>
            @endforeach
         </section>
      </div>
    {{-- testimoni end --}}

    {{-- artikel --}}
    <div class="relative w-full px-6 mx-auto mt-20 mb-2 bg-gray-900 max-h-max xl:mt-2 lg:mt-1 md:mt-4 sm:max-w-xl md:max-w-5xl lg:flex lg:max-w-full lg:p-0">
        <div class="p-8 lg:p-12 lg:flex-1 w-lg wow animate__slideInLeft">
            <h2 class="w-24 font-semibold text-center text-white bg-orange-700">Artikel</h2>
            <hr class="h-px bg-orange-700 border-0 pt-0.5 mb-4">

            <div class="container mb-6 wow animate__fadeInLeftBig animate_slower">
                <ol class="">
                    @foreach ($articles->take(5) as $article)
                        <li class="mt-2 text-white">> <a href="{{ route('produk-detail', ['articleName' => $article->title]) }}" class="hover:text-gray-400">{{ $article->title }}</a></li>
                    @endforeach
                </ol>
            </div>
            <h2 class="font-semibold text-center text-white bg-orange-700 w-28">Informasi</h2>
            <hr class="h-px bg-orange-700 border-0 pt-0.5 mb-4">
            <img src="https://source.unsplash.com/600x400" alt="Assets construction" class="mt-4 shadow-xl rounded-xl sm:mt-6 sm:h-64 sm:w-full sm:object-cover sm:object-center lg:hidden"/>

            <div class="mt-4 mb-8 sm:mt-6 wow animate__fadeInLeftBig animate_slower">
                @foreach ($tags->take(5) as $tag)
                    <a href="{{ route('produk-tag', $tag->name) }}" class="inline-block px-5 py-2 mb-1 text-sm font-semibold tracking-wider text-white bg-gray-500 rounded-lg shadow-lg hover:bg-gray-600 sm:text-base">{{ $tag->name }}</a>
                @endforeach            
            </div>

          </div>
          <div class="hidden lg:flex lg:w-1/2 h-2/3">
            <img src="https://source.unsplash.com/800x400?laptop" alt="Laptop" class="object-cover mt-8 rounded-md wow animate__fadeInRight">
          </div>
    </div>
    {{-- artikel end --}}
    
@include('component.footer')


{{-- typedjs --}}
<script>
    var typed = new Typed('#element', {
      strings: ['Penangkal Petir - Anti Petir', 'Anti Petir'],
      typeSpeed: 100,
      startDelay: 200,
    });
</script>