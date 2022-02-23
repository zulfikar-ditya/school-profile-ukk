@extends('admin.base')

@php
    $title = 'create success story';
@endphp
@section('title', Str::headline($title))

@section('content')
<div class="relative bg-gray-100 md:pt-32 pb-32 pt-12l w-full">
    <div class="px-4 md:px-10 mx-auto w-full">
        <x-card :title="Str::headline($title)">
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