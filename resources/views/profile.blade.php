<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-3xl text-gray-600 leading-tight">
            {{ __('Profile') }}
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
   
    <div class="max-w-4xl mt-8  mx-auto sm:px-6 lg:px-8 bg-white p-6 rounded-xl shadow-lg" >
            <p  class="block text-xl text-gray-600 w-3/4 leading-8">Update your Information</p>
      
        
        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="subheadings mt-6 py-4 ">
                <h2 class="text-2xl font-semibold text-fuchsia-500">Personal Information</h2>
                <div class="grid grid-cols-1 gap-6 mt-2 sm:grid-cols-2">
                    <!-- Name -->
                    <div >
                        <x-label for="name" :value="__('First Name')" />
        
                        <x-input id="name" class="block mt-1 w-full" type="text" name="name" required autofocus value="{{ Auth::user()->name }}" />
                    </div>
        
                    <!-- last Name -->
                    <div >
                        <x-label for="last_name" :value="__('Last Name')" />
        
                        <x-input id="last_name" class="block mt-1 w-full" type="text" name="last_name"  required autofocus value="{{ Auth::user()->last_name }}" />
                    </div>
        
                    <!-- Phone -->
                    <div class="mt-4">
                        <x-label for="phone" :value="__('Phone')" />
        
                        <x-input id="phone" class="block mt-1 w-full" type="text" name="phone" required autofocus value="{{ Auth::user()->phone }}" />
                    </div>
        
                    <!-- DOB -->
                    <div class="mt-4">
                        <x-label for="DOB" :value="__('Date of Birth')"  />
        
                        <x-input id="DOB" class="block mt-1 w-full" type="date" name="DOB"  required autofocus  value="{{ Auth::user()->DOB }}"/>
                    </div>
                    <!-- Occupation -->
                    <div class="mt-4">
                        <x-label for="occupation" :value="__('Occupation')" />
        
                        <x-input id="occupation" class="block mt-1 w-full" type="text" name="occupation" required autofocus value="{{ Auth::user()->occupation }}" />
                    </div>
        
                      <!-- !!!Marital statusSelect -->
                      <div class="mt-4">
                        <x-label for="marital_status" :value="__('Marital Status')" />
        
                       
                        <select class="form-select rounded-md  mt-1 shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full " name="marital_status_id" id="marital_status_id" value="{{ Auth::user()->marital_status_id }}">
                            {{-- @foreach ($marital_statuses as $marital_status)
                                <option value="{{$marital_status->id}}">{{$marital_status->name}} </option>
                            @endforeach --}}
                        </select>
                    </div>
                </div>
            </div>
          
            <div class="subheadings mt-6 py-4 border-t-2 border-gray-100">
                <h2 class="text-2xl font-semibold text-fuchsia-500">Location Information</h2>
              
            <!-- Address -->
            <div class="mt-4">
                <x-label for="address" :value="__('Address')" />

                <x-input id="address" class="block mt-1 w-full" type="text" name="address"  required autofocus value="{{ Auth::user()->address }}" />
            </div>
            <div class="grid grid-cols-1 gap-6 mt-2 sm:grid-cols-2">
            <!-- State -->
            <div class="mt-4">
                <x-label for="state" :value="__('State')" />

                <x-input id="state" class="block mt-1 w-full" type="text" name="state" required autofocus value="{{ Auth::user()->state }}" />
            </div>

            <!-- !!!Country Select -->
            <div class="mt-4">
                <x-label for="country" :value="__('Country')" />

               
                <select class="form-select rounded-md  mt-1 shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full " name="country_id" id="country_id" value="{{ Auth::user()->country_id }}">
                    {{-- @foreach ($countries as $country)
                        <option value="{{$country->id}}">{{$country->name}} - {{$country->code}}</option>
                    @endforeach --}}
                </select>
            </div>
            </div>
        </div>

      
        <div class="subheadings mt-6 py-4 border-t-2 border-gray-100">
            <h2 class="text-2xl font-semibold text-fuchsia-500">Church Information</h2>
                <div class="grid grid-cols-1 gap-6 mt-2 sm:grid-cols-2">
                    <!-- Church -->
                    <div class="mt-4">
                        <x-label for="church" :value="__('Church')" />

                        <x-input id="church" class="block mt-1 w-full" type="text" name="church"  required autofocus value="{{ Auth::user()->church }}" />
                    </div>

                    <!-- pastor_name -->
                    <div class="mt-4">
                        <x-label for="pastor_name" :value="__('Pastor Name')" />

                        <x-input id="pastor_name" class="block mt-1 w-full" type="text" name="pastor_name" required autofocus value="{{ Auth::user()->pastor_name }}"/>
                    </div>
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
