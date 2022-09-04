<div class="flex-col w-full md:flex md:flex-row md:min-h-screen bg-blue-50">
    <div @click.away="open = false" class="flex flex-col flex-shrink-0 w-full text-gray-700 bg-white md:w-64" x-data="{ open: false }">
        <div class="flex flex-row items-center justify-between flex-shrink-0 px-8 py-4">
            <div class="shrink-0 flex items-center">
                <a href="{{ route('dashboard') }}">
                    <x-application-logo class="block h-10 w-auto fill-current text-gray-600" />
                </a>
            </div>
            <button class="rounded-lg md:hidden focus:outline-none focus:shadow-outline" @click="open = !open">
                <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
                    <path x-show="!open" fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                    <path x-show="open" fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>

        <div class="mt-8 sm:mt-0">
   <nav :class="{'block': open, 'hidden': !open}" class="flex-grow py-6 px-4 pb-4 md:block md:pb-0 md:overflow-y-auto">
            <a class="block px-4 py-2 mt-2 text-sm font-semibold text-gray-700 bg-pink-300 rounded-lg  hover:text-gray-700 focus:text-gray-700 hover:bg-pink-300 focus:bg-pink-300 focus:outline-none focus:shadow-outline" href="#">Dashboard</a>
            <a class="block px-4 py-2 mt-2 text-sm font-semibold text-gray-700 bg-transparent rounded-lg   hover:text-gray-700 focus:text-gray-700 hover:bg-pink-300 focus:bg-pink-300 focus:outline-none focus:shadow-outline" href="#">Profile</a>
            <a class="block px-4 py-2 mt-2 text-sm font-semibold text-gray-700 bg-transparent rounded-lg   hover:text-gray-700 focus:text-gray-700 hover:bg-pink-300 focus:bg-pink-300 focus:outline-none focus:shadow-outline" href="#">About</a>
            <a class="block px-4 py-2 mt-2 text-sm font-semibold text-gray-700 bg-transparent rounded-lg   hover:text-gray-700 focus:text-gray-700 hover:bg-pink-300 focus:bg-pink-300 focus:outline-none focus:shadow-outline" href="#">Contact</a>
        
        </nav>
</div>