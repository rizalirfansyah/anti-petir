@include ('component.app')
@include('component.navbar')

<title>Anti Petir | Penawaran</title>

{{-- header --}}
<div class="container max-w-full max-h-screen mx-auto overflow-hidden bg-no-repeat bg-cover 2xl:w-full lg:w-full md:w-full sm:max-w-full bg-gradient-to-t bg-gray-100" style="background-image: url('/img/bg/bg-petir2.jpg')">
    <div class="relative w-full h-28">
        <div class="relative mt-28">
            <h2 class="text-center pt-6 text-white text-2xl wow animate__fadeInDown">Penawaran</h2>
        </div>
    </div>
</div>

{{-- Section --}}
<section class="body-font relative bg-gray-900 text-gray-400">

    <div class="container mx-auto px-5 py-24 wow animate__fadeInUp">
      
      <div class="mb-12 flex w-full flex-col text-center">
        <h1 class="title-font mb-4 text-2xl font-medium text-white sm:text-3xl">Butuh Kami?</h1>
        <p class="mx-auto text-base leading-relaxed lg:w-2/3">Feel free to reach out to us! Whether you have a question,
          feedback, or a collaboration proposal, we'd love to hear from you.
        </p>
      </div>
  
      <div class="mx-auto md:w-2/3 lg:w-1/2">
        <div class="-m-2 flex flex-wrap">
  
          <!-- form -->
          <div class="w-1/2 p-2">
            <div class="relative">
              <input type="text" id="name" name="name" class="peer w-full rounded border border-gray-700 bg-gray-800 bg-opacity-40 py-2 px-3 text-base leading-8 text-gray-100 placeholder-transparent outline-none transition-colors duration-200 ease-in-out focus:border-indigo-500 focus:bg-gray-900 focus:ring-2 focus:ring-indigo-900" placeholder="Name" />
              <label for="name" class="absolute left-3 -top-6 bg-transparent text-sm leading-7 text-indigo-500 transition-all peer-placeholder-shown:left-3 peer-placeholder-shown:top-2 peer-placeholder-shown:bg-gray-900 peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-500 peer-focus:left-3 peer-focus:-top-6 peer-focus:text-sm peer-focus:text-indigo-500">Nama Instansi</label>
            </div>
          </div>
          <div class="w-1/2 p-2">
            <div class="relative">
              <input type="number" id="whatsapp" name="whatsapp" class="peer w-full rounded border border-gray-700 bg-gray-800 bg-opacity-40 py-2 px-3 text-base leading-8 text-gray-100 placeholder-transparent outline-none transition-colors duration-200 ease-in-out focus:border-indigo-500 focus:bg-gray-900 focus:ring-2 focus:ring-indigo-900" placeholder="Whatsapp" />
              <label for="whatsapp" class="absolute left-3 -top-6 bg-transparent text-sm leading-7 text-indigo-500 transition-all peer-placeholder-shown:left-3 peer-placeholder-shown:top-2 peer-placeholder-shown:bg-gray-900 peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-500 peer-focus:left-3 peer-focus:-top-6 peer-focus:text-sm peer-focus:text-indigo-500">Nomor Whatsapp</label>
            </div>
          </div>
          <div class="mt-4 w-full p-2">
            <div class="relative">
              <textarea id="message" name="message" class="peer h-32 w-full resize-none rounded border border-gray-700 bg-gray-800 bg-opacity-40 py-1 px-3 text-base leading-6 text-gray-100 placeholder-transparent outline-none transition-colors duration-200 ease-in-out focus:border-indigo-500 focus:bg-gray-900 focus:ring-2 focus:ring-indigo-900" placeholder="Message"></textarea>
              <label for="message" class="absolute left-3 -top-6 bg-transparent text-sm leading-7 text-indigo-500 transition-all peer-placeholder-shown:left-3 peer-placeholder-shown:top-2 peer-placeholder-shown:bg-gray-900 peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-500 peer-focus:left-3 peer-focus:-top-6 peer-focus:text-sm peer-focus:text-indigo-500">Message</label>
            </div>
          </div>
          <div class="w-full p-2">
            <button class="mx-auto flex rounded-md border-0 bg-indigo-500 py-2 px-8 text-lg text-white hover:bg-indigo-600 focus:outline-none">Kirim</button>
          </div>
  
        </div>
      </div>
  
    </div>
    
  </section>

@include('component.footer')