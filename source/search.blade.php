@extends('_layouts.master')

@section('body')
<section class="container px-4 py-10 mx-auto">
    <h4 class="text-3xl font-semibold text-center text-gray-800">All Components</h4>

    <div class="mx-auto mt-6 bg-white border rounded-md lg:w-96 focus-within:ring ring-primary focus-within:border-teal-500">
        <div class="flex flex-wrap justify-between md:flex-row">
            <input type="name" value="Alpine js" class="flex-1 p-2 m-1 text-gray-700 border-none appearance-none focus:outline-none focus:placeholder-transparent focus:ring-0" placeholder="Search Components">
            <button class="flex justify-center w-full p-2 m-1 text-white transition-colors duration-200 transform rounded-md bg-primary lg:w-auto hover:bg-teal-300 focus:outline-none focus:bg-teal-300">
                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
            </button>
        </div>
    </div>

    <div class="flex items-center mt-6 space-x-4 overflow-y-auto 2xl:justify-center whitespace-nowrap">
        <a href="#" class="px-3 py-1.5 font-medium text-gray-800 bg-gray-200 rounded-lg hover:bg-gray-300 capitalize">All</a>
        <a href="#" class="px-3 py-1.5 text-gray-500 rounded-lg capitalize hover:bg-gray-200">Button</a>
        <a href="#" class="px-3 py-1.5 text-gray-500 rounded-lg capitalize hover:bg-gray-200">Forms</a>
        <a href="#" class="px-3 py-1.5 text-gray-500 rounded-lg capitalize hover:bg-gray-200">Navigations</a>
        <a href="#" class="px-3 py-1.5 text-gray-500 rounded-lg capitalize hover:bg-gray-200">Cards</a>
        <a href="#" class="px-3 py-1.5 text-gray-500 rounded-lg capitalize hover:bg-gray-200">Widget</a>
        <a href="#" class="px-3 py-1.5 text-gray-500 rounded-lg capitalize hover:bg-gray-200">Tables</a>
        <a href="#" class="px-3 py-1.5 text-gray-500 rounded-lg capitalize hover:bg-gray-200">Pages</a>
        <a href="#" class="px-3 py-1.5 text-gray-500 rounded-lg capitalize hover:bg-gray-200">Alpine</a>
        <a href="#" class="px-3 py-1.5 text-gray-500 rounded-lg capitalize hover:bg-gray-200">Dropdown</a>
        <a href="#" class="px-3 py-1.5 text-gray-500 rounded-lg capitalize hover:bg-gray-200">Logins</a>
        <a href="#" class="px-3 py-1.5 text-gray-500 rounded-lg capitalize hover:bg-gray-200">Models</a>
        <a href="#" class="px-3 py-1.5 text-gray-500 rounded-lg capitalize hover:bg-gray-200">Tabs</a>
        <a href="#" class="px-3 py-1.5 text-gray-500 rounded-lg capitalize hover:bg-gray-200">Inputs</a>
        <a href="#" class="px-3 py-1.5 text-gray-500 rounded-lg capitalize hover:bg-gray-200">Selects</a>
    </div>

    <div class="grid gap-8 mt-10 md:grid-cols-2 lg:grid-cols-3">
        <div>
            <a href="#" class="block h-48 overflow-hidden bg-blue-100 rounded-lg xl:h-64">
                <img alt="tailwind Button with menu" loading="" src="https://tailwindcomponents.com/storage/1625/conversions/temp14582-thumb.jpg" class="object-cover w-full h-full shadow-md">
            </a> 
            
            <div class="flex items-center justify-between mt-4">
                <div class="flex items-center space-x-4">
                    <a href="#" class="flex-shrink-0 w-10 h-10 overflow-hidden rounded-full ">
                        <img class="object-cover w-full h-full" src="https://images.unsplash.com/photo-1531427186611-ecfd6d936c79?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=2134&q=80">
                    </a> 
                    
                    <div class="flex flex-col space-y-1">
                        <a href="#" class="font-semibold text-gray-800 sm:text-lg hover:text-primary hover:underline">Responsive Mini + One Columns Sidebar</a> 
                        <a href="#" class="text-sm text-gray-600 hover:underline">khatabwedaa</a>
                    </div>
                </div>

                <div class="flex items-center space-x-2 text-gray-400">
                    <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                        <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd" />
                    </svg>
                    
                    <span class="text-sm font-medium">2.5K</span>
                </div>
            </div>
        </div>

         <div>
            <a href="#" class="block h-48 overflow-hidden bg-blue-100 rounded-lg xl:h-64">
                <img alt="tailwind Button with menu" loading="" src="https://tailwindcomponents.com/storage/1625/conversions/temp14582-thumb.jpg" class="object-cover w-full h-full shadow-md">
            </a> 
            
            <div class="flex items-center justify-between mt-4">
                <div class="flex items-center space-x-4">
                    <a href="#" class="flex-shrink-0 w-10 h-10 overflow-hidden rounded-full ">
                        <img class="object-cover w-full h-full" src="https://images.unsplash.com/photo-1531427186611-ecfd6d936c79?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=2134&q=80">
                    </a> 
                    
                    <div class="flex flex-col space-y-1">
                        <a href="#" class="font-semibold text-gray-800 sm:text-lg hover:text-primary hover:underline">Responsive Mini + One Columns Sidebar</a> 
                        <a href="#" class="text-sm text-gray-600 hover:underline">khatabwedaa</a>
                    </div>
                </div>

                <div class="flex items-center space-x-2 text-gray-400">
                    <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                        <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd" />
                    </svg>
                    
                    <span class="text-sm font-medium">2.5K</span>
                </div>
            </div>
        </div>

         <div>
            <a href="#" class="block h-48 overflow-hidden bg-blue-100 rounded-lg xl:h-64">
                <img alt="tailwind Button with menu" loading="" src="https://tailwindcomponents.com/storage/1625/conversions/temp14582-thumb.jpg" class="object-cover w-full h-full shadow-md">
            </a> 
            
            <div class="flex items-center justify-between mt-4">
                <div class="flex items-center space-x-4">
                    <a href="#" class="flex-shrink-0 w-10 h-10 overflow-hidden rounded-full ">
                        <img class="object-cover w-full h-full" src="https://images.unsplash.com/photo-1531427186611-ecfd6d936c79?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=2134&q=80">
                    </a> 
                    
                    <div class="flex flex-col space-y-1">
                        <a href="#" class="font-semibold text-gray-800 sm:text-lg hover:text-primary hover:underline">Responsive Mini + One Columns Sidebar</a> 
                        <a href="#" class="text-sm text-gray-600 hover:underline">khatabwedaa</a>
                    </div>
                </div>

                <div class="flex items-center space-x-2 text-gray-400">
                    <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                        <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd" />
                    </svg>
                    
                    <span class="text-sm font-medium">2.5K</span>
                </div>
            </div>
        </div>

        <div>
            <a href="#" class="block h-48 overflow-hidden bg-blue-100 rounded-lg xl:h-64">
                <img alt="tailwind Button with menu" loading="" src="https://tailwindcomponents.com/storage/1625/conversions/temp14582-thumb.jpg" class="object-cover w-full h-full shadow-md">
            </a> 
            
            <div class="flex items-center justify-between mt-4">
                <div class="flex items-center space-x-4">
                    <a href="#" class="flex-shrink-0 w-10 h-10 overflow-hidden rounded-full ">
                        <img class="object-cover w-full h-full" src="https://images.unsplash.com/photo-1531427186611-ecfd6d936c79?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=2134&q=80">
                    </a> 
                    
                    <div class="flex flex-col space-y-1">
                        <a href="#" class="font-semibold text-gray-800 sm:text-lg hover:text-primary hover:underline">Responsive Mini + One Columns Sidebar</a> 
                        <a href="#" class="text-sm text-gray-600 hover:underline">khatabwedaa</a>
                    </div>
                </div>

                <div class="flex items-center space-x-2 text-gray-400">
                    <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                        <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd" />
                    </svg>
                    
                    <span class="text-sm font-medium">2.5K</span>
                </div>
            </div>
        </div>

         <div>
            <a href="#" class="block h-48 overflow-hidden bg-blue-100 rounded-lg xl:h-64">
                <img alt="tailwind Button with menu" loading="" src="https://tailwindcomponents.com/storage/1625/conversions/temp14582-thumb.jpg" class="object-cover w-full h-full shadow-md">
            </a> 
            
            <div class="flex items-center justify-between mt-4">
                <div class="flex items-center space-x-4">
                    <a href="#" class="flex-shrink-0 w-10 h-10 overflow-hidden rounded-full ">
                        <img class="object-cover w-full h-full" src="https://images.unsplash.com/photo-1531427186611-ecfd6d936c79?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=2134&q=80">
                    </a> 
                    
                    <div class="flex flex-col space-y-1">
                        <a href="#" class="font-semibold text-gray-800 sm:text-lg hover:text-primary hover:underline">Responsive Mini + One Columns Sidebar</a> 
                        <a href="#" class="text-sm text-gray-600 hover:underline">khatabwedaa</a>
                    </div>
                </div>

                <div class="flex items-center space-x-2 text-gray-400">
                    <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                        <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd" />
                    </svg>
                    
                    <span class="text-sm font-medium">2.5K</span>
                </div>
            </div>
        </div>

         <div>
            <a href="#" class="block h-48 overflow-hidden bg-blue-100 rounded-lg xl:h-64">
                <img alt="tailwind Button with menu" loading="" src="https://tailwindcomponents.com/storage/1625/conversions/temp14582-thumb.jpg" class="object-cover w-full h-full shadow-md">
            </a> 
            
            <div class="flex items-center justify-between mt-4">
                <div class="flex items-center space-x-4">
                    <a href="#" class="flex-shrink-0 w-10 h-10 overflow-hidden rounded-full ">
                        <img class="object-cover w-full h-full" src="https://images.unsplash.com/photo-1531427186611-ecfd6d936c79?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=2134&q=80">
                    </a> 
                    
                    <div class="flex flex-col space-y-1">
                        <a href="#" class="font-semibold text-gray-800 sm:text-lg hover:text-primary hover:underline">Responsive Mini + One Columns Sidebar</a> 
                        <a href="#" class="text-sm text-gray-600 hover:underline">khatabwedaa</a>
                    </div>
                </div>

                <div class="flex items-center space-x-2 text-gray-400">
                    <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                        <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd" />
                    </svg>
                    
                    <span class="text-sm font-medium">2.5K</span>
                </div>
            </div>
        </div>
        <div>
            <a href="#" class="block h-48 overflow-hidden bg-blue-100 rounded-lg xl:h-64">
                <img alt="tailwind Button with menu" loading="" src="https://tailwindcomponents.com/storage/1625/conversions/temp14582-thumb.jpg" class="object-cover w-full h-full shadow-md">
            </a> 
            
            <div class="flex items-center justify-between mt-4">
                <div class="flex items-center space-x-4">
                    <a href="#" class="flex-shrink-0 w-10 h-10 overflow-hidden rounded-full ">
                        <img class="object-cover w-full h-full" src="https://images.unsplash.com/photo-1531427186611-ecfd6d936c79?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=2134&q=80">
                    </a> 
                    
                    <div class="flex flex-col space-y-1">
                        <a href="#" class="font-semibold text-gray-800 sm:text-lg hover:text-primary hover:underline">Responsive Mini + One Columns Sidebar</a> 
                        <a href="#" class="text-sm text-gray-600 hover:underline">khatabwedaa</a>
                    </div>
                </div>

                <div class="flex items-center space-x-2 text-gray-400">
                    <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                        <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd" />
                    </svg>
                    
                    <span class="text-sm font-medium">2.5K</span>
                </div>
            </div>
        </div>

         <div>
            <a href="#" class="block h-48 overflow-hidden bg-blue-100 rounded-lg xl:h-64">
                <img alt="tailwind Button with menu" loading="" src="https://tailwindcomponents.com/storage/1625/conversions/temp14582-thumb.jpg" class="object-cover w-full h-full shadow-md">
            </a> 
            
            <div class="flex items-center justify-between mt-4">
                <div class="flex items-center space-x-4">
                    <a href="#" class="flex-shrink-0 w-10 h-10 overflow-hidden rounded-full ">
                        <img class="object-cover w-full h-full" src="https://images.unsplash.com/photo-1531427186611-ecfd6d936c79?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=2134&q=80">
                    </a> 
                    
                    <div class="flex flex-col space-y-1">
                        <a href="#" class="font-semibold text-gray-800 sm:text-lg hover:text-primary hover:underline">Responsive Mini + One Columns Sidebar</a> 
                        <a href="#" class="text-sm text-gray-600 hover:underline">khatabwedaa</a>
                    </div>
                </div>

                <div class="flex items-center space-x-2 text-gray-400">
                    <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                        <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd" />
                    </svg>
                    
                    <span class="text-sm font-medium">2.5K</span>
                </div>
            </div>
        </div>

         <div>
            <a href="#" class="block h-48 overflow-hidden bg-blue-100 rounded-lg xl:h-64">
                <img alt="tailwind Button with menu" loading="" src="https://tailwindcomponents.com/storage/1625/conversions/temp14582-thumb.jpg" class="object-cover w-full h-full shadow-md">
            </a> 
            
            <div class="flex items-center justify-between mt-4">
                <div class="flex items-center space-x-4">
                    <a href="#" class="flex-shrink-0 w-10 h-10 overflow-hidden rounded-full ">
                        <img class="object-cover w-full h-full" src="https://images.unsplash.com/photo-1531427186611-ecfd6d936c79?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=2134&q=80">
                    </a> 
                    
                    <div class="flex flex-col space-y-1">
                        <a href="#" class="font-semibold text-gray-800 sm:text-lg hover:text-primary hover:underline">Responsive Mini + One Columns Sidebar</a> 
                        <a href="#" class="text-sm text-gray-600 hover:underline">khatabwedaa</a>
                    </div>
                </div>

                <div class="flex items-center space-x-2 text-gray-400">
                    <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                        <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd" />
                    </svg>
                    
                    <span class="text-sm font-medium">2.5K</span>
                </div>
            </div>
        </div>

        <div>
            <a href="#" class="block h-48 overflow-hidden bg-blue-100 rounded-lg xl:h-64">
                <img alt="tailwind Button with menu" loading="" src="https://tailwindcomponents.com/storage/1625/conversions/temp14582-thumb.jpg" class="object-cover w-full h-full shadow-md">
            </a> 
            
            <div class="flex items-center justify-between mt-4">
                <div class="flex items-center space-x-4">
                    <a href="#" class="flex-shrink-0 w-10 h-10 overflow-hidden rounded-full ">
                        <img class="object-cover w-full h-full" src="https://images.unsplash.com/photo-1531427186611-ecfd6d936c79?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=2134&q=80">
                    </a> 
                    
                    <div class="flex flex-col space-y-1">
                        <a href="#" class="font-semibold text-gray-800 sm:text-lg hover:text-primary hover:underline">Responsive Mini + One Columns Sidebar</a> 
                        <a href="#" class="text-sm text-gray-600 hover:underline">khatabwedaa</a>
                    </div>
                </div>

                <div class="flex items-center space-x-2 text-gray-400">
                    <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                        <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd" />
                    </svg>
                    
                    <span class="text-sm font-medium">2.5K</span>
                </div>
            </div>
        </div>

         <div>
            <a href="#" class="block h-48 overflow-hidden bg-blue-100 rounded-lg xl:h-64">
                <img alt="tailwind Button with menu" loading="" src="https://tailwindcomponents.com/storage/1625/conversions/temp14582-thumb.jpg" class="object-cover w-full h-full shadow-md">
            </a> 
            
            <div class="flex items-center justify-between mt-4">
                <div class="flex items-center space-x-4">
                    <a href="#" class="flex-shrink-0 w-10 h-10 overflow-hidden rounded-full ">
                        <img class="object-cover w-full h-full" src="https://images.unsplash.com/photo-1531427186611-ecfd6d936c79?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=2134&q=80">
                    </a> 
                    
                    <div class="flex flex-col space-y-1">
                        <a href="#" class="font-semibold text-gray-800 sm:text-lg hover:text-primary hover:underline">Responsive Mini + One Columns Sidebar</a> 
                        <a href="#" class="text-sm text-gray-600 hover:underline">khatabwedaa</a>
                    </div>
                </div>

                <div class="flex items-center space-x-2 text-gray-400">
                    <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                        <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd" />
                    </svg>
                    
                    <span class="text-sm font-medium">2.5K</span>
                </div>
            </div>
        </div>

         <div>
            <a href="#" class="block h-48 overflow-hidden bg-blue-100 rounded-lg xl:h-64">
                <img alt="tailwind Button with menu" loading="" src="https://tailwindcomponents.com/storage/1625/conversions/temp14582-thumb.jpg" class="object-cover w-full h-full shadow-md">
            </a> 
            
            <div class="flex items-center justify-between mt-4">
                <div class="flex items-center space-x-4">
                    <a href="#" class="flex-shrink-0 w-10 h-10 overflow-hidden rounded-full ">
                        <img class="object-cover w-full h-full" src="https://images.unsplash.com/photo-1531427186611-ecfd6d936c79?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=2134&q=80">
                    </a> 
                    
                    <div class="flex flex-col space-y-1">
                        <a href="#" class="font-semibold text-gray-800 sm:text-lg hover:text-primary hover:underline">Responsive Mini + One Columns Sidebar</a> 
                        <a href="#" class="text-sm text-gray-600 hover:underline">khatabwedaa</a>
                    </div>
                </div>

                <div class="flex items-center space-x-2 text-gray-400">
                    <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                        <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd" />
                    </svg>
                    
                    <span class="text-sm font-medium">2.5K</span>
                </div>
            </div>
        </div>
    </div>

    <div class="flex justify-center mt-10">
        <button class="flex items-center px-4 py-2 space-x-3 text-gray-600 transition-colors duration-200 transform border rounded-lg hover:bg-gray-200">
            <span>Next</span>
            <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
            </svg>
        </button>
    </div>
</section>
@endsection
