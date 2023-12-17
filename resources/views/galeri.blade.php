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
            {{-- @foreach ($galleries as $gallery)
                <div class="wow animate__fadeInLeft">
                    <img class="object-cover h-auto max-w-full rounded-lg cursor-pointer"
                    src="{{ route('galleries.show', $gallery->id) }}" alt="{{ $gallery->name }}"
                    onclick="showModal('{{ route('galleries.show', $gallery->id) }}')" />
                </div>
            @endforeach --}}
            {{-- Button to Open Modal --}}
<button onclick="openModalWithImages(['image1.jpg', 'image2.jpg', 'image3.jpg'])">Open Modal</button>
        </div>
    </div>
</div>


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