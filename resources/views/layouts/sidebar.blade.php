<div x-cloak :class="sidebarOpen ? 'block' : 'hidden'" @click="sidebarOpen = false" class="fixed inset-0 z-20 transition-opacity bg-black opacity-50 lg:hidden "></div>
    
<div x-cloak :class="sidebarOpen ? 'translate-x-0 ease-out' : '-translate-x-full ease-in'" class="fixed inset-y-0 left-0 z-30 w-64 overflow-y-auto transition duration-300 transform bg-white lg:translate-x-0 lg:static lg:inset-0 border-r">
    <div class="flex items-center justify-center py-3 border-b ">
        <!-- Logo -->
        <div class="shrink-0 flex items-center  ">
            <a href="{{ route('dashboard') }}">
                <x-application-logo />
            </a>
        </div>
    </div>

    <nav class="mt-10">
        <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
            {{ __('Dashboard') }}
        </x-nav-link>

        <x-nav-link :href="route('profile.index')" :active="request()->routeIs('profile.index')">
            {{ __('Profile') }}
        </x-nav-link>
   
        <x-nav-link :href="route('security')" :active="request()->routeIs('security')">
            {{ __('Security') }}
        </x-nav-link>
    </nav>
</div>