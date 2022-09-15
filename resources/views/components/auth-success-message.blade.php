
@if (session('message'))
    <div class="bg-green-100 mb-4 rounded-md p-4 absolute top-40 left-1/2 transform -translate-x-1/2 z-30">
        <div class="font-bold text-lg text-green-600">
            {{ __('Success') }}
        </div>

        <ul class="mt-3 list-disc list-inside text-md text-green-600">
            {{session('message')}}
        </ul>
    </div>
@endif
