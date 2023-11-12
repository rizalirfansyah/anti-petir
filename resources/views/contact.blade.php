@include('component.app')
@include('component.navbar')

<title>Penangkal Petir</title>

    {{-- Contact Us --}}

    <div class="w-full px-6 mx-auto max-w-7xl">
        <div class="container px-6 py-12 pt-32 mx-auto">
          <div class="wow animate__slideInLeft">
              <p class="font-medium text-blue-500 dark:text-blue-400">Contact us</p>
              <h1 class="mt-2 text-2xl font-semibold text-gray-800 md:text-3xl dark:text-white">Get in touch</h1>
              <p class="mt-3 text-gray-500 dark:text-gray-400">Our friendly team would love to hear from you.</p>
          </div>
  
          <div class="grid grid-cols-1 gap-12 mt-10 lg:grid-cols-3">
              <div class="grid grid-cols-1 gap-12 sm:grid-cols-2 lg:grid-cols-1 wow animate__slideInLeft">
                  <div>
                      <span class="inline-block p-3 text-blue-500 rounded-full bg-blue-100/80 dark:bg-gray-800">
                          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                          </svg>
                      </span>
  
                      <h2 class="mt-4 text-base font-medium text-gray-800 dark:text-white">Email</h2>
                      <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">Our friendly team is here to help.</p>
                      @foreach ( $contacts as $contact)
                          <p class="mt-2 text-sm text-blue-500 dark:text-blue-400">{{ $contact->email }}</p>
                      @endforeach
                  </div>
  
                  <div>
                      <span class="inline-block p-3 text-blue-500 rounded-full bg-blue-100/80 dark:bg-gray-800">
                          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                              <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                          </svg>
                      </span>
                      
                      <h2 class="mt-4 text-base font-medium text-gray-800 dark:text-white">Office</h2>
                      <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">Come say hello at our office HQ.</p>
                      @foreach ( $contacts as $contact)
                          <p class="mt-2 text-sm text-blue-500 dark:text-blue-400">{{ $contact->address }}</p>
                      @endforeach
                  </div>
  
                  <div class="">
                      <span class="inline-block p-3 text-blue-500 rounded-full bg-blue-100/80 dark:bg-gray-800">
                          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                          </svg>
                      </span>
                      
                      <h2 class="mt-4 text-base font-medium text-gray-800 dark:text-white">Phone</h2>
                      <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">Mon-Fri from 8am to 5pm.</p>
                      @foreach ( $contacts as $contact)
                            <p class="mt-2 text-sm text-blue-500 dark:text-blue-400">{{ $contact->phone_number }}</p>
                      @endforeach
                  </div>
              </div>
  
              <div class="overflow-hidden rounded-lg lg:col-span-2 h-96 lg:h-auto wow animate__slideInRight">
                <!-- component -->
                    <div class="relative grid place-items-center">
                        <div class="grid w-full mx-auto border rounded h-96 place-items-center">
                        <div class="p-10 bg-white shadow-sm">
                            <h3 class="text-lg font-medium text-gray-800">Mengapa harus Anti Petir?</h3>

                            <div class="w-full h-1 mx-auto my-5 border-b"></div>

                            <!-- What is term -->
                            <div class="transition hover:bg-indigo-50">
                            <!-- header -->
                            <div class="flex items-center h-16 px-5 space-x-5 transition cursor-pointer accordion-header">
                                <i class="fas fa-plus"></i>
                                <h3>Profesional</h3>
                            </div>
                            <!-- Content -->
                            <div class="px-5 pt-0 overflow-hidden accordion-content max-h-0">
                                <p class="font-light leading-6 text-justify pl-9">
                                Our asked sex point her she seems. New plenty she horses parish design you. Stuff sight equal of my woody. Him children bringing goodness suitable she entirely put
                                far daughter.
                                </p>
                            </div>
                            </div>

                            <!-- When to use Accordion Components -->
                            <div class="transition hover:bg-indigo-50">
                            <!-- header -->
                            <div class="flex items-center h-16 px-5 space-x-5 transition cursor-pointer accordion-header">
                                <i class="fas fa-plus"></i>
                                <h3>Berpengalaman</h3>
                            </div>
                            <!-- Content -->
                            <div class="px-5 pt-0 overflow-hidden accordion-content max-h-0">
                                <p class="font-light leading-6 text-justify pl-9">
                                Our asked sex point her she seems. New plenty she horses parish design you. Stuff sight equal of my woody. Him children bringing goodness suitable she entirely put
                                far daughter.
                                </p>
                                <button class="px-6 py-2 my-5 font-medium text-white bg-indigo-600 rounded-full font-lg ml-9">Learn more</button>
                            </div>
                            </div>

                        </div>
                        </div>
                    </div>


                    <script>
                        const accordionHeader = document.querySelectorAll(".accordion-header");
                        accordionHeader.forEach((header) => {
                        header.addEventListener("click", function () {
                            const accordionContent = header.parentElement.querySelector(".accordion-content");
                            let accordionMaxHeight = accordionContent.style.maxHeight;

                            // Condition handling
                            if (accordionMaxHeight == "0px" || accordionMaxHeight.length == 0) {
                            accordionContent.style.maxHeight = `${accordionContent.scrollHeight + 32}px`;
                            header.querySelector(".fas").classList.remove("fa-plus");
                            header.querySelector(".fas").classList.add("fa-minus");
                            header.parentElement.classList.add("bg-indigo-50");
                            } else {
                            accordionContent.style.maxHeight = `0px`;
                            header.querySelector(".fas").classList.add("fa-plus");
                            header.querySelector(".fas").classList.remove("fa-minus");
                            header.parentElement.classList.remove("bg-indigo-50");
                            }
                        });
                        });
                    </script>

              </div>
          </div>
      </div>
    </div>
    
@include('component.footer')