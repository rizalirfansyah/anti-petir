<x-app-layout>
   <div class="p-4 sm:ml-64">
       <div class="p-4 mt-14">
          <div class="relative items-center justify-center mb-4 bg-white rounded min-h-48 dark:bg-gray-800">
             <div class="p-8">
               <p class="mb-4 text-2xl text-center text-gray-400 dark:text-gray-500">Penawaran</p>
               <div class="relative overflow-x-auto sm:rounded-lg">
                 <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                       <tr>
                             <th scope="col" class="px-6 py-3">
                                 Nama
                             </th>
                             <th scope="col" class="px-6 py-3">
                                 No. Telepon
                             </th>
                             <th scope="col" class="px-6 py-3">
                                Email
                            </th>
                             <th scope="col" class="px-6 py-3">
                                 Pesan
                             </th>
                             <th scope="col" class="px-6 py-3">
                                 Action
                             </th>
                       </tr>
                    </thead>
                    <tbody>
                     @foreach ($offers as $offer)
                       <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                             <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                 {{ $offer->name }}
                             </th>
                             <td class="px-6 py-4">
                                 {{ $offer->phone_number }}
                             </td>
                             <td class="px-6 py-4">
                                {{ $offer->email }}
                            </td>
                             <td class="px-6 py-4">
                                 {{ $offer->message }}
                             </td>
                             <td class="px-6 py-4">
                                <button data-modal-target="delete-modal{{ $offer->id }}" data-modal-toggle="delete-modal{{ $offer->id }}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-red-600 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">
                                    Delete
                                </button>
                             </td>
                       </tr>
                     @endforeach
                    </tbody>
                 </table>
                 <div class="mt-4">
                    {{ $offers->links() }}
                 </div>
               </div>
             </div>
          </div>
       </div>
    </div>
   
    @foreach($offers as $offer)
    {{-- Modal Delete --}}
    <div id="delete-modal{{ $offer->id }}" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
     <div class="relative w-full max-w-md max-h-full">
         <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
             <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-hide="delete-modal{{ $offer->id }}">
                 <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                 <span class="sr-only">Close modal</span>
             </button>
             <div class="p-6 text-center">
                 <svg aria-hidden="true" class="mx-auto mb-4 text-gray-400 w-14 h-14 dark:text-gray-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                 <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Are you sure you want to delete this Artikel?</h3>
                 <form action="{{ route('offers.destroy', $offer->id) }}" method="POST" class="inline-block">
                  @csrf
                  @method('delete')
                 <button data-modal-hide="delete-modal{{ $offer->id }}" type="submit" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                     Yes, I'm sure
                 </button>
                 </form>
                 <button data-modal-hide="delete-modal{{ $offer->id }}" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">No, cancel</button>
             </div>
         </div>
     </div>
    </div>
    @endforeach
</x-app-layout>
