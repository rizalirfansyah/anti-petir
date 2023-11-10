@include('component.app')
@include('component.navbar')

<title>Penangkal Petir | Galeri</title>

{{-- header --}}
<div class="container max-w-full max-h-screen mx-auto overflow-hidden bg-no-repeat bg-cover 2xl:w-full lg:w-full md:w-full sm:max-w-full bg-gradient-to-t bg-gray-100" style="background-image: url('/img/bg/bg-petir2.jpg')">
    <div class="relative w-full h-40">
        <div class="relative mt-36">
            <h2 class="text-center pt-6 text-white text-2xl wow animate__fadeInDown">Galeri</h2>
        </div>
    </div>
</div>


{{-- Galeri --}}
<div class="relative max-h-max px-6 py-6 mx-auto w-full justify-center">
    <div class="transform md:w-4/5 mx-auto">
        <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
            <div class="wow animate__fadeInLeft">
                <img class="max-w-full h-auto object-cover cursor-pointer rounded-lg"
            src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-7.jpg" alt="Flower"
            onclick="showModal('https://flowbite.s3.amazonaws.com/docs/gallery/square/image-7.jpg')" />
            </div>
            <div class="wow animate__fadeInLeft">
                <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-1.jpg" alt="">
            </div>
            <div class="wow animate__fadeInLeft">
                <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-2.jpg" alt="">
            </div>
            <div class="wow animate__fadeInRight">
                <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-3.jpg" alt="">
            </div>
            <div class="wow animate__fadeInRight">
                <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-4.jpg" alt="">
            </div>
            <div class="wow animate__fadeInRight">
                <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-5.jpg" alt="">
            </div>
            <div class="wow animate__fadeInLeft">
                <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-6.jpg" alt="">
            </div>
            <div class="wow animate__fadeInLeft">
                <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-7.jpg" alt="">
            </div>
            <div class="wow animate__fadeInLeft">
                <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-8.jpg" alt="">
            </div>
            <div class="wow animate__fadeInRight">
                <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-9.jpg" alt="">
            </div>
            <div class="wow animate__fadeInRight">
                <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-10.jpg" alt="">
            </div>
            <div class="wow animate__fadeInRight">
                <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-11.jpg" alt="">
            </div>
        </div>
    </div>
</div>

{{-- The Modal --}}
    <div id="modal"
        class="hidden fixed top-0 left-0 z-80 w-screen h-screen bg-black/70 flex justify-center items-center animate__animated animate__fadeIn">

        <!-- A big image will be displayed here -->
        <img id="modal-img" class="max-w-full max-h-[600px] mt-20 object-cover rounded-sm" />
    </div>

    <script>
        // Get the modal by id
        var modal = document.getElementById("modal");

        // Get the modal image tag
        var modalImg = document.getElementById("modal-img");

        // this function is called when a small image is clicked
        function showModal(src) {
            modal.classList.remove('hidden');
            modal.classList.add('animate__fadeIn');
            modalImg.src = src;

             // Add an event listener to close the modal when clicking outside the modal image
            modal.addEventListener('click', closeModalOutside);
        }

        // this function is called when the close button is clicked
        function closeModal() {
            modal.classList.remove('animate__fadeIn');
            modal.classList.add('animate__fadeOut');

            setTimeout(function() {
                modal.classList.add('hidden');
                modal.classList.remove('animate__fadeOut');
                modalImg.src = "";

                // Remove the event listener when the modal is closed
                modal.removeEventListener('click', closeModalOutside);
            }, 300); // Adjust the timeout duration to match your fadeOut animation duration
        }

         // this function is called when clicking outside the modal image
        function closeModalOutside(event) {
            if (event.target === modal) {
                closeModal();
            }
        }
    </script>

@include('component.footer')