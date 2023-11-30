@include('component.app')
@include('component.navbar')

<title>Penangkal Petir | Perencanaan</title>

{{-- header --}}
<div class="container max-w-full max-h-screen mx-auto overflow-hidden bg-gray-100 bg-no-repeat bg-cover 2xl:w-full lg:w-full md:w-full sm:max-w-full bg-gradient-to-t" style="background-image: url('/img/bg/bg-petir2.jpg')">
    <div class="relative w-full h-40">
        <div class="relative mt-36">
            <h2 class="pt-6 text-2xl text-center text-white wow animate__fadeInDown">Perencanaan</h2>
        </div>
    </div>
</div>


{{-- Content --}}
<section class="bg-white">
    <div class="max-w-screen-lg px-4 py-8 mx-auto lg:py-16 lg:px-6">
        <div class="max-w-screen-lg text-gray-900">
            @foreach ($plans as $plan)
                <h1 class="mb-4 text-4xl font-bold tracking-tight">{{ $plan->title }}</h1>
                <div>{!! $plan->content !!}</div>
            @endforeach
        </div>
    </div>
</section>

@include('component.footer')