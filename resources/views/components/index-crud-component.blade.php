@props(['routes', 'title', 'dataTables', 'model'])
<div class="px-4 md:px-10 mx-auto w-full">
    <nav class="bg-white dark:bg-slate-800 px-5 py-3 rounded-md w-full mb-5">
        <ul class="flex list-none gap-4">
            <li>
                <a href="{{route('admin.index')}}" class="text-blue-500 dark:text-blue-400 font-bold">Dashboard</a>
            </li>
            <li>
                <span class="text-gray-500 dark:text-gray-200 mx-2">/</span>
            </li>
            <li class="text-gray-500 dark:text-gray-300">
                <a href="{{route($routes['index'])}}">
                    {{Str::headline($title)}}
                </a>
            </li>
        </ul>
    </nav>
    <x-card :title="Str::headline($title)">
        <x-link-indigo :link="route($routes['create'])" :id="'create'">Create</x-link-indigo>
        <div class="flex justify-start lg:justify-end my-5">
            <div class="w-full lg:w-6/12">
                <form action="" method="get" >
                    <div class="flex flex-wrap">
                        <div class="w-full lg:w-1/2 py-2 pz-0 lg:py-0 lg:px-2">
                            <label for="" class="form-label mb-2 font-bold">Search By <span class="text-cyan-500">*</span></label>
                            <select class="form-control relative flex-auto min-w-0 block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" name="field"> 
                                <option value="" selected>------</option>
                                @foreach ($dataTables as $item)
                                    <option value="{{$item}}" @isset($_REQUEST['field']) {{$item == $_REQUEST['field'] ? 'selected' : ''}} @endisset>{{Str::headline($item)}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="w-full lg:w-1/2 py-2 pz-0 lg:py-0 lg:px-2">
                            <label for="" class="form-label mb-2 font-bold">Search <span class="text-cyan-500">*</span></label>
                            <div class="flex">
                                <input type="search"
                                    class="form-control relative flex-auto min-w-0 block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                    placeholder="Search..."
                                    name="s"
                                    value="@if (isset($_REQUEST['s']) != null){{$_REQUEST['s']}}@endif"
                                    >
                                <x-btn-indigo :type="'submit'" :id="'search'"> 
                                    <svg aria-hidden="true" focusable="false" data-prefix="fas"
                                        data-icon="search" class="w-4" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <path fill="currentColor"
                                            d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z">
                                        </path>
                                    </svg> 
                                </x-btn-indigo>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        {{$slot}}
    </x-card>
</div>