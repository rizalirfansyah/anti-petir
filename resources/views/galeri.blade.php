@include('component.app')
@include('component.navbar')

<title>Penangkal Petir | Galeri</title>

{{-- header --}}
<div class="container max-w-full max-h-screen mx-auto overflow-hidden bg-no-repeat bg-cover 2xl:w-full lg:w-full md:w-full sm:max-w-full bg-gradient-to-t bg-gray-100" style="background-image: url('/img/bg/bg-petir2.jpg')">
    <div class="relative w-full h-28">
        <div class="relative mt-28">
            <h2 class="text-center 2xl:ml-24 ml-8 pt-6 text-white text-2xl wow animate__fadeInRight">Galeri</h2>
        </div>
    </div>
</div>


{{-- Galeri --}}
<div class="relative max-h-max px-6 py-6 mx-auto w-full justify-center">
    <div class="transform md:w-4/5 mx-auto">
        <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
            <div class="wow animate__fadeInLeft">
                <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image.jpg" alt="">
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

@include('component.footer')