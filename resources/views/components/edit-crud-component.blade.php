@props(['routes', 'title', 'page_title', 'model'])
<div class="px-4 md:px-10 mx-auto w-full">
    <nav class="bg-white dark:bg-slate-800 px-5 py-3 rounded-md w-full mb-5">
        <ul class="flex list-none gap-4">
            <li>
                <a href="{{route('admin.index')}}" class="text-blue-500 dark:text-blue-800 font-bold">Dashboard</a>
            </li>
            <li>
                <span class="text-gray-500 dark:text-gray-300 mx-2">/</span>
            </li>
            <li>
                <a href="{{route($routes['index'])}}" class="text-blue-500 dark:text-blue-800 font-bold">{{Str::headline($page_title)}}</a>
            </li>
            <li>
                <span class="text-gray-500 dark:text-gray-300 mx-2">/</span>
            </li>
            <li>
                <a href="{{route($routes['show'], $model)}}" class="text-blue-500 dark:text-blue-800 font-bold">
                    Show {{Str::headline($title)}}
                </a>
            </li>
            <li>
                <span class="text-gray-500 dark:text-gray-200 mx-2">/</span>
            </li>
            <li>
                <a href="{{route($routes['index'])}}" class="">{{Str::headline($title)}}</a>
            </li>
        </ul>
    </nav>
    <x-card :title="Str::headline($title)">
        {{$slot}}
    </x-card>
</div>