@props(['active'])

@php
// OLD STYLING 
// $classes = ($active ?? false)
//             ? 'inline-flex items-center px-1 pt-1 border-b-2 border-fuchsia-400 text-sm font-medium leading-5 text-gray-900 focus:outline-none focus:border-fuchsia-700 transition duration-150 ease-in-out'
//             : 'inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out';

// {{-- OLD STLYING  --}}
$classes = ($active ?? false)
            ? 'flex items-center px-6 py-2 mt-4 text-gray-600 bg-pink-200 bg-opacity-25'
            : 'flex items-center px-6 py-2 mt-4 text-gray-500 hover:bg-pink-200 hover:bg-opacity-25 hover:text-gray-700';
@endphp
{{-- NEW STYLE FOR SIDEBAR  --}}
<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
