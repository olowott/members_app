@props(['errors'])

@if ($errors->any())
<div class="bg-red-100 mb-4 rounded-md p-4">
    <div class="font-bold text-lg text-red-600">
            {{ __('Whoops! Something went wrong.') }}
        </div>

        <ul class="mt-3 list-disc list-inside text-sm text-red-600">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
