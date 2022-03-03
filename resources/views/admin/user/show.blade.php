@extends('admin.base')

@php
    $page_title = 'user';
    $title = 'show user';
@endphp
@section('title', Str::headline($title))

@section('content')
<div class="relative md:pt-32 pb-32 pt-12 w-full">
    <x-show-crud-component :routes="$routes" :files="$files" :title="$title" :page_title="$page_title" :model="$model">
        <tbody>
            @foreach ($fields as $item)
            <tr class="bg-white even:bg-gray-100 hover:bg-gray-100 dark:bg-gray-700 dark:even:bg-slate-800 dark:hover:bg-slate-800">
                <td class="text-gray-900 dark:text-white font-light px-6 py-4">{{Str::headline($item)}}</td>
                <td class="text-gray-900 dark:text-white font-light px-6 py-4">
                    @if ($item == 'profile_photo_path')
                        @if ($model->profile_photo_path == null )
                        <img src="{{$model->profile_photo_url}}" alt=""class="h-96">
                        @else
                        <img src="{{url('storage/'.$model->profile_photo_path)}}" alt=""class="h-96">
                        @endif
                    @else
                    {{$model->$item}}
                    @endif
                </td>
            </tr>
            @endforeach
            <tr class="bg-white even:bg-gray-100 hover:bg-gray-100 dark:bg-gray-700 dark:even:bg-slate-800 dark:hover:bg-slate-800">
                <td class="text-gray-900 dark:text-white font-light px-6 py-4">Role</td>
                <td class="text-gray-900 dark:text-white font-light px-6 py-4">
                    {{$model->getRoleNames()}}
                </td>
            </tr>
        </tbody>
    </x-show-crud-component>
</div>
@endsection

@section('js')
    <script>
        document.querySelector('#{{$page_title}}').classList.add('text-rose-500')
    </script>
    <script>
        var btn = document.getElementById('btn-delete-{{$model->id}}');
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
                        document.getElementById('form-delete-{{$model->id}}').submit()
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
@endsection