@include('component.app')
@include('component.navbar')

<title>Referensi - Anti Petir</title>

{{-- header --}}

<div class="relative overflow-hidden h-[50vh] pt-[25vh]">
    <div class="absolute top-0 left-0 w-full h-full bg-cover bg-center transform translate-z-0 scale-150"
         style="background-image: url('/img/bg/bg-petir.jpg')" data-wow-duration="1.5s">
    </div>
    <div class="absolute top-0 left-0 w-full h-full bg-black opacity-50"></div>
    <div class="relative z-10 p-10 text-white wow fadeInUp" data-wow-duration="1s">
        <h2 class="text-center text-4xl font-semibold">REFERENSI</h2>
    </div>
</div>

{{-- Daftar Logo --}}
<div class="relative max-h-screen mx-auto w-full h-96 justify-center px-4 md:px-0">
    <div class="py-10 transform md:translate-x-1/2 md:w-1/2">
        <h2 class="text-center">PT Anti Petir Indonesia mengucapkan terima kasih atas kepercayaan dan partisipasi dalam program-program kami.</h2>
    </div>
    <div class="pb-10 transform md:translate-x-1/2 md:w-1/2">
        <div class="grid grid-cols-5 gap-4 ">
            <!-- Baris 1 -->
            <div class="max-h-32 flex items-center justify-center">
                <img src="/img/logo/logo1.png" alt="Logo 1">
            </div>
            <div class="max-h-32 flex items-center justify-center">
                <img src="/img/logo/logo2.png" alt="Logo 2">
            </div>
            <div class="max-h-32 flex items-center justify-center">
                <img src="/img/logo/logo3.jpg" alt="Logo 3">
            </div>
            <div class="max-h-32 flex items-center justify-center">
                <img src="/img/logo/logo4.jpeg" alt="Logo 4">
            </div>
            <div class="max-h-32 flex items-center justify-center">
                <img src="/img/logo/logo5.jpeg" alt="Logo 5">
            </div>
            <!-- Baris 2 -->
            <div class="max-h-32 flex items-center justify-center">
                <img src="/img/logo/logo6.png" alt="Logo 1">
            </div>
            <div class="max-h-32 flex items-center justify-center">
                <img src="/img/logo/logo7.png" alt="Logo 2">
            </div>
            <div class="max-h-32 flex items-center justify-center">
                <img src="/img/logo/logo8.png" alt="Logo 3">
            </div>
            <div class="max-h-32 flex items-center justify-center">
                <img src="/img/logo/logo9.png" alt="Logo 4">
            </div>
            <div class="max-h-32 flex items-center justify-center">
                <img src="/img/logo/logo10.png" alt="Logo 5">
            </div>
        </div>
    </div>
</div>

@include('component.footer')