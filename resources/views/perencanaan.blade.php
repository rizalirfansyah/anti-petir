@include('component.app')
@include('component.navbar')

<title>Penangkal Petir | Perencanaan</title>

{{-- header --}}
<div class="container max-w-full max-h-screen mx-auto overflow-hidden bg-no-repeat bg-cover 2xl:w-full lg:w-full md:w-full sm:max-w-full bg-gradient-to-t bg-gray-100" style="background-image: url('/img/bg/bg-petir2.jpg')">
    <div class="relative w-full h-40">
        <div class="relative mt-36">
            <h2 class="text-center pt-6 text-white text-2xl wow animate__fadeInDown">Perencanaan</h2>
        </div>
    </div>
</div>


{{-- Content --}}
<section class="bg-white">
    <div class="py-8 px-4 mx-auto max-w-screen-lg lg:py-16 lg:px-6">
        <div class="max-w-screen-lg text-gray-500 sm:text-lg dark:text-gray-400">
            <h2 class="mb-4 text-4xl tracking-tight font-bold text-gray-900 dark:text-white">Powering innovation at <span class="font-extrabold">200,000+</span> companies worldwide</h2>
            <p class="mb-4 font-light">Track work across the enterprise through an open, collaborative platform. Link issues across Jira and ingest data from other software development tools, so your IT support and operations teams have richer contextual information to rapidly respond to requests, incidents, and changes.</p>
            <p class="mb-4 font-medium">Deliver great service experiences fast - without the complexity of traditional ITSM solutions.Accelerate critical development work, eliminate toil, and deploy changes with ease.</p>
            <a href="#" class="inline-flex items-center font-medium text-primary-600 hover:text-primary-800 dark:text-primary-500 dark:hover:text-primary-700">
                Learn more
                <svg class="ml-1 w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
            </a>
        </div>
    </div>
    <div class="flex flex-col items-center px-10 mb-10">
        <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-7.jpg" alt="">
        <h6 class="italic text-start">Struktur Sebagai Penghantar Petir</h6>
    </div>
    <div class="flex flex-col items-center px-10 mb-10">
        <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-7.jpg" alt="">
        <h6 class="italic text-start">Pararel Grounding</h6>
    </div>
    <div class="flex flex-col items-center px-10 mb-10">
        <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-7.jpg" alt="">
        <h6 class="italic text-start">Covered Area bila dilihat dari atas</h6>
    </div>
    <div class="flex flex-col items-center px-10 mb-10">
        <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-7.jpg" alt="">
        <h6 class="italic text-start">Sangkar Faraday</h6>
    </div>
</section>

@include('component.footer')