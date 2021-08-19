 <div class="hidden lg:flex lg:flex-shrink-0">
     <div class="flex flex-col w-64">
         <!-- Sidebar component, swap this element with another sidebar if you like -->
         <div class="flex flex-col flex-1 h-0 bg-gray-100 border-r border-gray-200">
             <div class="flex flex-col flex-1 pt-5 pb-4 overflow-y-auto">
                 <div class="flex items-center flex-shrink-0 px-4">
                     <img class="w-auto h-8"
                         src="https://tailwindui.com/img/logos/workflow-logo-pink-500-mark-gray-900-text.svg"
                         alt="Workflow">
                 </div>
                 <nav class="flex-1 mt-5" aria-label="Sidebar">
                     <div class="px-2 space-y-1">
                         <!-- Current: "bg-gray-200 text-gray-900", Default: "text-gray-600 hover:bg-gray-50 hover:text-gray-900" -->
                         <a href="#"
                             class="flex items-center px-2 py-2 text-sm font-medium text-gray-900 bg-gray-200 rounded-md group"
                             aria-current="page">
                             <!--
                                Heroicon name: outline/home

                                Current: "text-gray-500", Default: "text-gray-400 group-hover:text-gray-500"
                            -->
                             <svg class="flex-shrink-0 w-6 h-6 mr-3 text-gray-500" xmlns="http://www.w3.org/2000/svg"
                                 fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                     d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                             </svg>
                             Dashboard
                         </a>

                         <a href="#"
                             class="flex items-center px-2 py-2 text-sm font-medium text-gray-600 rounded-md hover:bg-gray-50 hover:text-gray-900 group">
                             <!-- Heroicon name: outline/calendar -->
                             <svg class="flex-shrink-0 w-6 h-6 mr-3 text-gray-400 group-hover:text-gray-500"
                                 xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                 stroke="currentColor" aria-hidden="true">
                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                     d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                             </svg>
                             Calendar
                         </a>

                         <a href="#"
                             class="flex items-center px-2 py-2 text-sm font-medium text-gray-600 rounded-md hover:bg-gray-50 hover:text-gray-900 group">
                             <!-- Heroicon name: outline/user-group -->
                             <svg class="flex-shrink-0 w-6 h-6 mr-3 text-gray-400 group-hover:text-gray-500"
                                 xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                 stroke="currentColor" aria-hidden="true">
                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                     d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                             </svg>
                             Teams
                         </a>

                         <a href="#"
                             class="flex items-center px-2 py-2 text-sm font-medium text-gray-600 rounded-md hover:bg-gray-50 hover:text-gray-900 group">
                             <!-- Heroicon name: outline/search-circle -->
                             <svg class="flex-shrink-0 w-6 h-6 mr-3 text-gray-400 group-hover:text-gray-500"
                                 xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                 stroke="currentColor" aria-hidden="true">
                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                     d="M8 16l2.879-2.879m0 0a3 3 0 104.243-4.242 3 3 0 00-4.243 4.242zM21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                             </svg>
                             Directory
                         </a>

                         <a href="#"
                             class="flex items-center px-2 py-2 text-sm font-medium text-gray-600 rounded-md hover:bg-gray-50 hover:text-gray-900 group">
                             <!-- Heroicon name: outline/speakerphone -->
                             <svg class="flex-shrink-0 w-6 h-6 mr-3 text-gray-400 group-hover:text-gray-500"
                                 xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                 stroke="currentColor" aria-hidden="true">
                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                     d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z" />
                             </svg>
                             Announcements
                         </a>

                         <a href="#"
                             class="flex items-center px-2 py-2 text-sm font-medium text-gray-600 rounded-md hover:bg-gray-50 hover:text-gray-900 group">
                             <!-- Heroicon name: outline/map -->
                             <svg class="flex-shrink-0 w-6 h-6 mr-3 text-gray-400 group-hover:text-gray-500"
                                 xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                 stroke="currentColor" aria-hidden="true">
                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                     d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7" />
                             </svg>
                             Office Map
                         </a>
                     </div>
                     <hr class="my-5 border-t border-gray-200" aria-hidden="true">
                     <div class="flex-1 px-2 space-y-1">
                         <a href="#"
                             class="flex items-center px-2 py-2 text-sm font-medium text-gray-600 rounded-md hover:bg-gray-50 hover:text-gray-900 group">
                             <!-- Heroicon name: outline/view-grid-add -->
                             <svg class="flex-shrink-0 w-6 h-6 mr-3 text-gray-400 group-hover:text-gray-500"
                                 xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                 stroke="currentColor" aria-hidden="true">
                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                     d="M17 14v6m-3-3h6M6 10h2a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v2a2 2 0 002 2zm10 0h2a2 2 0 002-2V6a2 2 0 00-2-2h-2a2 2 0 00-2 2v2a2 2 0 002 2zM6 20h2a2 2 0 002-2v-2a2 2 0 00-2-2H6a2 2 0 00-2 2v2a2 2 0 002 2z" />
                             </svg>
                             Apps
                         </a>

                         <a href="#"
                             class="flex items-center px-2 py-2 text-sm font-medium text-gray-600 rounded-md hover:bg-gray-50 hover:text-gray-900 group">
                             <!-- Heroicon name: outline/cog -->
                             <svg class="flex-shrink-0 w-6 h-6 mr-3 text-gray-400 group-hover:text-gray-500"
                                 xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                 stroke="currentColor" aria-hidden="true">
                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                     d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                     d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                             </svg>
                             Settings
                         </a>
                     </div>
                 </nav>
             </div>
             <div class="flex flex-shrink-0 p-4 border-t border-gray-200">
                 <a href="#" class="flex-shrink-0 block w-full group">
                     <div class="flex items-center">
                         <div>
                             <img class="inline-block rounded-full h-9 w-9"
                                 src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                 alt="">
                         </div>
                         <div class="ml-3">
                             <p class="text-sm font-medium text-gray-700 group-hover:text-gray-900">
                                 Tom Cook
                             </p>
                             <p class="text-xs font-medium text-gray-500 group-hover:text-gray-700">
                                 View profile
                             </p>
                         </div>
                     </div>
                 </a>
             </div>
         </div>
     </div>
 </div>
