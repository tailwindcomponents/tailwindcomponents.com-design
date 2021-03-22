@extends('_layouts.master')

@section('body')
<section class="container px-4 py-10 mx-auto">
    <div class="flex items-center justify-center max-w-3xl mx-auto text-gray-800 bg-gray-100 rounded-md h-28">Ads</div>

    <div class="mt-10">
        <div class="flex flex-col space-y-4 lg:space-y-0 lg:flex-row lg:items-center lg:justify-between">
            <div>
                <span class="font-light text-gray-400 ">tailwindcss@2.0.3</span>

                <div class="flex flex-col mt-2 space-y-1 sm:flex-row sm:space-y-0 sm:items-center sm:space-x-4">
                    <h3 class="text-2xl font-semibold text-gray-800 ">jetstream dark mode</h3>

                    <a href="#" class="text-gray-400 hover:underline">By Khatabwedaa</a>
                </div>

                <p class="mt-2 text-gray-500 lg:max-w-xl">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae velit similique veritatis accusamus maiores.</p>
            </div>
            
            <div class="flex items-center justify-center space-x-4">
                <button class="flex items-center px-4 py-2 space-x-3 text-gray-600 transition-colors duration-200 transform border rounded-lg hover:bg-gray-100 focus:outline-none">
                    <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M9 2a2 2 0 00-2 2v8a2 2 0 002 2h6a2 2 0 002-2V6.414A2 2 0 0016.414 5L14 2.586A2 2 0 0012.586 2H9z" />
                        <path d="M3 8a2 2 0 012-2v10h8a2 2 0 01-2 2H5a2 2 0 01-2-2V8z" />
                    </svg>
                    <span>Fork</span>
                </button>

                <button class="flex items-center px-4 py-2 space-x-3 text-gray-600 transition-colors duration-200 transform border rounded-lg hover:bg-gray-100 focus:outline-none">
                    <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd" />
                    </svg>
                    <span>Favorite</span>
                </button>
            </div>
        </div>
    </div>

    <div class="mt-8 bg-gray-500 rounded-md" style="height: 600px;"></div>

    <div class="flex flex-col mt-6 space-y-8 md:flex-row md:space-y-0 md:justify-between md:items-center">
        <div class="flex items-center space-x-4">
            <a href="#" class="flex-shrink-0 w-12 h-12 overflow-hidden rounded-full ">
                <img class="object-cover w-full h-full" src="https://images.unsplash.com/photo-1531427186611-ecfd6d936c79?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=2134&q=80">
            </a> 

            <div>
                <div class="flex items-center space-x-2">
                    <a class="text-xl font-medium text-gray-800 hover:underline" href="#">Scott Wind</a>
                    <span class="text-sm text-gray-500">32 Components</span>
                </div>

                <a href="#" class="flex items-center mt-1 space-x-2 text-gray-500 hover:underline">
                    <span>Profile On</span>

                    <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12.026 2C7.13295 1.99937 2.96183 5.54799 2.17842 10.3779C1.395 15.2079 4.23061 19.893 8.87302 21.439C9.37302 21.529 9.55202 21.222 9.55202 20.958C9.55202 20.721 9.54402 20.093 9.54102 19.258C6.76602 19.858 6.18002 17.92 6.18002 17.92C5.99733 17.317 5.60459 16.7993 5.07302 16.461C4.17302 15.842 5.14202 15.856 5.14202 15.856C5.78269 15.9438 6.34657 16.3235 6.66902 16.884C6.94195 17.3803 7.40177 17.747 7.94632 17.9026C8.49087 18.0583 9.07503 17.99 9.56902 17.713C9.61544 17.207 9.84055 16.7341 10.204 16.379C7.99002 16.128 5.66202 15.272 5.66202 11.449C5.64973 10.4602 6.01691 9.5043 6.68802 8.778C6.38437 7.91731 6.42013 6.97325 6.78802 6.138C6.78802 6.138 7.62502 5.869 9.53002 7.159C11.1639 6.71101 12.8882 6.71101 14.522 7.159C16.428 5.868 17.264 6.138 17.264 6.138C17.6336 6.97286 17.6694 7.91757 17.364 8.778C18.0376 9.50423 18.4045 10.4626 18.388 11.453C18.388 15.286 16.058 16.128 13.836 16.375C14.3153 16.8651 14.5612 17.5373 14.511 18.221C14.511 19.555 14.499 20.631 14.499 20.958C14.499 21.225 14.677 21.535 15.186 21.437C19.8265 19.8884 22.6591 15.203 21.874 10.3743C21.089 5.54565 16.9181 1.99888 12.026 2Z" fill="currentColor"></path>
                    </svg>
                </a>
            </div>
        </div>

        <div>
            <h4 class="text-lg text-gray-600">Communty Rate</h4>

            <div class="flex items-center mt-1 space-x-3">
                <div class="flex items-center space-x-2">
                    <svg class="w-5 h-5 cursor-pointer text-primary" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                    </svg>

                    <svg class="w-5 h-5 cursor-pointer text-primary" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                    </svg>

                    <svg class="w-5 h-5 cursor-pointer text-primary" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                    </svg>

                    <svg class="w-5 h-5 text-gray-400 cursor-pointer" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                    </svg>

                    <svg class="w-5 h-5 text-gray-400 cursor-pointer" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                    </svg>
                </div>

                <span class="text-2xl font-semibold text-gray-700">4.5</span>

                <span class="text-gray-500">from 23 ratings</span>
            </div>
        </div>
    </div>

    <div class="mt-12">
        <h3 class="text-2xl font-semibold text-gray-800">Related components</h3>

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

        <div class="flex justify-center mt-10">
            <a href="#" class="px-4 py-2 mt-2 text-gray-600 transition-colors duration-200 transform border rounded-lg hover:bg-gray-100 focus:outline-none">
                See more components
            </a>
        </div>
    </div>
</section>
@endsection
