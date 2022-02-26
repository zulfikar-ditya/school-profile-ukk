@extends('admin.base')

@php
    $page_title = 'why-us';
    $title = 'show why-us';
@endphp
@section('title', Str::headline($title))

@section('content')
<div class="relative md:pt-32 pb-32 pt-12 w-full">
    <x-show-crud-component :routes="$routes" :files="$files" :title="$title" :page_title="$page_title" :model="$model">
        <tbody>
            @foreach ($fields as $item)
            <tr class="bg-white even:bg-gray-100 hover:bg-gray-100 dark:bg-gray-700 dark:even:bg-slate-800 dark:hover:bg-slate-800">
                <td class="text-gray-900 dark:text-white font-light px-6 py-4 whitespace-nowrap">{{Str::headline($item)}}</td>
                <td class="text-gray-900 dark:text-white font-light px-6 py-4 whitespace-nowrap">
                    @if ($item == 'image')
                        <img src="{{url('storage/'.$model->$item)}}" alt="" class="h-96">
                    @else
                        {!!$model->$item!!}
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </x-show-crud-component>
</div>
@endsection

@section('js')
    <script>
        document.querySelector('#{{$page_title}}').classList.add('text-rose-500')
    </script>
@endsection