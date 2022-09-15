<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-3xl text-gray-600 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

        
    <!-- Validation Errors -->
    <x-auth-validation-errors class="mb-4" :errors="$errors" />
    
    {{-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div>
            </div>
        </div>
    </div> --}}
   
     <div class="max-w-7xl mt-8 mx-auto sm:px-6 lg:px-8 bg-white p-6 rounded-xl shadow-lg" >
            <p 
            class="block text-lg text-gray-600 w-3/4 mx-auto text-center leading-8">Thank you for registrating with Rebirth Ministry,  Do again read our <a class="text-fuchsia-500" target="_blank" href="https://rebirthrwc.org/join-rebirth/rebirthrwc-guidelines/">Membership guidelines</a></p>

            <p 
            class="block text-lg text-gray-600 w-3/4 mx-auto text-center leading-8">For now you can update your information.</p>
      
        
      
    </div>  
</x-app-layout>
