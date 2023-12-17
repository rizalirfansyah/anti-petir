<x-app-layout>
    <div class="p-4 sm:ml-64">
        <div class="p-4 mt-14">
           <div class="relative items-center justify-center mb-4 bg-white rounded min-h-48 dark:bg-gray-800">
              <div class="p-8">
                <p class="mb-4 text-2xl text-center text-gray-400 dark:text-gray-500">Artikel</p>
                <button type="button" data-modal-target="add-modal" data-modal-toggle="add-modal" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Tambah Artikel</button>
                <div class="relative overflow-x-auto sm:rounded-lg">
                   <div class="grid grid-cols-1 gap-4 md:grid-cols-6">
                      @foreach ($articles as $article)
                      <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                         <div class="flex items-center justify-center h-32">
                             <img class="rounded-t-lg" src="{{ route('articles.edit', $article->id) }}" alt="{{ $article->name }}" style="width: 100%; height: 100%; object-fit: cover;" />
                         </div>
                         <div class="p-5">
                            <h5 class="font-bold tracking-tight text-gray-900 text-l dark:text-white">{{ $article->title }}</h5>
                            <p>{{ $article->category }}</p>
                            <div class="flex flex-wrap mb-2">
                                @foreach ($article->article_tags as $article_tag)
                                  <span class="bg-blue-100 text-blue-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-blue-900 dark:text-blue-300">{{ $article_tag->tag->name }}</span>
                                @endforeach
                            </div>
                            <div>
                               <button data-modal-target="edit-modal{{ $article->id }}" data-modal-toggle="edit-modal{{ $article->id }}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover-bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark-bg-blue-600 dark-hover-bg-blue-700 dark-focus-ring-blue-800">
                                  Edit
                               </button>
                               <button data-modal-target="delete-modal{{ $article->id }}" data-modal-toggle="delete-modal{{ $article->id }}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-red-600 rounded-lg hover-bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark-bg-red-600 dark-hover-bg-red-700 dark-focus-ring-red-800">
                                  Delete
                               </button>
                            </div>
                         </div>
                      </div>
                     
                      @endforeach
                   </div>
 
                   <div class="mt-4">
                      {{ $articles->links() }}
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
                  <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Tambah Artikel</h3>
                  <form class="space-y-6" action="{{ route('articles.store') }}" method="POST" enctype="multipart/form-data">
                   @csrf
                   @method('POST')
                     
                    <div>
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="image">Gambar</label>
                        <input aria-describedby="file_input_help" name="image" id="image" type="file" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400">
                    </div>
                    <div>
                        <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Judul</label>
                        <input type="text" name="title" id="title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Judul Artikel" required>
                    </div>
                    <div>
                        <label for="tag" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tag</label>
                        <div x-data="dropdown()" x-init="loadOptions()" class="flex flex-col w-full mx-auto">
                            <input name="values" type="hidden" x-bind:value="selectedValues()">
                            <div class="relative inline-block w-full">
                              <div class="relative flex flex-col items-center">
                                <div x-on:click="open" class="w-full">
                                  <div class="flex p-1 my-2 border border-gray-300 rounded-lg bg-gray-50">
                                    <div class="flex flex-wrap flex-auto">
                                      <template x-for="(option,index) in selected" :key="options[option].value">
                                        <div class="flex items-center justify-center px-1 py-1 m-1 font-medium bg-gray-100 border rounded bg-gray-50">
                                          <div class="text-xs font-normal leading-none max-w-full flex-initial x-model=" options[option] x-text="options[option].text"></div>
                                          <div class="flex flex-row-reverse flex-auto">
                                            <div x-on:click.stop="remove(index,option)">
                                              <svg class="w-4 h-4 fill-current " role="button" viewBox="0 0 20 20">
                                                <path d="M14.348,14.849c-0.469,0.469-1.229,0.469-1.697,0L10,11.819l-2.651,3.029c-0.469,0.469-1.229,0.469-1.697,0
                                                                     c-0.469-0.469-0.469-1.229,0-1.697l2.758-3.15L5.651,6.849c-0.469-0.469-0.469-1.228,0-1.697s1.228-0.469,1.697,0L10,8.183
                                                                     l2.651-3.031c0.469-0.469,1.228-0.469,1.697,0s0.469,1.229,0,1.697l-2.758,3.152l2.758,3.15
                                                                     C14.817,13.62,14.817,14.38,14.348,14.849z" />
                                              </svg>
                          
                                            </div>
                                          </div>
                                        </div>
                                      </template>
                                      <div x-show="selected.length == 0" class="flex-1">
                                        <input placeholder="Pilih Tag" name="tag[]" class="w-full h-full p-1 px-2 text-sm text-gray-900 bg-transparent outline-none appearance-none" x-bind:value="selectedValues()">
                                      </div>
                                    </div>
                                    <div class="flex items-center w-8 py-1 pl-2 pr-1 text-gray-300 border-l border-gray-200 svelte-1l8159u">
                          
                                      <button type="button" x-show="isOpen() === true" x-on:click="open" class="w-6 h-6 text-gray-600 outline-none cursor-pointer focus:outline-none">
                                        <svg version="1.1" class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                                          <path d="M17.418,6.109c0.272-0.268,0.709-0.268,0.979,0s0.271,0.701,0,0.969l-7.908,7.83
                              c-0.27,0.268-0.707,0.268-0.979,0l-7.908-7.83c-0.27-0.268-0.27-0.701,0-0.969c0.271-0.268,0.709-0.268,0.979,0L10,13.25
                              L17.418,6.109z" />
                                        </svg>
                          
                                      </button>
                                      <button type="button" x-show="isOpen() === false" @click="close" class="w-6 h-6 text-gray-600 outline-none cursor-pointer focus:outline-none">
                                        <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                                          <path d="M2.582,13.891c-0.272,0.268-0.709,0.268-0.979,0s-0.271-0.701,0-0.969l7.908-7.83
                              c0.27-0.268,0.707-0.268,0.979,0l7.908,7.83c0.27,0.268,0.27,0.701,0,0.969c-0.271,0.268-0.709,0.268-0.978,0L10,6.75L2.582,13.891z
                              " />
                                        </svg>
                          
                                      </button>
                                    </div>
                                  </div>
                                </div>
                                <div class="w-full px-4">
                                  <div x-show.transition.origin.top="isOpen()" class="absolute left-0 z-40 w-full bg-white rounded shadow top-100 max-h-select" x-on:click.away="close">
                                    <div class="flex flex-col w-full h-64 overflow-y-auto">
                                      <template x-for="(option,index) in options" :key="option" class="overflow-auto">
                                        <div class="w-full border-b border-gray-100 rounded-t cursor-pointer hover:bg-gray-100" @click="select(index,$event)">
                                          <div class="relative flex items-center w-full p-2 pl-2 border-l-2 border-transparent">
                                            <div class="flex items-center justify-between w-full">
                                              <div class="mx-2 leading-6" x-model="option" x-text="option.text"></div>
                                              <div x-show="option.selected">
                                                <svg class="svg-icon" viewBox="0 0 20 20">
                                                  <path fill="none" d="M7.197,16.963H7.195c-0.204,0-0.399-0.083-0.544-0.227l-6.039-6.082c-0.3-0.302-0.297-0.788,0.003-1.087
                                                      C0.919,9.266,1.404,9.269,1.702,9.57l5.495,5.536L18.221,4.083c0.301-0.301,0.787-0.301,1.087,0c0.301,0.3,0.301,0.787,0,1.087
                                                      L7.741,16.738C7.596,16.882,7.401,16.963,7.197,16.963z"></path>
                                                </svg>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </template>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <select x-cloak id="select">
                          @foreach ($tags as $tag)
                            <option value={{ $tag->id }}>{{ $tag->name }}</option>
                          @endforeach
                        </select>
                    </div>
                    <div>
                        <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kategori</label>
                        <select required id="category" name="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected>Pilih Kategori</option>
                            <option value="Artikel">Artikel</option>
                            <option value="Produk">Produk</option>
                        </select>
                    </div>
                    <div>
                        <label for="content" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Konten</label>
                        <textarea name="content" id="editor1"></textarea>
                    </div>
                    
                    <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Simpan</button>
                  </form>
              </div>
          </div>
      </div>
     </div>
 
     @foreach($articles as $article)
     {{-- Modal Edit --}}
     <div id="edit-modal{{ $article->id }}" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
      <div class="relative w-full max-w-md max-h-full">
          <!-- Modal content -->
          <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
              <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-hide="edit-modal{{ $article->id }}">
                  <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                  <span class="sr-only">Close modal</span>
              </button>
              <div class="px-6 py-6 lg:px-8">
                  <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Edit Artikel</h3>
                  <form class="space-y-6" action="{{ route('articles.update', $article->id) }}" method="POST" enctype="multipart/form-data">
                      @csrf
                      @method('PUT')
                        <div>
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="image">Gambar</label>
                            <input aria-describedby="file_input_help" name="image" id="image" type="file" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400">
                        </div>
                        <div>
                            <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Judul</label>
                            <input type="text" name="title" id="title" value="{{ old('title', $article->title) }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Judul Artikel" required>
                        </div>
                        <div>
                            <label for="tag" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tag</label>
                            <div x-data="dropdown()" x-init="loadOptions()" class="flex flex-col w-full mx-auto">
                                <input name="values" type="hidden" x-bind:value="selectedValues()">
                                <div class="relative inline-block w-full">
                                  <div class="relative flex flex-col items-center">
                                    <div x-on:click="open" class="w-full">
                                      <div class="flex p-1 my-2 border border-gray-300 rounded-lg bg-gray-50">
                                        <div class="flex flex-wrap flex-auto">
                                          <template x-for="(option,index) in selected" :key="options[option].value">
                                            <div class="flex items-center justify-center px-1 py-1 m-1 font-medium bg-gray-100 border rounded bg-gray-50">
                                              <div class="text-xs font-normal leading-none max-w-full flex-initial x-model=" options[option] x-text="options[option].text"></div>
                                              <div class="flex flex-row-reverse flex-auto">
                                                <div x-on:click.stop="remove(index,option)">
                                                  <svg class="w-4 h-4 fill-current " role="button" viewBox="0 0 20 20">
                                                    <path d="M14.348,14.849c-0.469,0.469-1.229,0.469-1.697,0L10,11.819l-2.651,3.029c-0.469,0.469-1.229,0.469-1.697,0
                                                                         c-0.469-0.469-0.469-1.229,0-1.697l2.758-3.15L5.651,6.849c-0.469-0.469-0.469-1.228,0-1.697s1.228-0.469,1.697,0L10,8.183
                                                                         l2.651-3.031c0.469-0.469,1.228-0.469,1.697,0s0.469,1.229,0,1.697l-2.758,3.152l2.758,3.15
                                                                         C14.817,13.62,14.817,14.38,14.348,14.849z" />
                                                  </svg>
                              
                                                </div>
                                              </div>
                                            </div>
                                          </template>
                                          <div x-show="selected.length == 0" class="flex-1">
                                            <input placeholder="Pilih Tag" name="tag[]" class="w-full h-full p-1 px-2 text-sm text-gray-900 bg-transparent outline-none appearance-none" x-bind:value="selectedValues()">
                                          </div>
                                        </div>
                                        <div class="flex items-center w-8 py-1 pl-2 pr-1 text-gray-300 border-l border-gray-200 svelte-1l8159u">
                              
                                          <button type="button" x-show="isOpen() === true" x-on:click="open" class="w-6 h-6 text-gray-600 outline-none cursor-pointer focus:outline-none">
                                            <svg version="1.1" class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                                              <path d="M17.418,6.109c0.272-0.268,0.709-0.268,0.979,0s0.271,0.701,0,0.969l-7.908,7.83
                                  c-0.27,0.268-0.707,0.268-0.979,0l-7.908-7.83c-0.27-0.268-0.27-0.701,0-0.969c0.271-0.268,0.709-0.268,0.979,0L10,13.25
                                  L17.418,6.109z" />
                                            </svg>
                              
                                          </button>
                                          <button type="button" x-show="isOpen() === false" @click="close" class="w-6 h-6 text-gray-600 outline-none cursor-pointer focus:outline-none">
                                            <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                                              <path d="M2.582,13.891c-0.272,0.268-0.709,0.268-0.979,0s-0.271-0.701,0-0.969l7.908-7.83
                                  c0.27-0.268,0.707-0.268,0.979,0l7.908,7.83c0.27,0.268,0.27,0.701,0,0.969c-0.271,0.268-0.709,0.268-0.978,0L10,6.75L2.582,13.891z
                                  " />
                                            </svg>
                              
                                          </button>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="w-full px-4">
                                      <div x-show.transition.origin.top="isOpen()" class="absolute left-0 z-40 w-full bg-white rounded shadow top-100 max-h-select" x-on:click.away="close">
                                        <div class="flex flex-col w-full h-64 overflow-y-auto">
                                          <template x-for="(option,index) in options" :key="option" class="overflow-auto">
                                            <div class="w-full border-b border-gray-100 rounded-t cursor-pointer hover:bg-gray-100" @click="select(index,$event)">
                                              <div class="relative flex items-center w-full p-2 pl-2 border-l-2 border-transparent">
                                                <div class="flex items-center justify-between w-full">
                                                  <div class="mx-2 leading-6" x-model="option" x-text="option.text"></div>
                                                  <div x-show="option.selected">
                                                    <svg class="svg-icon" viewBox="0 0 20 20">
                                                      <path fill="none" d="M7.197,16.963H7.195c-0.204,0-0.399-0.083-0.544-0.227l-6.039-6.082c-0.3-0.302-0.297-0.788,0.003-1.087
                                                          C0.919,9.266,1.404,9.269,1.702,9.57l5.495,5.536L18.221,4.083c0.301-0.301,0.787-0.301,1.087,0c0.301,0.3,0.301,0.787,0,1.087
                                                          L7.741,16.738C7.596,16.882,7.401,16.963,7.197,16.963z"></path>
                                                    </svg>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </template>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <select x-cloak id="select" name="tag[]" multiple="multiple">
                              @foreach ($tags as $tag)
                                <option value={{ $tag->id }}>{{ $tag->name }}</option>
                              @endforeach
                            </select>
                        </div>
                        
                        <div>
                            <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kategori</label>
                            <select required id="category" name="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option value="Artikel" {{ $article->category == 'Artikel' ? 'selected' : '' }}>Artikel</option>
                                <option value="Produk" {{ $article->category == 'Produk' ? 'selected' : '' }}>Produk</option>
                            </select>
                        </div>
                        <div>
                            <label for="content" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Konten</label>
                            <textarea name="content" id="editor2">{{ old('content', $article->content) }}</textarea>
                        </div>
                     <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Simpan</button>
                  </form>
              </div>
          </div>
      </div>
     </div> 
 
     {{-- Modal Delete --}}
     <div id="delete-modal{{ $article->id }}" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
      <div class="relative w-full max-w-md max-h-full">
          <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
              <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-hide="delete-modal{{ $article->id }}">
                  <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                  <span class="sr-only">Close modal</span>
              </button>
              <div class="p-6 text-center">
                  <svg aria-hidden="true" class="mx-auto mb-4 text-gray-400 w-14 h-14 dark:text-gray-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                  <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Are you sure you want to delete this article?</h3>
                  <form action="{{ route('articles.destroy', $article->id) }}" method="POST" class="inline-block">
                   @csrf
                   @method('delete')
                  <button data-modal-hide="delete-modal{{ $article->id }}" type="submit" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                      Yes, I'm sure
                  </button>
                  </form>
                  <button data-modal-hide="delete-modal{{ $article->id }}" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">No, cancel</button>
              </div>
          </div>
      </div>
     </div>
     @endforeach

    <script>
        function dropdown() {
                return {
                    options: [],
                    selected: [],
                    show: false,
                    open() { this.show = true },
                    close() { this.show = false },
                    isOpen() { return this.show === true },
                    select(index, event) {

                        if (!this.options[index].selected) {

                            this.options[index].selected = true;
                            this.options[index].element = event.target;
                            this.selected.push(index);

                        } else {
                            this.selected.splice(this.selected.lastIndexOf(index), 1);
                            this.options[index].selected = false
                        }
                    },
                    remove(index, option) {
                        this.options[option].selected = false;
                        this.selected.splice(index, 1);


                    },
                    loadOptions() {
                        const options = document.getElementById('select').options;
                        for (let i = 0; i < options.length; i++) {
                            this.options.push({
                                value: options[i].value,
                                text: options[i].innerText,
                                selected: options[i].getAttribute('selected') != null ? options[i].getAttribute('selected') : false
                            });
                        }


                    },
                    selectedValues(){
                        return this.selected.map((option)=>{
                            return this.options[option].value;
                        })
                    }
                }
            }
    </script>

 </x-app-layout>
 