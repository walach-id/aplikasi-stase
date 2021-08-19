 @props(['list', 'useSearch' => false])

 @if ($useSearch)
     <div class="px-6 pt-6 pb-4">
         <h2 class="text-lg font-medium text-gray-900">Directory</h2>
         <p class="mt-1 text-sm text-gray-600">
             Search directory of 3,018 employees
         </p>
         <form class="flex mt-6 space-x-4" action="#">
             <div class="flex-1 min-w-0">
                 <label for="search" class="sr-only">Search</label>
                 <div class="relative rounded-md shadow-sm">
                     <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                         <!-- Heroicon name: solid/search -->
                         <svg class="w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                             fill="currentColor" aria-hidden="true">
                             <path fill-rule="evenodd"
                                 d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                 clip-rule="evenodd" />
                         </svg>
                     </div>
                     <input type="search" name="search" id="search"
                         class="block w-full pl-10 border-gray-300 rounded-md focus:ring-pink-500 focus:border-pink-500 sm:text-sm"
                         placeholder="Search">
                 </div>
             </div>
             <button type="submit"
                 class="inline-flex justify-center px-3.5 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-pink-500">
                 <!-- Heroicon name: solid/filter -->
                 <svg class="w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                     fill="currentColor" aria-hidden="true">
                     <path fill-rule="evenodd"
                         d="M3 3a1 1 0 011-1h12a1 1 0 011 1v3a1 1 0 01-.293.707L12 11.414V15a1 1 0 01-.293.707l-2 2A1 1 0 018 17v-5.586L3.293 6.707A1 1 0 013 6V3z"
                         clip-rule="evenodd" />
                 </svg>
                 <span class="sr-only">Search</span>
             </button>
         </form>
     </div>
 @endif

 <!-- Directory list -->
 <nav class="flex-1 min-h-0 overflow-y-auto" aria-label="Directory">
     <div class="relative">
         <div
             class="sticky top-0 z-10 px-6 py-1 text-sm font-medium text-gray-500 border-t border-b border-gray-200 bg-gray-50">
             <h3>A</h3>
         </div>
         <ul class="relative z-0 divide-y divide-gray-200">
             <li>
                 <div
                     class="relative flex items-center px-6 py-5 space-x-3 hover:bg-gray-50 focus-within:ring-2 focus-within:ring-inset focus-within:ring-pink-500">
                     <div class="flex-shrink-0">
                         <img class="w-10 h-10 rounded-full"
                             src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                             alt="">
                     </div>
                     <div class="flex-1 min-w-0">
                         <a href="#" class="focus:outline-none">
                             <!-- Extend touch target to entire panel -->
                             <span class="absolute inset-0" aria-hidden="true"></span>
                             <p class="text-sm font-medium text-gray-900">
                                 Leslie Abbott
                             </p>
                             <p class="text-sm text-gray-500 truncate">
                                 Co-Founder / CEO
                             </p>
                         </a>
                     </div>
                 </div>
             </li>
         </ul>
     </div>
 </nav>
