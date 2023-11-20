<x-app-layout>
   <div class="p-4 sm:ml-64">
       <div class="p-4 mt-14">
          <div class="relative items-center justify-center mb-4 bg-white rounded min-h-48 dark:bg-gray-800">
             <div class="p-8">
               <p class="mb-4 text-2xl text-center text-gray-400 dark:text-gray-500">Brosur</p>
               <button type="button" data-modal-target="add-modal" data-modal-toggle="add-modal" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Tambah Brosur</button>
               <div class="relative overflow-x-auto sm:rounded-lg">
                  <div class="grid grid-cols-1 gap-4 md:grid-cols-6">
                     @foreach ($brochures as $brochure)
                     <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <div class="p-5">
                           <h5 class="font-bold tracking-tight text-gray-900 text-l dark:text-white">{{ $brochure->name }}</h5>
                           <a class="text-sm underline text-blue-500" href="{{ route('brochures.show', $brochure->id) }}" target="_blank">Download PDF</a><br>
                           <div class="mt-2">
                              <button data-modal-target="edit-modal{{ $brochure->id }}" data-modal-toggle="edit-modal{{ $brochure->id }}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover-bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark-bg-blue-600 dark-hover-bg-blue-700 dark-focus-ring-blue-800">
                                 Edit
                              </button>
                              <button data-modal-target="delete-modal{{ $brochure->id }}" data-modal-toggle="delete-modal{{ $brochure->id }}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-red-600 rounded-lg hover-bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark-bg-red-600 dark-hover-bg-red-700 dark-focus-ring-red-800">
                                 Delete
                              </button>
                           </div>
                        </div>
                     </div>
                    
                     @endforeach
                  </div>

                  <div class="mt-4">
                     {{ $brochures->links() }}
                  </div>
               </div>
             </div>
          </div>
       </div>
    </div>

    {{-- Modal Tambah --}}
    <div id="add-modal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
     <div class="relative w-full max-w-md max-h-full">
         <!-- Modal content -->
         <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
             <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-hide="add-modal">
                 <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                 <span class="sr-only">Close modal</span>
             </button>
             <div class="px-6 py-6 lg:px-8">
                 <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Tambah Brosur</h3>
                 <form class="space-y-6" action="{{ route('brochures.store') }}" method="POST" enctype="multipart/form-data">
                  @csrf
                  @method('POST')
                    <div>
                       <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Brosur</label>
                       <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Nama Brosur" required>
                    </div>
                    <div>
                     <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file">File</label>
                     <input aria-describedby="file_input_help" name="file" id="file" type="file" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400">
                    </div>
                    <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Simpan</button>
                 </form>
             </div>
         </div>
     </div>
    </div> 

    @foreach($brochures as $brochure)
    {{-- Modal Edit --}}
    <div id="edit-modal{{ $brochure->id }}" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
     <div class="relative w-full max-w-md max-h-full">
         <!-- Modal content -->
         <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
             <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-hide="edit-modal{{ $brochure->id }}">
                 <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                 <span class="sr-only">Close modal</span>
             </button>
             <div class="px-6 py-6 lg:px-8">
                 <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Edit Brosur</h3>
                 <form class="space-y-6" action="{{ route('brochures.update', $brochure->id) }}" method="POST" enctype="multipart/form-data">
                     @csrf
                     @method('PUT')
                     <div>
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Brosur</label>
                        <input type="text" name="name" id="name" value="{{ old('name', $brochure->name) }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Nama Perusahaan" required>
                     </div>
                     <div>
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file">File</label>
                        <input aria-describedby="file_input_help" name="file" id="file" type="file" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400">
                     </div>
                    <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Simpan</button>
                 </form>
             </div>
         </div>
     </div>
    </div> 

    {{-- Modal Delete --}}
    <div id="delete-modal{{ $brochure->id }}" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
     <div class="relative w-full max-w-md max-h-full">
         <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
             <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-hide="delete-modal{{ $brochure->id }}">
                 <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                 <span class="sr-only">Close modal</span>
             </button>
             <div class="p-6 text-center">
                 <svg aria-hidden="true" class="mx-auto mb-4 text-gray-400 w-14 h-14 dark:text-gray-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                 <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Are you sure you want to delete this brochure?</h3>
                 <form action="{{ route('brochures.destroy', $brochure->id) }}" method="POST" class="inline-block">
                  @csrf
                  @method('delete')
                 <button data-modal-hide="delete-modal{{ $brochure->id }}" type="submit" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                     Yes, I'm sure
                 </button>
                 </form>
                 <button data-modal-hide="delete-modal{{ $brochure->id }}" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">No, cancel</button>
             </div>
         </div>
     </div>
    </div>
    @endforeach
</x-app-layout>
