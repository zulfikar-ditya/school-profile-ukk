@extends('layouts.frontend.base')

@section('title', Str::title($program->title).' - Program')

@section('content')
    <div class="container mx-auto my-20 p-10">
        <div class="flex justify-center">
            <div class="w-full lg:w-6/12">
                <img src="{{url('storage/'.$program->image)}}" alt="{{$program->title}}" class="object-cover object-center rounded-md">
                <div class="mt-10">
                    <div class="text-center">
                        <h5 class="text-2xl font-bold capitalize">{{Str::title($program->title)}}</h5>
                        <hr class="border border-slate-800 dark:border-white my-5 mx-auto w-6/12">
                        <p class="">
                            {{$program->description}}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script></script>
@endsection