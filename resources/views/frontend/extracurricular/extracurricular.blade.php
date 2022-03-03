@extends('layouts.frontend.base')

@section('title', Str::title($extracurricular->name).' - Extracurricular')

@section('content')
    <div class="container mx-auto my-20 p-10">
        <div class="flex justify-center">
            <div class="w-full lg:w-6/12">
                <img src="{{url('storage/'.$extracurricular->image)}}" alt="" class="h-96 object-cover object-center rounded-md">
                <div class="mt-10">
                    <div class="text-center">
                        <h5 class="text-2xl font-bold">{{Str::title($extracurricular->name)}}</h5>
                        <hr class="border border-slate-800 dark:border-white my-5 w-1/2 mx-auto">
                        <p class="text-gray-500 dark:text-gray-200">{{$extracurricular->description}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script></script>
@endsection