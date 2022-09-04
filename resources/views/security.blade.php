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
   
    <div class="max-w-2xl mt-8 mx-auto sm:px-6 lg:px-8 bg-white p-6 rounded-xl shadow-lg" >
            <p class="block text-xl text-gray-600 w-3/4 leading-8">Update your access information.</p>
      
        
        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

           
            <div class="subheadings mt-6 py-4 border-t-2 border-gray-100">
             
              

                    <!-- Email Address -->
                    <div class="mt-4">
                        <x-label for="email" :value="__('Email')" />

                        <x-input id="email" class="block mt-1 w-full" type="email" name="email" required value="{{ Auth::user()->email }}" />
                    </div>

                    <!-- Password -->
                    <div class="mt-4">
                        <x-label for="password" :value="__('Password')" />

                        <x-input id="password" class="block mt-1 w-full"
                                        type="password"
                                        name="password"
                                        required autocomplete="new-password" />
                    </div>

                    <!-- Confirm Password -->
                    <div class="mt-4">
                        <x-label for="password_confirmation" :value="__('Confirm Password')" />

                        <x-input id="password_confirmation" class="block mt-1 w-full"
                                        type="password"
                                        name="password_confirmation" required />
                    </div>
            
           
        </div>
           

            <div class="flex items-center justify-start mt-4">
               

                <x-button>
                    {{ __('Update') }}
                </x-button>
            </div>
            
        </form>
    </div>  
</x-app-layout>
