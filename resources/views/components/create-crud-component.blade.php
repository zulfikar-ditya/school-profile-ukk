@props(['title', 'page_title', 'routes', 'files', 'model'])
<div class="px-4 md:px-10 mx-auto w-full">
    <nav class="bg-white dark:bg-slate-800 px-5 py-3 rounded-md w-full mb-5">
        <ul class="flex list-none gap-4">
            <li>
                <a href="{{route('admin.index')}}" class="text-blue-500 dark:text-blue-400 font-bold">Dashboard</a>
            </li>
            <li>
                <span class="text-gray-500 dark:text-gray-200 mx-2">/</span>
            </li>
            <li>
                <a href="{{route($routes['index'])}}" class="text-blue-500 dark:text-blue-400 font-bold">{{Str::headline($title)}}</a>
            </li>
            <li>
                <span class="text-gray-500 dark:text-gray-200 mx-2">/</span>
            </li>
            <li class="text-gray-500 dark:text-gray-300">
                <a href="{{route($routes['create'])}}">
                    {{Str::headline($page_title)}}
                </a>
            </li>
        </ul>
    </nav>
    <x-card :title="Str::headline($page_title)">
        {{$slot}}
    </x-card>
</div>