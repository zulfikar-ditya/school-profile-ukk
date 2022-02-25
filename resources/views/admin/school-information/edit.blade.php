@extends('admin.base')

@php
    $page_title = 'school-information';
    $title = 'edit school-information';
@endphp
@section('title', Str::headline($title))

@section('content')
<div class="relative bg-gray-100 md:pt-32 pb-32 pt-12 w-full">
    <div class="px-4 md:px-10 mx-auto w-full">
        <nav class="bg-gray-100 px-5 py-3 rounded-md w-full">
            <ul class="flex list-none gap-4">
                <li>
                    <a href="{{route('admin.index')}}" class="text-blue-500 font-bold">Dashboard</a>
                </li>
                <li>
                    <span class="text-gray-500 mx-2">/</span>
                </li>
                <li>
                    <a href="{{route($routes['index'])}}" class="text-blue-500 font-bold">{{Str::headline($page_title)}}</a>
                </li>
                <li>
                    <span class="text-gray-500 mx-2">/</span>
                </li>
                <li>
                    <a href="{{route($routes['show'], $model)}}" class="text-blue-500 font-bold">
                        Show {{Str::headline($title)}}
                    </a>
                </li>
                <li>
                    <span class="text-gray-500 mx-2">/</span>
                </li>
                <li>
                    <a href="{{route($routes['index'])}}" class="">{{Str::headline($title)}}</a>
                </li>
            </ul>
        </nav>
        <x-card :title="Str::headline($title)">
            @include($files['fields'])
        </x-card>
    </div>
</div>
@endsection

@section('js')
    <script>
        document.querySelector('#{{$page_title}}').classList.add('text-rose-500')
    </script>
@endsection