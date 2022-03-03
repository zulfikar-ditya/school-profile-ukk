@extends('layouts.frontend.base')

@section('title', $success_story->name.' - Success Story')

@section('content')
    <div class="container mx-auto my-20 p-10">
        <div class="flex justify-center">
            <div class="w-full lg:w-6/12 p-5 shadow hover:shadow-md rounded-md">
                <iframe src="{{$success_story->video_url}}" frameborder="0" class="w-full aspect-video"></iframe>
                <div class="text-center mt-10">
                    <h6 class="text-xl text-slate-800 dark:text-white font-bold">{{$success_story->name}}</h6>
                </div>
                <hr class="border border-slate-800 dark:border-white my-5">
                <p class="">{!!$success_story->text!!}</p>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script></script>
@endsection