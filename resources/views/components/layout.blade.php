<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="app.css" />
    <script src="//unpkg.com/alpinejs" defer></script>
    <script src="https://cdn.tailwindcss.com"></script>
    
    <style type="text/tailwindcss">
       /* CUSTOM  */

h2{
    @apply text-lg font-bold text-gray-700 my-4;
}

p{
    @apply mb-6;
}

/* COMPONENTS STYLES  */

.input-full{
    @apply block w-full px-4 py-2 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-300 rounded-md focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40;
}

.label{
    @apply block mb-2 text-sm text-gray-600;
}

.link-small{
    @apply text-sm text-fuchsia-400 focus:text-fuchsia-500 hover:text-fuchsia-500 hover:underline;
}

.button-full{
    @apply w-full px-4 py-2 tracking-wide text-white transition-colors duration-200 transform bg-fuchsia-500 rounded-md hover:bg-fuchsia-400 focus:outline-none focus:bg-fuchsia-400 focus:ring focus:ring-fuchsia-300 focus:ring-opacity-50;
}
        
      </style>
    <title>Rebirth Members App</title>
  </head>
  <body>
    <main class="bg-white">
        <x-notification />
{{ $slot }}
    </main>
</body>
</html>