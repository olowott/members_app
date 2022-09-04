@if(session()->has('message')) 
<div x-data="{ show: true }" x-init="setTimeout(()=> show = false, 3000)" x-show="show"  
    class="flex w-full max-w-sm overflow-hidden bg-white rounded-lg shadow-md">
    <div class="px-4 py-2 -mx-3 z-30">
        <div class="mx-3">
  <p class="font-semibold text-gray-600">{{ session ('message') }}</p>
        </div>
    </div>
</div>
@endif