@extends('admin.base')

@php
    $title = 'quote';
    $page_title = 'create quote';
@endphp
@section('title', Str::headline($page_title))

@section('content')
<div class="relative bg-gray-100 md:pt-32 pb-32 pt-12l w-full">
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
                    <a href="{{route($routes['index'])}}" class="text-blue-500 font-bold">{{Str::headline($title)}}</a>
                </li>
                <li>
                    <span class="text-gray-500 mx-2">/</span>
                </li>
                <li class="text-gray-500">
                    <a href="{{route($routes['create'])}}">
                        {{Str::headline($page_title)}}
                    </a>
                </li>
            </ul>
        </nav>
        <x-card :title="Str::headline($page_title)">
            @include($files['fields'])
        </x-card>
    </div>
</div>
@endsection

@section('js')
    <script>
        document.querySelector('#{{$title}}').classList.add('text-rose-500')
    </script>
@endsection