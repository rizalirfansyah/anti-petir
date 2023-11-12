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
                    <img class="object-cover h-auto max-w-full rounded-lg cursor-pointer"
                    src="{{ route('galleries.show', $gallery->id) }}" alt="{{ $gallery->name }}"
                    onclick="showModal('{{ route('galleries.show', $gallery->id) }}')" />
                </div>
            @endforeach
        </div>
    </div>
</div>

{{-- The Modal --}}
    <div id="modal"
        class="fixed top-0 left-0 flex items-center justify-center hidden w-screen h-screen z-80 bg-black/70 animate__animated animate__fadeIn">

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