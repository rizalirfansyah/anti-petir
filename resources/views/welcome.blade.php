@include('component.app')

<title>Penangkal Petir</title>

    {{-- navbar --}}
   <div class="fixed top-0 z-50 w-full mx-auto bg-white wow animate__fadeInDown">
    
    <nav class="border-gray-200">
    <div class="container relative flex flex-wrap items-center justify-between h-20 px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <a href="#" class="flex">
            <span class="self-center ml-3 text-lg font-semibold whitespace-nowrap">Anti Petir</span>
        </a>
        <button data-collapse-toggle="mobile-menu" type="button" class="inline-flex items-center justify-center mr-3 text-gray-400 rounded-lg md:hidden hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-blue-300" aria-controls="mobile-menu-2" aria-expanded="false">
        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
        <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        </button>
        <div class="hidden w-full bg-white md:block md:w-auto" id="mobile-menu">
        <ul class="flex flex-col mt-4 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium">
            <li>
            <a href="#" class="block py-2 pl-3 pr-4 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 focus:outline-none" aria-current="page">Home</a>
            </li>
            <li>
                <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class="flex items-center justify-between w-full py-2 pl-3 pr-4 font-medium text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto">Product <svg class="w-4 h-4 ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg></button>
                <!-- Dropdown menu -->
                <div id="dropdownNavbar" class="z-10 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow w-44">
                    <ul class="py-1" aria-labelledby="dropdownLargeButton">
                    <li>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Penangkal Petir Elektrostatik</a>
                    </li>
                    <li>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Penangkal Petir Rumah / Konvensional</a>
                    </li>
                    <li>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Alat Penghitung Sambaran Petir</a>
                    </li>
                    <li>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Kabel Penyalur Petir</a>
                    </li>
                    </ul>
                </div>
            </li>
            <li>
            <a href="#" class="block py-2 pl-3 pr-4 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0">Penawaran</a>
            </li>
            <li>
            <a href="#" class="block py-2 pl-3 pr-4 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0">Refrensi</a>
            </li>
            <li>
            <a href="#" class="block py-2 pl-3 pr-4 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0">Registrasi</a>
            </li>
            <li>
            <a href="#" class="block py-2 pl-3 pr-4 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0">Perencanaan</a>
            </li>
            <li>
            <a href="#" class="block py-2 pl-3 pr-4 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0">Contact</a>
            </li>
        </ul>
        </div>
    </div>
    </nav>

    </div>
    {{-- navbar end --}}

    {{-- Content --}}
    <div class="container max-w-full max-h-screen mx-auto overflow-hidden bg-no-repeat 2xl:w-full lg:w-full md:w-full sm:max-w-full">
        <img src="{{ URL::asset('img/bg/bg-petir.jpg') }}" class="object-cover w-full h-screen brightness-50">
        <div class="absolute w-full h-12 px-8 text-white animate__animated animate__fadeInUp animate__slower top-72">
            <h6 class="text-center text-sm">Selamat datang di</h6>
            <h2 class="mt-2 text-4xl font-bold text-center">Penangkal Petir - Anti Petir</h2>
        </div>
        <div class="absolute wow animate__fadeInUpBig top-[380px] lg:top-[315px] md:top-[340px] lg:w-[450px] lg:px-96 lg:mt-8 h-12 w-full items-center text-white">
            <h6 class="px-12 mt-8 text-lg text-center lg:text-lg top-56">Dewata Technoindo© menyediakan pemasangan Penangkal Petir NeoFLASH jenis Elektrostatik dan Arrester melayani instalasi se-Indonesia beserta kelengkapan material</h6>
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
                <div class="absolute top-44 lg:inset-x-[15%] md:inset-x-32 inset-[5%] bottom-5 py-5 text-white md:block wow slideInRight">
                <a href="" class="px-1 lg:text-sm text-xs font-bold text-gray-100 bg-red-900 rounded-sm border-md">KABEL PENYALUR PETIR</a>
                <h4 class="absolute text-white lg:top-5 top-6 text-xs lg:text-sm ml-[150px] lg:ml-44">Januari 28, 2014 - by <strong>abah petir</strong></h4>
                <h1 class="font-semibold text-gray-200 lg:text-4xl xl:text-4xl md:text-3xl wow animate__fadeInBottomRight animate_slow">
                    NYY Sebagai Kabel Penyalur Petir
                </h1>
                </div>
            </div>
            <div class="relative float-left -mr-[100%] w-full !transform-none opacity-0 transition-opacity duration-[600ms] ease-in-out motion-reduce:transition-none" data-te-carousel-fade data-te-carousel-item>
            <img src="https://mdbcdn.b-cdn.net/img/new/slides/042.webp" class="block object-cover w-full h-screen brightness-50" alt="Camera"/>
            <div class="absolute top-44 lg:inset-x-[15%] inset-x-[5%] bottom-5 py-5 text-white md:block wow slideInRight">
                <a href="" class="px-1 text-sm font-bold text-gray-100 bg-red-900 rounded-sm border-md">PENANGKAL PETIR ELEKTROSTATIK</a>
                <h4 class="absolute ml-64 text-white top-5">Oktober 18, 2011 - by <strong>abah petir</strong></h4>
                <h1 class="font-semibold text-white lg:text-4xl sm:text-sm wow animate__fadeInRight animate_slow">
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
            >Next</span
            >
        </button>
        
    </div>

    {{-- Produk --}}
    <div class="relative w-full lg:h-[1000px] xl:h-[600px] md:h-[900px] sm:h-[900px] max-h-max">
        <div class="h-12 w-4/5 relative inset-x-[10%] inset-10 py-5 wow animate__fadeInLeft">
            <h2 class="w-24 font-semibold text-center text-white bg-orange-700">Produk</h2>
            <hr class="h-px bg-orange-700 border-0 pt-0.5">
        </div>
            <div class="relative px-8 top-20 lg:px-32 font-inter sm:flex sm:flex-wrap sm:gap-6 sm:justify-between w-xl">

                <div class="mb-10 overflow-hidden bg-white rounded-md shadow-lg sm:mb-0 sm:w-64 md:w-80 lg:w-72 wow animate__fadeInLeft">
                  <img src="https://source.unsplash.com/600x400" alt="Img Caption" class="w-full">
                  <div class="px-6 py-4">
                    <div class="mb-2 text-xl font-bold text-slate-700">Image Tittle</div>
                    <p class="text-sm text-slate-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora, eligendi.</p>
                        <div class="flex items-center w-full mt-3">
                            <i class="fa-solid fa-clock"></i>
                            <p class="ml-2 text-sm">Januari 27, 2011</p>
                        </div>
                  </div>
                </div>
          
                <div class="mb-10 overflow-hidden bg-white rounded-md shadow-lg sm:mb-0 sm:w-64 md:w-80 lg:w-72 wow animate__fadeInLeft">
                  <img src="https://source.unsplash.com/600x400" alt="Img Caption" class="w-full">
                  <div class="px-6 py-4">
                    <div class="mb-2 text-xl font-bold text-slate-700">Image Tittle</div>
                    <p class="text-sm text-slate-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora, eligendi.</p>
                        <div class="flex items-center w-full mt-3">
                            <i class="fa-solid fa-clock"></i>
                            <p class="ml-2 text-sm">Januari 27, 2011</p>
                        </div>
                  </div>
                </div>

                <div class="mb-10 overflow-hidden bg-white rounded-md shadow-lg sm:mb-0 sm:w-64 md:w-80 lg:w-72 wow animate__fadeInRight">
                  <img src="https://source.unsplash.com/600x400" alt="Img Caption" class="w-full">
                  <div class="px-6 py-4">
                    <div class="mb-2 text-xl font-bold text-slate-700">Image Tittle</div>
                    <p class="text-sm text-slate-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora, eligendi.</p>
                        <div class="flex items-center w-full mt-3">
                            <i class="fa-solid fa-clock"></i>
                            <p class="ml-2 text-sm">Januari 27, 2011</p>
                        </div>
                  </div>
                </div>

                <div class="mb-10 overflow-hidden bg-white rounded-md shadow-lg sm:mb-0 sm:w-64 md:w-80 lg:w-72 wow animate__fadeInRight">
                  <img src="https://source.unsplash.com/600x400" alt="Img Caption" class="w-full">
                  <div class="px-6 py-4">
                    <div class="mb-2 text-xl font-bold text-slate-700">Image Tittle</div>
                    <p class="text-sm text-slate-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora, eligendi.</p>
                        <div class="flex items-center w-full mt-3">
                            <i class="fa-solid fa-clock"></i>
                            <p class="ml-2 text-sm">Januari 27, 2011</p>
                        </div>
                  </div>
                </div>
            </div>
    </div>
    {{-- product end --}}

    {{-- artikel --}}
    <div class="relative max-h-max xl:mt-2 lg:mt-1 md:mt-4 mt-40 w-full bg-gray-900 px-6 mx-auto sm:max-w-xl md:max-w-5xl lg:flex lg:max-w-full lg:p-0">
        <div class="lg:p-12 lg:flex-1 p-8 w-lg wow animate__slideInLeft">
            <h2 class="w-24 font-semibold text-center text-white bg-orange-700">Artikel</h2>
            <hr class="h-px bg-orange-700 border-0 pt-0.5 mb-4">

            <div class="container wow animate__fadeInLeftBig animate_slower mb-6">
                <ol class="">
                    <li class="mt-2 text-white">> <a href="" class="hover:text-gray-400">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quis amet expedita ut pariatur eligendi quibusdam, nostrum porro neque asperiores. Repellat corporis quam doloribus tempore quas.</a></li>
                    <li class="mt-2 text-white">> <a href="" class="hover:text-gray-400">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores, suscipit.</a></li>
                    <li class="mt-2 text-white">> <a href="" class="hover:text-gray-400">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum repellendus vitae quibusdam nisi delectus odit animi suscipit dolorem fugit numquam.</a></li>
                    <li class="mt-2 text-white">> <a href="" class="hover:text-gray-400">Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro, inventore.</a></li>
                  </ol>
            </div>
            <h2 class="w-24 font-semibold text-center text-white bg-orange-700">Tag</h2>
            <hr class="h-px bg-orange-700 border-0 pt-0.5 mb-4">
            <img src="https://source.unsplash.com/600x400?animal" alt="Laptop" class="mt-4 rounded-xl shadow-xl sm:mt-6 sm:h-64 sm:w-full sm:object-cover sm:object-center lg:hidden"/>

            <div class="mt-4 mb-8 sm:mt-6 wow animate__fadeInLeftBig animate_slower">
            <a href="#" class="inline-block px-5 py-2 mb-1 bg-gray-500 hover:bg-gray-600 text-white rounded-lg shadow-lg font-semibold tracking-wider text-sm sm:text-base">Subscribe YT juga cuy!</a>              
            <a href="#" class="inline-block px-5 py-2 mb-1 bg-gray-500 hover:bg-gray-600 text-white rounded-lg shadow-lg font-semibold tracking-wider text-sm sm:text-base">Arrester</a>              
            <a href="#" class="inline-block px-5 py-2 mb-1 bg-gray-500 hover:bg-gray-600 text-white rounded-lg shadow-lg font-semibold tracking-wider text-sm sm:text-base">Cara kerja penangkal petir</a>              
            <a href="#" class="inline-block px-5 py-2 mb-1 bg-gray-500 hover:bg-gray-600 text-white rounded-lg shadow-lg font-semibold tracking-wider text-sm sm:text-base">Sertifikasi K3</a>                     
            <a href="#" class="inline-block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-1 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Read more</a>
            <a href="#" class="inline-block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-1 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Penangkal petir</a>
            <a href="#" class="inline-block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-1 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Penangkal petir</a>
            </div>

          </div>
          <div class="hidden lg:flex lg:w-1/2 h-2/3">
            <img src="https://source.unsplash.com/800x400?laptop" alt="Laptop" class="object-cover rounded-md wow animate__fadeInRight mt-8">
          </div>
    </div>
    {{-- artikel end --}}
    
    {{-- footer --}}
    <div class="h-96 bg-gray-400"></div>
    

    