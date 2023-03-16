@include('component.app')

<title>Penangkal Petir</title>

    {{-- navbar --}}
   <div class="lg:max-w-4xl sm:w-full mx-auto">
    
    <nav class="border-gray-200">
    <div class="container relative mx-auto flex flex-wrap items-center justify-between h-20">
        <a href="#" class="flex">
        
            <span class="self-center ml-3 text-lg font-semibold whitespace-nowrap">Anti Petir</span>
        </a>
        <button data-collapse-toggle="mobile-menu" type="button" class="md:hidden mr-3 text-gray-400 hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-blue-300 rounded-lg inline-flex items-center justify-center" aria-controls="mobile-menu-2" aria-expanded="false">
        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
        <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        </button>
        <div class="hidden md:block w-full md:w-auto bg-white" id="mobile-menu">
        <ul class="flex-col md:flex-row flex md:space-x-8 mt-4 md:mt-0 md:text-sm md:font-medium">
            <li>
            <a href="#" class="bg-blue-700 md:bg-transparent text-white block pl-3 pr-4 py-2 md:text-blue-700 md:p-0 rounded focus:outline-none" aria-current="page">Home</a>
            </li>
            <li>
                <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class="text-gray-700 hover:bg-gray-50 border-b border-gray-100 md:hover:bg-transparent md:border-0 pl-3 pr-4 py-2 md:hover:text-blue-700 md:p-0 font-medium flex items-center justify-between w-full md:w-auto">Product <svg class="w-4 h-4 ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg></button>
                <!-- Dropdown menu -->
                <div id="dropdownNavbar" class="hidden bg-white text-base z-10 list-none divide-y divide-gray-100 rounded shadow my-4 w-44">
                    <ul class="py-1" aria-labelledby="dropdownLargeButton">
                    <li>
                        <a href="#" class="text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2">Penangkal Petir Elektrostatik</a>
                    </li>
                    <li>
                        <a href="#" class="text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2">Penangkal Petir Rumah / Konvensional</a>
                    </li>
                    <li>
                        <a href="#" class="text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2">Alat Penghitung Sambaran Petir</a>
                    </li>
                    <li>
                        <a href="#" class="text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2">Kabel Penyalur Petir</a>
                    </li>
                    </ul>
                    {{-- <div class="py-1">
                    <a href="#" class="text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2">Sign out</a>
                    </div> --}}
                </div>
            </li>
            <li>
            <a href="#" class="text-gray-700 hover:bg-gray-50 border-b border-gray-100 md:hover:bg-transparent md:border-0 block pl-3 pr-4 py-2 md:hover:text-blue-700 md:p-0">Penawaran</a>
            </li>
            <li>
            <a href="#" class="text-gray-700 hover:bg-gray-50 border-b border-gray-100 md:hover:bg-transparent md:border-0 block pl-3 pr-4 py-2 md:hover:text-blue-700 md:p-0">Refrensi</a>
            </li>
            <li>
            <a href="#" class="text-gray-700 hover:bg-gray-50 border-b border-gray-100 md:hover:bg-transparent md:border-0 block pl-3 pr-4 py-2 md:hover:text-blue-700 md:p-0">Registrasi</a>
            </li>
            <li>
            <a href="#" class="text-gray-700 hover:bg-gray-50 border-b border-gray-100 md:hover:bg-transparent md:border-0 block pl-3 pr-4 py-2 md:hover:text-blue-700 md:p-0">Perencanaan</a>
            </li>
            <li>
            <a href="#" class="text-gray-700 hover:bg-gray-50 border-b border-gray-100 md:hover:bg-transparent md:border-0 block pl-3 pr-4 py-2 md:hover:text-blue-700 md:p-0">Contact</a>
            </li>
        </ul>
        </div>
    </div>
    </nav>

    </div>
    {{-- navbar end --}}

    {{-- Content --}}
    <div class="container max-h-screen max-w-full 2xl:w-full lg:w-full md:w-full sm:max-w-full bg-no-repeat overflow-hidden mx-auto">
        <img src="{{ URL::asset('img/bg/bg-petir.jpg') }}" class="h-screen w-full object-cover brightness-50">
        <div class="absolute animate__animated animate__fadeInUp top-72 h-12 w-full text-white px-8">
            <h6 class="text-md text-center">Selamat datang di</h6>
            <h2 class="text-4xl font-bold text-center mt-2">Penangkal Petir - Anti Petir</h2>
        </div>
        <div class="absolute wow animate__fadeInLeft top-[380px] lg:top-[315px] md:top-[300px] lg:w-[450px] lg:px-96 lg:mt-8 h-12 w-full items-center text-white">
            <h6 class="text-lg text-center lg:text-lg mt-8 top-56 px-12">Dewata Technoindo© menyediakan pemasangan Penangkal Petir NeoFLASH jenis Elektrostatik dan Arrester melayani instalasi se-Indonesia beserta kelengkapan material</h6>
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
                src="img/bg/cable.jpg" class="block w-full h-screen object-cover brightness-75" alt="Wild Landscape" />
                <div class="absolute top-40 inset-x-[15%] bottom-5 hidden py-5 text-white md:block wow slideInRight">
                <a href="" class="text-gray-100 text-sm font-bold px-1 border-md rounded-sm bg-red-900">KABEL PENYALUR PETIR</a>
                <h4 class="text-white absolute top-5 ml-44">Januari 28, 2014 - by <strong>abah petir</strong></h4>
                <h1 class="text-gray-200 lg:text-4xl font-semibold sm:text-sm wow animate__fadeInBottomRight animate__slow">
                    NYY Sebagai Kabel Penyalur Petir
                </h2>
                </div>
            </div>
            <div class="relative float-left -mr-[100%] hidden w-full !transform-none opacity-0 transition-opacity duration-[600ms] ease-in-out motion-reduce:transition-none" data-te-carousel-fade data-te-carousel-item>
            <img src="https://mdbcdn.b-cdn.net/img/new/slides/042.webp" class="block w-full h-screen object-cover brightness-50" alt="Camera"/>
            <div class="absolute top-40 inset-x-[15%] bottom-5 hidden py-5 text-white md:block wow slideInRight">
                <a href="" class="text-gray-100 text-sm font-bold px-1 border-md rounded-sm bg-red-900">PENANGKAL PETIR ELEKTROSTATIK</a>
                <h4 class="text-white absolute top-5 ml-64">Oktober 18, 2011 - by <strong>abah petir</strong></h4>
                <h1 class="text-white lg:text-4xl font-semibold sm:text-sm wow animate__fadeInBottomRight animate__slow">
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
            <span class="inline-block h-8 w-8">
            <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="1.5"
                stroke="currentColor"
                class="h-6 w-6">
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
            <span class="inline-block h-8 w-8">
            <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="1.5"
                stroke="currentColor"
                class="h-6 w-6">
                <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M8.25 4.5l7.5 7.5-7.5 7.5" />
            </svg>
            </span>
            <span
            class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]"
            >Next</span
            >
        </button>
        
    </div>

    {{-- Product --}}
    <div class="relative max-h-screen w-full">
        <div class="h-12 w-2xl absolute inset-x-[10%] inset-10 py-5 wow animate__fadeInLeft">
            <h2 class="text-center bg-orange-700 text-white w-24 font-semibold">Produk</h2>
            <hr class="h-px bg-orange-700 border-0 pt-0.5">
        </div>
            <div class="container absolute top-32 px-32 font-inter sm:flex sm:flex-wrap sm:gap-6 sm:justify-between w-2xl">

                <div class="rounded-md shadow-lg overflow-hidden mb-10 bg-white sm:mb-0 sm:w-64 md:w-80 lg:w-72 wow animate__fadeInLeft">
                  <img src="https://source.unsplash.com/600x400" alt="Img Caption" class="w-full">
                  <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2 text-slate-700">Image Tittle</div>
                    <p class="text-sm text-slate-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora, eligendi.</p>
                        <div class="w-full flex items-center mt-3">
                            <i class="fa-solid fa-clock"></i>
                            <p class="text-sm ml-2">Januari 27, 2011</p>
                        </div>
                  </div>
                </div>
          
                <div class="rounded-md shadow-lg overflow-hidden mb-10 bg-white sm:mb-0 sm:w-64 md:w-80 lg:w-72 wow animate__fadeInLeft">
                  <img src="https://source.unsplash.com/600x400" alt="Img Caption" class="w-full">
                  <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2 text-slate-700">Image Tittle</div>
                    <p class="text-sm text-slate-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora, eligendi.</p>
                        <div class="w-full flex items-center mt-3">
                            <i class="fa-solid fa-clock"></i>
                            <p class="text-sm ml-2">Januari 27, 2011</p>
                        </div>
                  </div>
                </div>

                <div class="rounded-md shadow-lg overflow-hidden mb-10 bg-white sm:mb-0 sm:w-64 md:w-80 lg:w-72 wow animate__fadeInRight">
                  <img src="https://source.unsplash.com/600x400" alt="Img Caption" class="w-full">
                  <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2 text-slate-700">Image Tittle</div>
                    <p class="text-sm text-slate-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora, eligendi.</p>
                        <div class="w-full flex items-center mt-3">
                            <i class="fa-solid fa-clock"></i>
                            <p class="text-sm ml-2">Januari 27, 2011</p>
                        </div>
                  </div>
                </div>

                <div class="rounded-md shadow-lg overflow-hidden mb-10 bg-white sm:mb-0 sm:w-64 md:w-80 lg:w-72 wow animate__fadeInRight">
                  <img src="https://source.unsplash.com/600x400" alt="Img Caption" class="w-full">
                  <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2 text-slate-700">Image Tittle</div>
                    <p class="text-sm text-slate-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora, eligendi.</p>
                        <div class="w-full flex items-center mt-3">
                            <i class="fa-solid fa-clock"></i>
                            <p class="text-sm ml-2">Januari 27, 2011</p>
                        </div>
                  </div>
                </div>
            </div>
    </div>

    {{-- product end --}}
    <div class="relative mt-[500px] h-96 w-full bg-gray-900">
    </div>
    <div class="relative h-96 w-full bg-gray-400">
    </div>