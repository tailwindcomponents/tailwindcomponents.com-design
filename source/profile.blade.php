@extends('_layouts.master')

@section('body')
<section class="container px-4 py-10 mx-auto">
    <div class="flex items-center justify-center space-x-6">
        <img class="object-cover rounded-full w-28 h-28" src="https://images.unsplash.com/photo-1502767882403-636aee14f873?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80" alt="avatar">
        
        <div>
            <h3 class="text-3xl font-semibold text-gray-800">Jane Doe</h3>

            <p class="mt-2 text-gray-500">23 Components</p>

            <div class="flex items-center space-x-3">
                <button class="px-4 py-2 mt-2 text-sm text-gray-600 transition-colors duration-200 transform border rounded-lg hover:bg-gray-100 focus:outline-none">
                    Settings
                </button>

                <button class="px-4 py-2 mt-2 text-sm text-gray-600 transition-colors duration-200 transform border rounded-lg hover:bg-gray-100 focus:outline-none">
                    <svg class="w-5 h-5" viewBox="0 0 24 24">
                        <path d="M19.995 6.68799C20.8914 6.15208 21.5622 5.30823 21.882 4.31399C21.0397 4.81379 20.118 5.16587 19.157 5.35499C17.8246 3.94552 15.7135 3.60251 14.0034 4.51764C12.2933 5.43277 11.4075 7.37948 11.841 9.26999C8.39062 9.09676 5.17598 7.4669 2.99702 4.78599C1.85986 6.74741 2.44097 9.25477 4.32502 10.516C3.64373 10.4941 2.97754 10.3096 2.38202 9.97799C2.38202 9.99599 2.38202 10.014 2.38202 10.032C2.38241 12.0751 3.82239 13.8351 5.82502 14.24C5.19308 14.4119 4.53022 14.4372 3.88702 14.314C4.45022 16.0613 6.06057 17.2583 7.89602 17.294C6.37585 18.4871 4.49849 19.1342 2.56602 19.131C2.22349 19.1315 1.88123 19.1118 1.54102 19.072C3.50341 20.333 5.78739 21.0023 8.12002 21C11.3653 21.0223 14.484 19.7429 16.7787 17.448C19.0734 15.1531 20.3526 12.0342 20.33 8.78899C20.33 8.60299 20.3257 8.41799 20.317 8.23399C21.1575 7.62659 21.8828 6.87414 22.459 6.01199C21.676 6.35905 20.8455 6.58691 19.995 6.68799Z" fill="currentColor"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <div class="flex items-center justify-center mt-12 space-x-6">
        <button class="px-4 py-2 mt-2 text-sm text-white rounded-lg bg-primary focus:outline-none">
            Components
        </button>

        <button class="px-4 py-2 mt-2 text-sm text-gray-600 transition-colors duration-200 transform border rounded-lg hover:bg-gray-100 focus:outline-none">
            Favoraites
        </button>
    </div>

    <div class="grid gap-8 mt-10 md:grid-cols-2 lg:grid-cols-3">
        <div>
            <a href="#" class="block h-48 overflow-hidden bg-blue-100 rounded-lg xl:h-64">
                <img alt="tailwind Button with menu" loading="" src="https://tailwindcomponents.com/storage/1625/conversions/temp14582-thumb.jpg" class="object-cover w-full h-full shadow-md">
            </a> 
            
            <div class="flex items-center justify-between mt-4">
                <div class="flex items-center space-x-4">
                    <a href="#" class="flex-shrink-0 w-10 h-10 overflow-hidden rounded-full ">
                        <img class="object-cover w-full h-full" src="https://images.unsplash.com/photo-1502767882403-636aee14f873?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80">
                    </a> 
                    
                    <div class="flex flex-col space-y-1">
                        <a href="#" class="font-semibold text-gray-800 sm:text-lg hover:text-primary hover:underline">Navbar with alpinejs</a> 
                        <a href="#" class="text-sm text-gray-600 hover:underline">Jane Doe</a>
                    </div>
                </div>

                <div class="flex items-center space-x-2 text-gray-400">
                    <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                        <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd" />
                    </svg>
                    
                    <span class="text-sm font-medium">203</span>
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
                        <img class="object-cover w-full h-full" src="https://images.unsplash.com/photo-1502767882403-636aee14f873?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80">
                    </a> 
                    
                    <div class="flex flex-col space-y-1">
                        <a href="#" class="font-semibold text-gray-800 sm:text-lg hover:text-primary hover:underline">Navbar with alpinejs</a> 
                        <a href="#" class="text-sm text-gray-600 hover:underline">Jane Doe</a>
                    </div>
                </div>

                <div class="flex items-center space-x-2 text-gray-400">
                    <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                        <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd" />
                    </svg>
                    
                    <span class="text-sm font-medium">203</span>
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
                        <img class="object-cover w-full h-full" src="https://images.unsplash.com/photo-1502767882403-636aee14f873?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80">
                    </a> 
                    
                    <div class="flex flex-col space-y-1">
                        <a href="#" class="font-semibold text-gray-800 sm:text-lg hover:text-primary hover:underline">Navbar with alpinejs</a> 
                        <a href="#" class="text-sm text-gray-600 hover:underline">Jane Doe</a>
                    </div>
                </div>

                <div class="flex items-center space-x-2 text-gray-400">
                    <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                        <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd" />
                    </svg>
                    
                    <span class="text-sm font-medium">203</span>
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
                        <img class="object-cover w-full h-full" src="https://images.unsplash.com/photo-1502767882403-636aee14f873?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80">
                    </a> 
                    
                    <div class="flex flex-col space-y-1">
                        <a href="#" class="font-semibold text-gray-800 sm:text-lg hover:text-primary hover:underline">Navbar with alpinejs</a> 
                        <a href="#" class="text-sm text-gray-600 hover:underline">Jane Doe</a>
                    </div>
                </div>

                <div class="flex items-center space-x-2 text-gray-400">
                    <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                        <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd" />
                    </svg>
                    
                    <span class="text-sm font-medium">203</span>
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
                        <img class="object-cover w-full h-full" src="https://images.unsplash.com/photo-1502767882403-636aee14f873?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80">
                    </a> 
                    
                    <div class="flex flex-col space-y-1">
                        <a href="#" class="font-semibold text-gray-800 sm:text-lg hover:text-primary hover:underline">Navbar with alpinejs</a> 
                        <a href="#" class="text-sm text-gray-600 hover:underline">Jane Doe</a>
                    </div>
                </div>

                <div class="flex items-center space-x-2 text-gray-400">
                    <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                        <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd" />
                    </svg>
                    
                    <span class="text-sm font-medium">203</span>
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
                        <img class="object-cover w-full h-full" src="https://images.unsplash.com/photo-1502767882403-636aee14f873?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80">
                    </a> 
                    
                    <div class="flex flex-col space-y-1">
                        <a href="#" class="font-semibold text-gray-800 sm:text-lg hover:text-primary hover:underline">Navbar with alpinejs</a> 
                        <a href="#" class="text-sm text-gray-600 hover:underline">Jane Doe</a>
                    </div>
                </div>

                <div class="flex items-center space-x-2 text-gray-400">
                    <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                        <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd" />
                    </svg>
                    
                    <span class="text-sm font-medium">203</span>
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
                        <img class="object-cover w-full h-full" src="https://images.unsplash.com/photo-1502767882403-636aee14f873?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80">
                    </a> 
                    
                    <div class="flex flex-col space-y-1">
                        <a href="#" class="font-semibold text-gray-800 sm:text-lg hover:text-primary hover:underline">Navbar with alpinejs</a> 
                        <a href="#" class="text-sm text-gray-600 hover:underline">Jane Doe</a>
                    </div>
                </div>

                <div class="flex items-center space-x-2 text-gray-400">
                    <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                        <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd" />
                    </svg>
                    
                    <span class="text-sm font-medium">203</span>
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
                        <img class="object-cover w-full h-full" src="https://images.unsplash.com/photo-1502767882403-636aee14f873?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80">
                    </a> 
                    
                    <div class="flex flex-col space-y-1">
                        <a href="#" class="font-semibold text-gray-800 sm:text-lg hover:text-primary hover:underline">Navbar with alpinejs</a> 
                        <a href="#" class="text-sm text-gray-600 hover:underline">Jane Doe</a>
                    </div>
                </div>

                <div class="flex items-center space-x-2 text-gray-400">
                    <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                        <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd" />
                    </svg>
                    
                    <span class="text-sm font-medium">203</span>
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
                        <img class="object-cover w-full h-full" src="https://images.unsplash.com/photo-1502767882403-636aee14f873?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80">
                    </a> 
                    
                    <div class="flex flex-col space-y-1">
                        <a href="#" class="font-semibold text-gray-800 sm:text-lg hover:text-primary hover:underline">Navbar with alpinejs</a> 
                        <a href="#" class="text-sm text-gray-600 hover:underline">Jane Doe</a>
                    </div>
                </div>

                <div class="flex items-center space-x-2 text-gray-400">
                    <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                        <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd" />
                    </svg>
                    
                    <span class="text-sm font-medium">203</span>
                </div>
            </div>
        </div>
    </div>

     <div class="flex justify-center mt-10">
        <button class="flex items-center px-4 py-2 space-x-3 text-gray-600 transition-colors duration-200 transform border rounded-lg hover:bg-gray-100 focus:outline-none">
            <span>Next</span>
            <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
            </svg>
        </button>
    </div>
</section>
@endsection
