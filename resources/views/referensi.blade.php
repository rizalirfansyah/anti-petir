@include('component.app')
@include('component.navbar')

<title>Referensi - Anti Petir</title>

{{-- header --}}
<div class="container max-w-full max-h-screen mx-auto overflow-hidden bg-no-repeat bg-cover 2xl:w-full lg:w-full md:w-full sm:max-w-full bg-gradient-to-t bg-gray-100" style="background-image: url('/img/bg/bg-petir2.jpg')">
    <div class="relative w-full h-40">
        <div class="relative mt-36">
            <h2 class="text-center pt-6 text-white text-2xl wow animate__fadeInDown">Referensi</h2>
        </div>
    </div>
</div>

{{-- Daftar Logo --}}
<div class="relative max-h-max mx-auto justify-center px-4 md:px-0">
    <div class="py-10 transform md:translate-x-1/2 md:w-1/2">
        <h2 class="text-center">PT Anti Petir Indonesia mengucapkan terima kasih atas kepercayaan dan partisipasi dalam program-program kami.</h2>
    </div>
    <div class="pb-10 transform md:translate-x-4/5 md:w-4/5 mx-auto">
        <div class="grid grid-cols-5 gap-4 ">
            <!-- Baris 1 -->
            <div class="max-w-lg flex items-center justify-center">
                <img src="/img/logo/logo1.png" alt="Logo 1" class="w-full h-auto">
            </div>
            <div class="max-w-lg flex items-center justify-center">
                <img src="/img/logo/logo2.png" alt="Logo 2" class="w-full h-auto">
            </div>
            <div class="max-w-lg flex items-center justify-center">
                <img src="/img/logo/logo3.jpg" alt="Logo 3" class="w-full h-auto">
            </div>
            <div class="max-w-lg flex items-center justify-center">
                <img src="/img/logo/logo4.jpeg" alt="Logo 4" class="w-full h-auto">
            </div>
            <div class="max-w-lg flex items-center justify-center">
                <img src="/img/logo/logo5.jpeg" alt="Logo 5" class="w-full h-auto">
            </div>
            <!-- Baris 2 -->
            <div class="max-w-lg flex items-center justify-center">
                <img src="/img/logo/logo6.png" alt="Logo 1" class="w-full h-auto">
            </div>
            <div class="max-w-lg flex items-center justify-center">
                <img src="/img/logo/logo7.png" alt="Logo 2" class="w-full h-auto">
            </div>
            <div class="max-w-lg flex items-center justify-center">
                <img src="/img/logo/logo8.png" alt="Logo 3" class="w-full h-auto">
            </div>
            <div class="max-w-lg flex items-center justify-center">
                <img src="/img/logo/logo9.png" alt="Logo 4" class="w-full h-auto">
            </div>
            <div class="max-w-lg flex items-center justify-center">
                <img src="/img/logo/logo10.png" alt="Logo 5" class="w-full h-auto">
            </div>
        </div>
    </div>
</div>

@include('component.footer')