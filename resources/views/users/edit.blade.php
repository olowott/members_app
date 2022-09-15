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
        <p class="block text-xl text-gray-600 w-3/4 leading-8">Update your Information</p>


        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
        <x-auth-success-message />

        <form method="POST" action="{{ route('profile.update') }}">
            @csrf
            @method('PUT')
            <div class="subheadings mt-6 py-4 ">
                <h2 class="text-2xl font-semibold text-pink-500">Personal Information</h2>
                <!-- Email -->
                <div class="grid grid-cols-1 gap-6 mt-2 sm:grid-cols-2">
                    <div>
                        <x-label for="email" :value="__('Email')" />

                        <x-input id="email" class="block mt-1 w-full" type="text" email="email" name="email"
                            required autofocus value="{{ $userprofile->email }}" />
                    </div>
                </div>

                <div class="grid grid-cols-1 gap-6 mt-2 sm:grid-cols-2">
                    <!-- Name -->
                    <div class="mt-4">
                        <x-label for="name" :value="__('First Name')" />

                        <x-input id="name" class="block mt-1 w-full" type="text" name="name" required
                            autofocus value="{{ $userprofile->name }}" />
                    </div>

                    <!-- last Name -->
                    <div class="mt-4">
                        <x-label for="last_name" :value="__('Last Name')" />

                        <x-input id="last_name" class="block mt-1 w-full" type="text" name="last_name" required
                            autofocus value="{{ $userprofile->last_name }}" />
                    </div>

                    <!-- Phone -->
                    <div class="mt-4">
                        <x-label for="phone" :value="__('Phone')" />

                        <x-input id="phone" class="block mt-1 w-full" type="text" name="phone" required
                            autofocus value="{{ $userprofile->phone }}" />
                    </div>

                    <!-- DOB -->
                    <div class="mt-4">
                        <x-label for="DOB" :value="__('Date of Birth')" />

                        <x-input id="DOB" class="block mt-1 w-full" type="date" name="DOB" required
                            autofocus value="{{ $userprofile->DOB }}" />
                    </div>
                    <!-- Occupation -->
                    <div class="mt-4">
                        <x-label for="occupation" :value="__('Occupation')" />

                        <x-input id="occupation" class="block mt-1 w-full" type="text" name="occupation" required
                            autofocus value="{{ $userprofile->occupation }}" />
                    </div>

                    <!-- !!!Marital statusSelect -->
                    <div class="mt-4">
                        <x-label for="marital_status" :value="__('Marital Status')" />

                        <select
                            class="form-select rounded-md  mt-1 shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full "
                            name="marital_status_id" id="marital_status_id" value="">
                            @foreach ($marital_statuses as $marital_status)
                                <option value="{{ $marital_status->id }}"
                                    {{ $userprofile->marital_status_id == $marital_status->id ? 'selected' : '' }}>
                                    {{ $marital_status->name }}</option>
                            @endforeach
                        </select>


                    </div>
                </div>
            </div>

            <div class="subheadings mt-6 py-4 border-t-2 border-gray-100">
                <h2 class="text-2xl font-semibold text-pink-500">Location Information</h2>

                <!-- Address -->
                <div class="mt-4">
                    <x-label for="address" :value="__('Address')" />

                    <x-input id="address" class="block mt-1 w-full" type="text" name="address" required autofocus
                        value="{{ $userprofile->address }}" />
                </div>
                <div class="grid grid-cols-1 gap-6 mt-2 sm:grid-cols-2">
                    <!-- State -->
                    <div class="mt-4">
                        <x-label for="state" :value="__('State')" />

                        <x-input id="state" class="block mt-1 w-full" type="text" name="state" required
                            autofocus value="{{ $userprofile->state }}" />
                    </div>

                    <!-- !!!Country Select -->
                    <div class="mt-4">
                        <x-label for="country" :value="__('Country')" />


                        <select
                            class="form-select rounded-md  mt-1 shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full "
                            name="country_id" id="country_id" value="">
                            @foreach ($countries as $country)
                                <option value="{{ $country->id }}"
                                    {{ $userprofile->country_id == $country->id ? 'selected' : '' }}>
                                    {{ $country->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>


            <div class="subheadings mt-6 py-4 border-t-2 border-gray-100">
                <h2 class="text-2xl font-semibold text-pink-500">Church Information</h2>
                <div class="grid grid-cols-1 gap-6 mt-2 sm:grid-cols-2">
                    <!-- Church -->
                    <div class="mt-4">
                        <x-label for="church" :value="__('Church')" />

                        <x-input id="church" class="block mt-1 w-full" type="text" name="church" required
                            autofocus value="{{ $userprofile->church }}" />
                    </div>

                    <!-- pastor_name -->
                    <div class="mt-4">
                        <x-label for="pastor_name" :value="__('Pastor Name')" />

                        <x-input id="pastor_name" class="block mt-1 w-full" type="text" name="pastor_name" required
                            autofocus value="{{ $userprofile->pastor_name }}" />
                    </div>
                </div>

            </div>
            <div class="subheadings mt-4 py-4 border-t-2 border-gray-100">
                <h2 class="text-2xl font-semibold text-pink-500">Rebirth Information</h2>
                <div class="grid grid-cols-1 gap-4 mt-2 sm:grid-cols-2">
                    <!-- Group -->
                    <div class="mt-4">
                        <x-label for="group" :value="__('Group')" />

                        <select
                            class="form-select rounded-md  mt-1 shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full "
                            name="group_id" id="group_id" value="">
                            @foreach ($groups as $group)
                                <option value="{{ $group->id }}"
                                    {{ $userprofile->group_id == $group->id ? 'selected' : '' }}>
                                    {{ $group->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <!-- hduhau -->
                    <div class="mt-4">
                        <x-label for="hdauhau" :value="__('How did you hear about us?')" />

                        <select
                            class="form-select rounded-md  mt-1 shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full "
                            name="hduhau_id" id="hduhau_id" value="">
                            @foreach ($hduhaus as $hduhau)
                                <option value="{{ $hduhau->id }}"
                                    {{ $userprofile->hduhau_id == $hduhau->id ? 'selected' : '' }}>
                                    {{ $hduhau->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="flex items-center justify-start mt-4">


                <x-button>
                    {{ __('Update profile') }}
                </x-button>
            </div>
        </form>

    </x-card>
</x-app-layout>
