@extends('_layouts.master')

@section('body')
<section class="container px-4 py-10 mx-auto lg:h-128 lg:space-x-8 lg:flex lg:items-center">
    <div class="w-full text-center lg:text-left lg:w-1/2">
        <h1 class="text-3xl leading-snug text-gray-800 md:text-4xl">
            A <span class="font-semibold">free repository</span> for community  <br class="hidden lg:block"> components using <span class="text-primary">TailwindCSS</span>
        </h1>

        <p class="mt-4 text-lg text-gray-500">Open source Tailwind UI components and templates to <br class="hidden lg:block"> bootstrap your new apps, projects or landing sites!</p>
    
        <div class="mt-6 bg-white border rounded-md lg:w-96 focus-within:ring ring-primary focus-within:border-teal-500">
            <div class="flex flex-wrap justify-between md:flex-row">
                <input type="name" class="flex-1 p-2 m-1 text-gray-700 border-none appearance-none focus:outline-none focus:placeholder-transparent focus:ring-0" placeholder="Search Components">
                <button class="flex justify-center w-full p-2 m-1 text-white transition-colors duration-200 transform rounded-md bg-primary lg:w-auto hover:bg-teal-300">
                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
    
    <div class="w-full mt-4 lg:mt-0 lg:w-1/2">
        <img class="w-full h-full max-w-md mx-auto" src="./assets/website-designer-bro.svg" alt="web designer">
    </div>
</section>

<section class="container px-4 py-10 mx-auto">
    <h3 class="text-2xl font-semibold text-gray-800">Latest components</h3>
    <p class="mt-4 text-gray-500">The newest featured components from the community</p>

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
    </div>
</section>

<section class="container px-4 py-10 mx-auto">
    <h3 class="text-2xl font-semibold text-gray-800">Popular components</h3>
    <p class="mt-4 text-gray-500">The most popular tailwindcss components</p>

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
    </div>
</section>
@endsection
