@include('component.app')
@include('component.navbar')

<title>Referensi - Anti Petir</title>

{{-- header --}}
<div class="container max-w-full max-h-screen mx-auto overflow-hidden bg-gray-100 bg-no-repeat bg-cover 2xl:w-full lg:w-full md:w-full sm:max-w-full bg-gradient-to-t" style="background-image: url('/img/bg/bg-petir2.jpg')">
    <div class="relative w-full h-40">
        <div class="relative mt-36">
            <h2 class="pt-6 text-2xl text-center text-white wow animate__fadeInDown">Referensi</h2>
        </div>
    </div>
</div>

{{-- Daftar Logo --}}
<div class="relative justify-center px-4 mx-auto max-h-max md:px-0">
    <div class="py-10 transform md:translate-x-1/2 md:w-1/2">
        <h2 class="text-center">PT Anti Petir Indonesia mengucapkan terima kasih atas kepercayaan dan partisipasi dalam program-program kami.</h2>
    </div>
    <div class="pb-10 mx-auto transform md:translate-x-4/5 md:w-4/5">
        <div class="grid grid-cols-5 gap-4 ">
            <!-- Baris 1 -->
            @foreach ($references as $reference)
                <div class="flex items-center justify-center max-w-lg">
                    <img src="{{ route('references.show', $reference->id) }}" alt="{{ $reference->logo_name }}" class="w-full h-auto">
                </div>
            @endforeach
        </div>
    </div>
</div>

@include('component.footer')