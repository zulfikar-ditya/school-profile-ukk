@extends('admin.base')

@php
    $page_title = 'learning-oportunity';
    $title = 'edit '.$page_title;
@endphp
@section('title', Str::headline($title))

@section('content')
<div class="relative md:pt-32 pb-32 pt-12 w-full">
    <x-edit-crud-component :routes="$routes" :title="$title" :page_title="$page_title" :model="$model">
        @include($files['fields'])
    </x-edit-crud-component>
</div>
@endsection