@props(['title'])
<div class="block rounded-md shadow-lg bg-white dark:bg-slate-800 border border-gray-300 dark:border-gray-900 w-full">
    <div class="py-3 px-6 border-b border-gray-300 bg-gray-50 dark:bg-slate-800 dark:text-white">
        <h3 class="text-3xl capitalize font-bold">{{ $title }}</h3>
    </div>
    <div class="p-6">
        {{ $slot }}
    </div>
</div>
