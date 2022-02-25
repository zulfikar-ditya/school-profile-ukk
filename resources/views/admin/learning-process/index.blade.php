@extends('admin.base')

@php
    $title = 'learning-process';
@endphp
@section('title', Str::headline($title))

@section('content')
<div class="relative md:pt-32 pb-32 pt-12 w-full">
    <x-index-crud-component :routes="$routes" :title="$title" :dataTables="$dataTables">
        <div class="flex flex-col mt-4">
            <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="overflow-x-auto">
                        <table class="min-w-full">
                            <thead class="bg-gray-800 dark:bg-gray-900 text-white">
                                <tr class="text-left">
                                    @foreach ($dataTables as $item)
                                    <th class="px-6 py-4"> {{Str::headline($item)}}</th>
                                    @endforeach
                                    <th class="px-6 py-4"> Options </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($model as $item)
                                <tr class=" bg-white even:bg-gray-100 hover:bg-gray-100 dark:bg-gray-700 dark:even:bg-slate-800 dark:hover:bg-slate-800">
                                    @foreach ($dataTables as $tableValue)
                                    <td class="text-gray-900 dark:text-white font-light px-6 py-4 whitespace-nowrap"> {{$item->$tableValue}}</td>
                                    @endforeach
                                    <td class="text-gray-900 dark:text-white font-light px-6 py-4 whitespace-nowrap">
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
        <div class="mt-5">
            {{$model->links()}}
        </div>
    </x-index-crud-component>
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