@extends('admin.base')

@php
    $title = 'slider';
    $page_title = 'create '.$title;
@endphp
@section('title', Str::headline($page_title))

@section('content')
<div class="relative md:pt-32 pb-32 pt-12 w-full">
    <x-create-crud-component :title="$title" :page_title="$page_title" :routes="$routes">
        @include($files['fields'])
    </x-create-crud-component>
</div>
@endsection