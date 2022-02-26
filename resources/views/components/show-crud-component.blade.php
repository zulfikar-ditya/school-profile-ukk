@props(['routes', 'title', 'page_title', 'model'])
<div class="px-4 md:px-10 mx-auto w-full">
    <nav class="bg-gray-100 dark:bg-slate-800 px-5 py-3 rounded-md w-full">
        <ul class="flex list-none gap-4">
            <li>
                <a href="{{route('admin.index')}}" class="text-blue-500 dark:text-blue-800 font-bold">Dashboard</a>
            </li>
            <li>
                <span class="text-gray-500 dark:text-gray-200 mx-2">/</span>
            </li>
            <li>
                <a href="{{route($routes['index'])}}" class="text-blue-500 dark:text-blue-800 font-bold">{{Str::headline($page_title)}}</a>
            </li>
            <li>
                <span class="text-gray-500 dark:text-gray-200 mx-2">/</span>
            </li>
            <li class="text-gray-500 dark:text-gray-300">
                <a href="{{route($routes['show'], $model)}}">
                    {{Str::headline($title)}}
                </a>
            </li>
        </ul>
    </nav>
    <x-card :title="Str::headline($title)">
        <div class="flex flex-col">
            <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="overflow-x-auto">
                        <table class="min-w-full">
                            <thead class="bg-gray-800 dark:bg-gray-900 text-white">
                                <tr class="text-left">
                                    <th class=""></th>
                                    <th class=""></th>
                                </tr>
                            </thead>
                            {{$slot}}
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <x-link-amber :link="route($routes['edit'], $model)" :id="'edit'">Edit</x-link-amber>
    </x-card>
</div>