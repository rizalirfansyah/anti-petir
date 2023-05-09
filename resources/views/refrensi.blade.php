@include('component.app')
@include('component.navbar')

<title>Penawaran</title>

{{-- header --}}
<div class="container max-w-full max-h-screen mx-auto overflow-hidden bg-no-repeat 2xl:w-full lg:w-full md:w-full sm:max-w-full bg-gradient-to-t bg-gray-100">
    <div class="w-full h-28">
        <div class="relative mt-28">
            <h2 class="text-start 2xl:ml-24 ml-8 pt-6 text-black 2xl:text-2xl text-xl wow animate__fadeInRight">Refrensi Kerja</h2>
        </div>
    </div>
</div>

{{-- table refrensi --}}
<div class="relative max-h-screen mx-auto w-full h-96 justify-center">
    <div class="py-10 transform translate-x-1/2 w-1/2 bg-green-200">
        <h2 class="text-center">test</h2>
        
    </div>
    <div class="p-20 lg:flex-1 w-lg wow animate__slideInLeft">
        <h2 class="w-40 font-semibold text-center text-white bg-orange-700">Refrensi NeoFLASH</h2>
        <hr class="h-px bg-orange-700 border-0 pt-0.5">
    </div>

    <div class="relative -mt-10 ml-20 mr-20 overflow-x-auto wow animate__fadeInUp">
        <table class="w-full bg-gray-200 text-sm text-left">
            <thead class="text-xs uppercase text-gray-500">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Nama Proyek
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Lokasi
                    </th>
                    <th scope="col" class="px-6 py-3">
                        NeoFLASH
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Jumlah
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr class="bg-white dark:bg-gray-800">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Country Heritage
                    </th>
                    <td class="px-6 py-4">
                        Surabaya
                    </td>
                    <td class="px-6 py-4">
                        TZ 04
                    </td>
                    <td class="px-6 py-4">
                        1 Unit
                    </td>
                </tr>
                <tr class="bg-white dark:bg-gray-800">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        INDOSOUND
                    </th>
                    <td class="px-6 py-4">
                        Surabaya
                    </td>
                    <td class="px-6 py-4">
                        TZ 04
                    </td>
                    <td class="px-6 py-4">
                        2 Unit
                    </td>
                </tr>
                <tr class="bg-white dark:bg-gray-800">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Prima Multi Artha
                    </th>
                    <td class="px-6 py-4">
                        Pare - Kediri
                    </td>
                    <td class="px-6 py-4">
                        TZ 05
                    </td>
                    <td class="px-6 py-4">
                        2 Unit
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>