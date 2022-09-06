
@if (session('message'))
    <div class="bg-green-100 mb-4 rounded-md p-4">
        <div class="font-bold text-lg text-green-600">
            {{ __('Success') }}
        </div>

        <ul class="mt-3 list-disc list-inside text-md text-green-600">
            {{session('message')}}
        </ul>
    </div>
@endif
