@include('component.app')
@include('component.navbar')

<title>Penangkal Petir | Galeri</title>

{{-- header --}}
<div class="container max-w-full max-h-screen mx-auto overflow-hidden bg-gray-100 bg-no-repeat bg-cover 2xl:w-full lg:w-full md:w-full sm:max-w-full bg-gradient-to-t" style="background-image: url('/img/bg/bg-petir2.jpg')">
    <div class="relative w-full h-40">
        <div class="relative mt-36">
            <h2 class="pt-6 text-2xl text-center text-white wow animate__fadeInDown">Galeri</h2>
        </div>
    </div>
</div>


{{-- Galeri --}}
<div class="relative justify-center w-full px-6 py-6 mx-auto max-h-max">
    <div class="mx-auto transform md:w-4/5">
        <div class="grid grid-cols-2 gap-4 md:grid-cols-3">
            @foreach ($galleries as $gallery)
                <div class="wow animate__fadeInLeft">
                    @if ($gallery->gallery_images->isNotEmpty())
                        {{-- <img class="object-cover h-auto max-w-full rounded-lg cursor-pointer"
                        src="{{ route('gallery-image.show', $gallery->gallery_images->first()->id) }}" alt="{{ $gallery->name }}"
                        onclick="openModalWithImages({{ json_encode($gallery->gallery_images->pluck('image')->toArray()) }})" /> --}}
                        <img class="object-cover h-auto max-w-full rounded-lg cursor-pointer"
                        src="{{ route('gallery-image.show', $gallery->gallery_images->first()->id) }}" alt="{{ $gallery->name }}"
                        data-modal-target="default-modal{{ $gallery->id }}" data-modal-toggle="default-modal{{ $gallery->id }}" />
                        
                    @else
                        <p>Gambar Belum Ada</p>
                    @endif
                </div>
            @endforeach
        </div>
    </div>
</div>

@foreach ($galleries as $gallery)
<div id="default-modal{{ $gallery->id }}" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-2xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    {{ $gallery->name }}
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="default-modal{{ $gallery->id }}">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-4 md:p-5 space-y-4">
                @if ($gallery->gallery_images->isNotEmpty())
                    {{-- <img class="object-cover h-auto max-w-full rounded-lg cursor-pointer"
                    src="{{ route('gallery-image.show', $gallery->gallery_images->first()->id) }}" alt="{{ $gallery->name }}"
                    /> --}}
                    <div id="default-carousel" class="relative w-full" data-carousel="slide">
                        <!-- Carousel wrapper -->
                        <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                             <!-- Item 1 -->
                             @foreach ($gallery->gallery_images as $image)
                             <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                <img src="{{ route('gallery-image.show', $image->id) }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                             </div>
                             @endforeach
                        </div>
                        
                        <!-- Slider controls -->
                        <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                                </svg>
                                <span class="sr-only">Previous</span>
                            </span>
                        </button>
                        <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                                </svg>
                                <span class="sr-only">Next</span>
                            </span>
                        </button>
                    </div>
                @else
                    <p>Gambar Belum Ada</p>
                @endif
                
            </div>
            <!-- Modal footer -->
            <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                
            </div>
        </div>
    </div>
</div>
@endforeach

{{-- The Modal --}}
    <div id="modal"
        class="fixed top-0 left-0 flex items-center justify-center hidden w-screen h-screen z-80 bg-black/70 animate__animated animate__fadeIn">

        <div class="swiper-container">
            <div class="swiper-wrapper">
                <!-- Slides will be appended here dynamically using JavaScript -->
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
            <!-- Add Navigation -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>

    <script>
        var modal = document.getElementById("modal");
        var modalImg = document.getElementById("modal-img");
    
        function showModal(images) {
            modal.classList.remove('hidden');
            modal.classList.add('animate__fadeIn');
    
            var swiperContainer = new Swiper('.swiper-container', {
                // Optional: Add pagination and navigation
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
            });
    
            // Populate the slides dynamically
            images.forEach(function (src) {
                swiperContainer.appendSlide('<div class="swiper-slide"><img class="max-w-full max-h-[600px] object-cover rounded-sm" src="' + src + '"></div>');
            });
    
            modal.addEventListener('click', closeModalOutside);
        }
    
        function closeModal() {
            modal.classList.remove('animate__fadeIn');
            modal.classList.add('animate__fadeOut');
    
            setTimeout(function () {
                modal.classList.add('hidden');
                modal.classList.remove('animate__fadeOut');
                modalImg.src = "";
    
                // Remove the event listener when the modal is closed
                modal.removeEventListener('click', closeModalOutside);
    
                // Destroy Swiper instance and clear slides
                var swiperContainer = document.querySelector('.swiper-container');
                swiperContainer.swiper.destroy(true, true);
                swiperContainer.querySelector('.swiper-wrapper').innerHTML = '';
            }, 300);
        }
    
        function closeModalOutside(event) {
            if (event.target === modal) {
                closeModal();
            }
        }

         // Function to open modal with images
    function openModalWithImages(images) {
        // Clear existing slides (if any)
        var swiperContainer = document.querySelector('.swiper-container');
        swiperContainer.querySelector('.swiper-wrapper').innerHTML = '';

        // Call the showModal function with the provided images
        showModal(images);
    }
    </script>

@include('component.footer')