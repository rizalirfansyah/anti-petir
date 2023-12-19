<x-app-layout>
    <div class="p-4 sm:ml-64">
        <div class="p-4 mt-14">
            <div class="grid grid-cols-1 gap-4 mb-4 sm:grid-cols-2 md:grid-cols-3">
               <div class="flex items-center justify-center h-24 bg-white rounded dark:bg-gray-800">
                  <div class="text-center">
                     <p class="text-2xl text-gray-900 dark:text-gray-500">Artikel</p>
                     <p class="text-base text-gray-900 dark:text-gray-500">{{ $countArticles }}</p>
                  </div>
               </div>
               <div class="flex items-center justify-center h-24 bg-white rounded dark:bg-gray-800">
                  <div class="text-center">
                     <p class="text-2xl text-gray-900 dark:text-gray-500">Penawaran</p>
                     <p class="text-base text-gray-900 dark:text-gray-500">{{ $countOffers }}</p>
                  </div>
               </div>
               <div class="flex items-center justify-center h-24 bg-white rounded dark:bg-gray-800">
                  <div class="text-center">
                     <p class="text-2xl text-gray-900 dark:text-gray-500">Referensi</p>
                     <p class="text-base text-gray-900 dark:text-gray-500">{{ $countReferences }}</p>
                  </div>
               </div>
            </div>
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
</x-app-layout>
