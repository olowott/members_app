<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
            <p 
            class="block text-lg leading-5 text-gray-600 w-3/4 mx-auto text-center">Kindly read and acquaint yourself with the  <a class="text-fuchsia-500" target="_blank" href="https://rebirthrwc.org/join-rebirth/rebirthrwc-guidelines/">Membership guidelines</a> before you fill the form </p>
        </x-slot>
        
        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="subheadings mt-6 py-4 ">
                <h3 class="text-xl font-semibold text-fuchsia-500">Personal Information</h3>
                <div class="grid grid-cols-1 gap-6 mt-2 sm:grid-cols-2">
                    <!-- Name -->
                    <div >
                        <x-label for="name" :value="__('First Name')" />
        
                        <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
                    </div>
        
                    <!-- last Name -->
                    <div >
                        <x-label for="last_name" :value="__('Last Name')" />
        
                        <x-input id="last_name" class="block mt-1 w-full" type="text" name="last_name" :value="old('last_name')" required autofocus />
                    </div>
        
                    <!-- Phone -->
                    <div class="mt-4">
                        <x-label for="phone" :value="__('Phone')" />
        
                        <x-input id="phone" class="block mt-1 w-full" type="text" name="phone" :value="old('phone')" required autofocus />
                    </div>
        
                    <!-- DOB -->
                    <div class="mt-4">
                        <x-label for="dob" :value="__('Date of Birth')"  />
        
                        <x-input id="dob" class="block mt-1 w-full" type="date" name="dob" :value="old('dob')" required autofocus />
                    </div>
                    <!-- Occupation -->
                    <div class="mt-4">
                        <x-label for="occupation" :value="__('Occupation')" />
        
                        <x-input id="occupation" class="block mt-1 w-full" type="text" name="occupation" :value="old('occupation')" required autofocus />
                    </div>
        
                      <!-- !!!Marital statusSelect -->
                      <div class="mt-4">
                        <x-label for="marital_status" :value="__('Marital Status')" />
        
                       
                        <select class="form-select rounded-md  mt-1 shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full ">
                            @foreach ($marital_statuses as $marital_status)
                                <option value="{{$marital_status->id}}">{{$marital_status->name}} </option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
          
            <div class="subheadings mt-6 py-4 border-t-2 border-gray-100">
                <h3 class="text-xl font-semibold text-fuchsia-500">Location Information</h3>
                <div class="grid grid-cols-1 gap-6 mt-2 sm:grid-cols-3">
            <!-- Address -->
            <div class="mt-4">
                <x-label for="address" :value="__('Address')" />

                <x-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address')" required autofocus />
            </div>

            <!-- State -->
            <div class="mt-4">
                <x-label for="state" :value="__('State')" />

                <x-input id="state" class="block mt-1 w-full" type="text" name="state" :value="old('state')" required autofocus />
            </div>

            <!-- !!!Country Select -->
            <div class="mt-4">
                <x-label for="country" :value="__('Country')" />

               
                <select class="form-select rounded-md  mt-1 shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full ">
                    @foreach ($countries as $country)
                        <option value="{{$country->id}}">{{$country->name}} - {{$country->code}}</option>
                    @endforeach
                </select>
            </div>
            </div>
        </div>

        <div class="subheadings mt-6 py-4 border-t-2 border-gray-100">
            <h3 class="text-xl font-semibold text-fuchsia-500">More Rebirth Information</h3>
            <div class="grid grid-cols-1 gap-6 mt-2 sm:grid-cols-3">
            <!-- Membership_year -->
            <div class="mt-4">
                <x-label for="membership_year" :value="__('Membership year( joining Rebirth)')" />

                <x-input id="membership_year" class="block mt-1 w-full" type="text" name="membership_year" :value="old('membership_year')" required autofocus />
            </div>


             <!-- !!!Group Select -->
             <div class="mt-4">
                <x-label for="group" :value="__('Already a Group member?')" />

               
                <select class="form-select rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full ">
                    @foreach ($groups as $group)
                        <option value="{{$group->id}}">{{$group->name}} </option>
                    @endforeach
                </select>
            </div>

             <!-- !!!Hduhau Select -->
             <div class="mt-4">
                <x-label for="hduhau" :value="__('How do you hear about us?')" />

               
                <select class="form-select rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full ">
                    @foreach ($hduhaus as $hduhau)
                        <option value="{{$hduhau->id}}">{{$hduhau->name}} </option>
                    @endforeach
                </select>
            </div>
            </div>
        </div>
        <div class="subheadings mt-6 py-4 border-t-2 border-gray-100">
            <h3 class="text-xl font-semibold text-fuchsia-500">Church Information</h3>
            <div class="grid grid-cols-1 gap-6 mt-2 sm:grid-cols-2">
            <!-- Church -->
            <div class="mt-4">
                <x-label for="church" :value="__('Church')" />

                <x-input id="church" class="block mt-1 w-full" type="text" name="church" :value="old('church')" required autofocus />
            </div>

            <!-- pastor_name -->
            <div class="mt-4">
                <x-label for="pastor_name" :value="__('Pastor Name')" />

                <x-input id="pastor_name" class="block mt-1 w-full" type="text" name="pastor_name" :value="old('pastor_name')" required autofocus />
            </div>
            </div>
            </div>
           
            
            <div class="subheadings mt-6 py-4 border-t-2 border-gray-100">
                <h3 class="text-xl font-semibold text-fuchsia-500">Access Information(access more information for only rebirth members )</h3>
                <div class="grid grid-cols-1 gap-6 mt-2 sm:grid-cols-3">

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
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
            </div>
            <p class=" my-4 ">By clicking "Register" below, you acknowledge that you have read and understood, and agree to Our Term & Conditions and Privacy Policy.</p>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
            
        </form>
    </x-auth-card>
</x-guest-layout>
