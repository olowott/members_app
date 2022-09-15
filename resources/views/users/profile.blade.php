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

    <x-card class="max-w-4xl ">

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
        <x-auth-success-message />


        <p class="block text-2xl font-medium text-gray-600 w-3/4">Your Information</p>

        <div class="subheadings mt-4 py-4 ">
            <h2 class="text-2xl font-semibold text-pink-500">Personal Information</h2>
            <div class="grid grid-cols-1 gap-4 mt-2 sm:grid-cols-2">
                <!-- Name -->
                <div class="mt-2">
                    <span class="mt-1 font-medium text-gray-500">Name</span>
                    <h3 class="text-lg font-medium text-gray-700">{{ $userprofile->name }}, {{ $userprofile->last_name }}
                    </h3>
                </div>


                <!-- Phone -->
                <div class="mt-2">
                    <span class="mt-1 font-medium text-gray-500">Phone No(WhatsApp)</span>
                    <h3 class="text-lg font-medium text-gray-700">{{ $userprofile->phone }}</h3>
                </div>
                <!-- DOB -->
                <div class="mt-2">
                    <span class="mt-1 font-medium text-gray-500">Date of Birth</span>
                    <h3 class="text-lg font-medium text-gray-700">{{ $userprofile->DOB }}</h3>
                </div>
                <!-- Occupation -->
                <!-- DOB -->
                <div class="mt-2">
                    <span class="mt-1 font-medium text-gray-500">Occupation</span>
                    <h3 class="text-lg font-medium text-gray-700">{{ $userprofile->occupation }}</h3>
                </div>
                <!-- !!!Marital statusSelect -->
                <div class="mt-2">
                    <span class="mt-1 font-medium text-gray-500">Marital Status</span>
                    <h3 class="text-lg font-medium text-gray-700">{{ $selectedMarital_status }}</h3>
                </div>
                <!-- Address -->
                <div class="mt-2">
                    <span class="mt-1 font-medium text-gray-500">Address</span>
                    <h3 class="text-lg font-medium text-gray-700">{{ $userprofile->address }} ,
                        {{ $userprofile->state }}, {{ $selectedCountry }}</h3>
                </div>
            </div>
        </div>


        <div class="subheadings mt-4 py-4 border-t-2 border-gray-100">
            <h2 class="text-2xl font-semibold text-pink-500">Church Information</h2>
            <div class="grid grid-cols-1 gap-4 mt-2 sm:grid-cols-2">
                <!-- Church -->
                <div class="mt-2">
                    <span class="mt-1 font-medium text-gray-500">Church</span>
                    <h3 class="text-lg font-medium text-gray-700">{{ $userprofile->church }}</h3>
                </div>
                <!-- pastor_name -->
                <div class="mt-2">
                    <span class="mt-1 font-medium text-gray-500">Pastor Name</span>
                    <h3 class="text-lg font-medium text-gray-700">{{ $userprofile->pastor_name }}</h3>
                </div>
            </div>

        </div>
        <div class="subheadings mt-4 py-4 border-t-2 border-gray-100">
            <h2 class="text-2xl font-semibold text-pink-500">Rebirth Information</h2>
            <div class="grid grid-cols-1 gap-4 mt-2 sm:grid-cols-2">
                <!-- Group -->
                <div class="mt-2">
                    <span class="mt-1 font-medium text-gray-500">Rebirth Group</span>
                    <h3 class="text-lg font-medium text-gray-700">{{ $selectedGroup }}</h3>
                </div>
                <!-- Hduhau -->
                <div class="mt-2">
                    <span class="mt-1 font-medium text-gray-500">How did you hear about us?</span>
                    <h3 class="text-lg font-medium text-gray-700">{{ $selectedHduhau }}</h3>
                </div>
            </div>

        </div>
        {{-- Buttons --}}
        <div class="flex items-center justify-start mt-4 gap-2">
            <x-button>
                <a href="/profile/edit">Edit profile</a>
            </x-button>

          
        </div>
    </x-card>


    </div>
</x-app-layout>
