<div class="flex flex-col space-y-2 lg:space-y-0 lg:flex-row lg:space-x-6 xl:space-x-8 lg:items-center">
    <a class="text-primary hover:underline" href="/">Home</a>
    <a class="text-gray-500 hover:text-primary hover:underline" href="/components">Components</a>
    <a class="text-gray-500 hover:text-primary hover:underline" href="#">Featured</a>
    <a class="text-gray-500 hover:text-primary hover:underline" href="#">Blog</a>
    <a class="text-gray-500 hover:text-primary hover:underline" href="#">Cheatsheet</a>
</div>

<div class="flex flex-col space-y-4 lg:space-y-0 lg:flex-row lg:items-center lg:space-x-4">
    <button class="flex justify-center py-2 bg-gray-100 rounded-md lg:bg-transparent lg:p-2 hover:bg-gray-100 focus:bg-gray-100 focus:outline-none">
        <svg class="w-5 h-5 text-gray-500" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" clip-rule="evenodd" />
        </svg>
    </button>
    
    <a href="#" class="px-4 py-2 text-sm font-semibold text-center text-white rounded-md bg-primary hover:bg-teal-300">
        Submit new component
    </a>

    <div class="relative" @mouseover="dropdown = true" @mouseover.away="dropdown = false"  x-data="{ dropdown: true }">
        <!-- Dropdown toggle button -->
        <button class="flex items-center justify-center space-x-2 focus:outline-none">
            <img class="object-cover w-8 h-8 border-2 rounded-full border-primary lg:w-10 lg:h-10 " src="https://images.unsplash.com/photo-1502767882403-636aee14f873?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80" alt="avatar">
            <span class="font-medium text-gray-800 lg:hidden">Jane Doe</span>
        </button>

        <!-- Dropdown menu -->
        <div
            x-show="dropdown" 
            x-transition:enter="transition ease-out duration-100 transform"
            x-transition:enter-start="opacity-0 scale-95"
            x-transition:enter-end="opacity-100 scale-100"
            x-transition:leave="transition ease-in duration-75 transform"
            x-transition:leave-start="opacity-100 scale-100"
            x-transition:leave-end="opacity-0 scale-95"
            class="absolute right-0 z-20 w-48 py-1 mt-2 bg-white border border-gray-100 rounded-md shadow-xl dark:bg-gray-800">
            <a href="#" class="block px-4 py-2 text-sm text-gray-700 capitalize transition-colors duration-200 transform dark:text-gray-300 hover:bg-primary hover:text-white dark:hover:text-white">
                your profile
            </a>

            <a href="#" class="block px-4 py-2 text-sm text-gray-700 capitalize transition-colors duration-200 transform dark:text-gray-300 hover:bg-primary hover:text-white dark:hover:text-white">
                Settings
            </a>
            <hr>
            <a href="#" class="block px-4 py-2 text-sm text-gray-700 capitalize transition-colors duration-200 transform dark:text-gray-300 hover:bg-primary hover:text-white dark:hover:text-white">
                Log Out
            </a>
        </div>
    </div>
</div>