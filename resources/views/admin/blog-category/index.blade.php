@extends('admin.base')

@php
    $title = 'blog-category';
@endphp
@section('title', Str::headline($title))

@section('content')
<div class="relative md:pt-32 pb-32 pt-12l w-full">
    <div class="px-4 md:px-10 mx-auto w-full">
        <nav class="bg-gray-100 px-5 py-3 rounded-md w-full">
            <ul class="flex list-none gap-4">
                <li>
                    <a href="{{route('admin.index')}}" class="text-blue-500 font-bold">Dashboard</a>
                </li>
                <li>
                    <span class="text-gray-500 mx-2">/</span>
                </li>
                <li class="text-gray-500">
                    <a href="{{route($routes['index'])}}">
                        {{Str::headline($title)}}
                    </a>
                </li>
            </ul>
        </nav>
        <x-card :title="Str::headline($title)">
            <x-link-indigo :link="route($routes['create'])" :id="'create'">Create</x-link-indigo>
            <div class="flex justify-end">
                <div class="w-12/12 w-6/12">
                <form action="" method="get" >
                        <div class="flex justify-between">
                            <div class="w-w-12/12 md:w-6/12 px-2 flex">
                                <select class="form-control relative flex-auto min-w-0 block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" name="field"> 
                                    <option value="" selectend>------</option>
                                    @foreach ($dataTables as $item)
                                        <option value="{{$item}}" @isset($_REQUEST['field']) {{$item == $_REQUEST['field'] ? 'selected' : ''}} @endisset>{{Str::headline($item)}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="w-w-12/12 md:w-6/12 px-2 flex">
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
                    </form>
                </div>
            </div>
            <div class="flex flex-col mt-4">
                <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="overflow-x-auto">
                            <table class="min-w-full">
                                <thead class="border-b bg-gray-800 text-white">
                                    <tr class="text-left">
                                        @foreach ($dataTables as $item)
                                        <th class="px-6 py-4"> {{Str::headline($item)}}</th>
                                        @endforeach
                                        <th class="px-6 py-4"> Options </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($model as $item)
                                    <tr class="border-b bg-white even:bg-gray-100 hover:bg-gray-100">
                                        @foreach ($dataTables as $tableValue)
                                        <td class="text-gray-900 font-light px-6 py-4 whitespace-nowrap"> {{$item->$tableValue}}</td>
                                        @endforeach
                                        <td class="text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            <x-link-amber :link="route($routes['edit'], $item)" :id="'edit'">Edit</x-link-amber>
                                            <x-link-cyan :link="route($routes['show'], $item)" :id="'show'">Show</x-link-cyan>
                                            <x-link-rose :link="route($routes['show'], $item)" :id="'btn-delete-'.$item->id">
                                                Delete
                                            </x-link-rose>
                                            <form action="{{route($routes['destroy'], $item)}}" method="post" id="form-delete-{{$item->id}}">
                                                <input type="hidden" name="_method" value="DELETE">
                                                @csrf
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            {{$model->links()}}
        </x-card>
    </div>
</div>
@endsection

@section('js')
    <script>
        document.querySelector('#{{$title}}').classList.add('text-rose-500');
    </script>
    @foreach ($model as $item)
        <script>
            var btn = document.getElementById('btn-delete-{{$item->id}}');
            btn.addEventListener('click', (e) => {
                e.preventDefault()
                swal({
                        title: "Are you sure?", 
                        text: "Once deleted, you will not be able to recover this record!", 
                        icon: "warning", 
                        buttons: true, 
                        dangerMode: true 
                    }).then((willDelete) => {
                        if (willDelete) {
                            document.getElementById('form-delete-{{$item->id}}').submit()
                        } else { 
                            swal({
                                title: "Fyuuh!!!",
                                text: 'Your record is safe!',
                                icon: 'success'
                            }); 
                        } 
                    });
            })
        </script>
    @endforeach
@endsection