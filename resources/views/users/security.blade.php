<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-3xl text-gray-600 leading-tight">
            {{ __('Security') }}
        </h2>
    </x-slot>
    
    {{-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div>
            </div>
        </div>
    </div> --}}
   
    <x-card class="max-w-2xl " >
            <p class="block text-xl text-gray-600 w-3/4 leading-8">Update your password.</p>
      
        
        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
        <x-auth-success-message class="mb-4"  />

        

        <form method="POST" action="{{ route('profile.security') }}">
            @csrf
            @method('PUT')
           
            <div class="subheadings mt-6 py-4 border-t-2 border-gray-100">

                    <!-- Password -->
                    <div class="mt-4">
                        <x-label for="password" :value="__('password')" />

                        <x-input id="password" class="block mt-1 w-full"
                                        type="password"
                                        name="password"
                                         autocomplete="new-password" />
                    </div>

                    <!-- Confirm Password -->
                    <div class="mt-4">
                        <x-label for="password_confirmation" :value="__('Confirm Password')" />

                        <x-input id="password_confirmation" class="block mt-1 w-full"
                                        type="password"
                                        name="password_confirmation"  />
                    </div>
            
           
        </div>
           

            <div class="flex items-center justify-start mt-4">
               

                <x-button>
                    {{ __('Update') }}
                </x-button>
            </div>
            
        </form>
    </x-card>  
    <x-card class="max-w-2xl ">
        <form method="POST" action="{{ route('profile.destroy') }}">
            <p class="block text-xl text-gray-600 w-3/4 leading-8 ">Delete your account with Rebirth.</p>
            @csrf
            @method('DELETE')
            <x-button class="bg-gray-700 hover:bg-gray-900 mt-4">

                {{ __('Delete profile') }}
            </x-button>
        </form>

    </x-card>
</x-app-layout>
