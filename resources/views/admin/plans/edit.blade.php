<x-app-layout>
   <div class="p-4 sm:ml-64">
      <div class="p-4 mt-14">
         <div class="relative items-center justify-center mb-4 bg-white rounded min-h-48 dark:bg-gray-800">
            <div class="p-8">
               <p class="mb-4 text-2xl text-center text-gray-400 dark:text-gray-500">Perencanaan</p>
               @foreach($plans as $plan)
               <form action="{{ route('plans.update', $plan->id) }}" method="POST">
                  @csrf
                  @method('PUT')
                  <div class="mb-6">
                     <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Judul</label>
                     <input type="text" id="title" name="title" value="{{ old('title', $plan->title) }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Judul" required>
                  </div>
                  <div class="mb-6">
                     <label for="content" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Konten</label>
                     <textarea id="content" name="content" rows="10" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Isi konten">{{ $plan->content }}</textarea>
                     <p class="mt-2 text-xs">*Tambah gambar &lt;img src="storage\galleries\nama" alt="nama" /&gt;</p>
                  </div>
                  <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Simpan</button>
               </form>
               @endforeach
            </div>
         </div>
      </div>
   </div>
</x-app-layout>
 