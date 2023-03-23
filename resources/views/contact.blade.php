@include('component.app')

<title>Penangkal Petir</title>

    {{-- navbar --}}
   <div class="fixed top-0 z-50 w-full mx-auto bg-white wow animate__fadeInDown">
    
    <nav class="border-gray-200">
    <div class="container relative flex flex-wrap items-center justify-between h-20 px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <a href="#" class="flex">
            <span class="self-center ml-3 text-lg font-semibold whitespace-nowrap">Anti Petir</span>
        </a>
        <button data-collapse-toggle="mobile-menu" type="button" class="inline-flex items-center justify-center mr-3 text-gray-400 rounded-lg md:hidden hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-blue-300" aria-controls="mobile-menu-2" aria-expanded="false">
        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
        <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        </button>
        <div class="hidden w-full bg-white md:block md:w-auto" id="mobile-menu">
        <ul class="flex flex-col mt-4 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium">
            <li>
            <a href="#" class="block py-2 pl-3 pr-4 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0" aria-current="page">Home</a>
            </li>
            <li>
                <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class="flex items-center justify-between w-full py-2 pl-3 pr-4 font-medium text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto">Product <svg class="w-4 h-4 ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg></button>
                <!-- Dropdown menu -->
                <div id="dropdownNavbar" class="z-10 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow w-44">
                    <ul class="py-1" aria-labelledby="dropdownLargeButton">
                    <li>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Penangkal Petir Elektrostatik</a>
                    </li>
                    <li>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Penangkal Petir Rumah / Konvensional</a>
                    </li>
                    <li>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Alat Penghitung Sambaran Petir</a>
                    </li>
                    <li>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Kabel Penyalur Petir</a>
                    </li>
                    </ul>
                </div>
            </li>
            <li>
            <a href="#" class="block py-2 pl-3 pr-4 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0">Penawaran</a>
            </li>
            <li>
            <a href="#" class="block py-2 pl-3 pr-4 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0">Refrensi</a>
            </li>
            <li>
            <a href="#" class="block py-2 pl-3 pr-4 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0">Registrasi</a>
            </li>
            <li>
            <a href="#" class="block py-2 pl-3 pr-4 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0">Perencanaan</a>
            </li>
            <li>
            <a href="#" class="block py-2 pl-3 pr-4 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 focus:outline-none">Contact</a>
            </li>
        </ul>
        </div>
    </div>
    </nav>

    </div>
    {{-- navbar end --}}

    {{-- Contact Us --}}

    <div class="w-full px-6 py-6 mx-auto max-w-7xl">
        <h2 class="pt-32 mt-2 text-4xl font-bold text-center">Contact Us</h2>
        <div class="overflow-hidden bg-white shadow-xl dark:shadow-dark-xl rounded-2xl">
            <div class="p-4 pb-0 mb-0 border-b-0 border-b-solid rounded-t-2xl border-b-transparent">

              <p class="px-6 pt-4 text-sm text-left text-gray-900">Filter</p>

              {{-- Search --}}
              <form class="form" method="get" action="#">
                <div class="flex px-5 pt-2 pb-4">
                    <div class="relative w-full">
                        <input type="text" name="search" id="search" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border-gray-300 dark:placeholder-gray-400" placeholder="Cari Nama, No. Telepon, Alamat ...">
                        <button type="submit" class="absolute top-0 right-0 p-2.5 text-sm font-medium text-white bg-blue-700 rounded-r-lg border border-blue-700">
                            <svg aria-hidden="true" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                            <span class="sr-only">Search</span>
                        </button>
                    </div>
                </div>
              </form>

            </div>
            
            <div class="flex-auto px-6 pt-0 pb-6">
                <div class="overflow-x-auto">
                    <table class="min-w-full text-sm divide-y divide-gray-200">
                      <thead>
                        <tr>
                          <th class="p-4 text-left text-gray-900 whitespace-nowrap">
                            No.
                          </th>
                          <th class="p-4 text-left text-gray-900 whitespace-nowrap">
                            <div class="flex items-center">
                              Nama Lengkap
                              <span class="flex pl-4">
                                <form class="form" method="get" action="#">
                                <button type="submit" value="member_name" id="col" name="col" class="ri-arrow-up-s-line"></button>
                                </form>
                                <form class="form" method="get" action="#">
                                <button type="submit" value="member_name" id="col" name="col" class="ri-arrow-down-s-line"></button>
                                </form>
                              </span>
                            </div>
                          </th>
                          <th class="p-4 text-left text-gray-900 whitespace-nowrap">
                            <div class="flex items-center">
                              Nomor Telepon
                            </div>
                          </th>
                          <th class="p-4 text-left text-gray-900 whitespace-nowrap">
                            <div class="flex items-center">
                              Alamat Lengkap
                            </div>
                          </th>
                        </tr>
                      </thead>
                  
                      <tbody class="divide-y divide-gray-100">
                        <tr>
                          <td class="p-4 text-left text-gray-900 whitespace-nowrap">
                            tes
                          </td>
                          <td class="p-4 text-gray-900 whitespace-nowrap">
                            tes
                          </td>
                          <td class="p-4 text-gray-900 whitespace-nowrap">
                            tes
                          </td>
                          <td class="p-4 text-gray-900 whitespace-nowrap">
                            Jl. Bukit Kismadani II/24, Bluru Kidul
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>          
                </div>
            </div>
        </div>
    </div>
    

    
    

    