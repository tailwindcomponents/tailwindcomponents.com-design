<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="referrer" content="always">
        <link rel="canonical" href="{{ $page->getUrl() }}">

        <meta name="description" content="{{ $page->description }}">

        <title>{{ $page->title }}</title>

        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap">
        
        <link rel="stylesheet" href="{{ mix('css/app.css', 'assets/build') }}">

        <script src="{{ mix('js/app.js', 'assets/build') }}"></script>
    </head>
    <body class="font-roboto">
        <div class="dark:bg-gray-900">
            <header class="border-b dark:border-gray-700" x-data="{ isOpen: false }">
                <div class="container px-4 py-5 mx-auto space-y-4 lg:space-y-0 lg:flex lg:items-center lg:justify-between lg:space-x-10">
                    <div class="flex justify-between">
                        <div class="text-gray-700 dark:text-gray-200">
                            @include('_layouts.logo')
                        </div>
    
                        <div class="flex items-center space-x-2 lg:hidden">
                            <button @click="isOpen = !isOpen" class="p-1 rounded-md hover:bg-gray-100 dark:hover:bg-gray-800 focus:bg-gray-100 dark:focus:bg-gray-800 focus:outline-none">
                                <svg class="w-6 h-6 text-gray-500 dark:text-gray-300" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                        clip-rule="evenodd" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    
                    <div x-show="isOpen" 
                        x-transition:enter="transition ease-out duration-100 transform"
                        x-transition:enter-start="opacity-0 scale-95"
                        x-transition:enter-end="opacity-100 scale-100"
                        x-transition:leave="transition ease-in duration-75 transform"
                        x-transition:leave-start="opacity-100 scale-100"
                        x-transition:leave-end="opacity-0 scale-95"
                        class="flex flex-col space-y-4 lg:hidden"
                        >
                        @include('_layouts.nav')
                    </div>
    
                    <div class="hidden lg:flex lg:flex-row lg:items-center lg:justify-between lg:flex-1 lg:space-x-2">
                        @include('_layouts.nav')
                    </div>
                </div>
            </header>
    
            <main>
                @yield('body')
            </main>
    
            @include('_layouts.footer')
        </div>
    </body>
</html>
