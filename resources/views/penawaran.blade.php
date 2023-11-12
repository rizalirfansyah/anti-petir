@include ('component.app')
@include('component.navbar')

<title>Anti Petir | Penawaran</title>

{{-- header --}}
<div class="container max-w-full max-h-screen mx-auto overflow-hidden bg-gray-100 bg-no-repeat bg-cover 2xl:w-full lg:w-full md:w-full sm:max-w-full bg-gradient-to-t" style="background-image: url('/img/bg/bg-petir2.jpg')">
    <div class="relative w-full h-40">
        <div class="relative mt-28">
            <h2 class="pt-6 text-2xl text-center text-white wow animate__fadeInDown">Penawaran</h2>
        </div>
    </div>
</div>

{{-- Section --}}
<section class="relative text-gray-400 bg-gray-900 body-font">

    <div class="container px-5 py-24 mx-auto">
      
      <div class="flex flex-col w-full mb-12 text-center">
        <h1 class="mb-4 text-2xl font-medium text-white title-font sm:text-3xl">Butuh Kami?</h1>
        <p class="mx-auto text-base leading-relaxed lg:w-2/3">Feel free to reach out to us! Whether you have a question,
          feedback, or a collaboration proposal, we'd love to hear from you.
        </p>
      </div>
      <form action="{{ route('offers.store') }}" method="POST">
        @csrf
        @method('POST')
      <div class="mx-auto md:w-2/3 lg:w-1/2">
        <div class="flex flex-wrap -m-2">
  
          <!-- form -->
          
            <div class="w-1/2 p-2">
              <div class="relative">
                <input type="text" id="name" name="name" class="w-full px-3 py-2 text-base leading-8 text-gray-100 placeholder-transparent transition-colors duration-200 ease-in-out bg-gray-800 border border-gray-700 rounded outline-none peer bg-opacity-40 focus:border-indigo-500 focus:bg-gray-900 focus:ring-2 focus:ring-indigo-900" placeholder="Name" />
                <label for="name" class="absolute text-sm leading-7 text-indigo-500 transition-all bg-transparent left-3 -top-6 peer-placeholder-shown:left-3 peer-placeholder-shown:top-2 peer-placeholder-shown:bg-gray-900 peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-500 peer-focus:left-3 peer-focus:-top-6 peer-focus:text-sm peer-focus:text-indigo-500">Nama Instansi</label>
              </div>
            </div>
            <div class="w-1/2 p-2">
              <div class="relative">
                <input type="number" id="phone_number" name="phone_number" class="w-full px-3 py-2 text-base leading-8 text-gray-100 placeholder-transparent transition-colors duration-200 ease-in-out bg-gray-800 border border-gray-700 rounded outline-none peer bg-opacity-40 focus:border-indigo-500 focus:bg-gray-900 focus:ring-2 focus:ring-indigo-900" placeholder="Whatsapp" />
                <label for="phone_number" class="absolute text-sm leading-7 text-indigo-500 transition-all bg-transparent left-3 -top-6 peer-placeholder-shown:left-3 peer-placeholder-shown:top-2 peer-placeholder-shown:bg-gray-900 peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-500 peer-focus:left-3 peer-focus:-top-6 peer-focus:text-sm peer-focus:text-indigo-500">Nomor Whatsapp</label>
              </div>
            </div>
            <div class="w-full p-2 mt-4">
              <div class="relative">
                <textarea id="message" name="message" class="w-full h-32 px-3 py-1 text-base leading-6 text-gray-100 placeholder-transparent transition-colors duration-200 ease-in-out bg-gray-800 border border-gray-700 rounded outline-none resize-none peer bg-opacity-40 focus:border-indigo-500 focus:bg-gray-900 focus:ring-2 focus:ring-indigo-900" placeholder="Message"></textarea>
                <label for="message" class="absolute text-sm leading-7 text-indigo-500 transition-all bg-transparent left-3 -top-6 peer-placeholder-shown:left-3 peer-placeholder-shown:top-2 peer-placeholder-shown:bg-gray-900 peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-500 peer-focus:left-3 peer-focus:-top-6 peer-focus:text-sm peer-focus:text-indigo-500">Message</label>
              </div>
            </div>
            <div class="w-full p-2">
              <button class="flex px-8 py-2 mx-auto text-lg text-white bg-indigo-500 border-0 rounded-md hover:bg-indigo-600 focus:outline-none">Kirim</button>
            </div>
          
  
        </div>
      </div>
    </form>
  
    </div>
    
  </section>

@include('component.footer')