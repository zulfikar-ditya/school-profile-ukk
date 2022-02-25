@extends('layouts.blank')

@php
    $code = 405;
    $message = 'Method Not Allowed';
@endphp
@section('title', $code.' - '.$message)

@section('content')
    <div class="container mx-auto">
        <div class="flex flex-col justify-center items-center min-h-screen">
            <div class="w-full md:w-6/12 text-center bg-gradient-to-br from-gray-900 to-slate-700 px-10 py-20 rounded-lg shadow-lg shadow-gray-700 border border-white">
                <h1 class="text-white font-bold tracking-wide text-3xl">Whoops !!!</h1>
                <h5 class="text-white tracking-wide text-xl">Something went wrong.</h5>
                <h3 class="text-rose-500 mt-10 text-6xl font-extrabold">{{$code}}</h3>
                <p class="text-white tracking-widest">{{$message}}</p>
            </div>
        </div>
    </div>
@endsection