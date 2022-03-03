@extends('layouts.frontend.base')

@section('title', 'Success Story')

@section('content')
    <div class="container mx-auto my-20 p-10">
        <div class="flex justify-center">
            <div class="w-full lg:w-6/12 px-0 text-center">
                <h3 class="text-4xl font-bold">Success Stories</h3>
                <hr class="border border-slate-800 dark:border-white my-4">
                <p class="text-slate-500 dark:text-gray-300"> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iusto ratione maxime esse eaque totam nisi aperiam sint.</p>
            </div>
        </div>
        <div class="flex flex-wrap justify-center mt-10">
            @foreach ($success_stories as $item)
            <div class="w-full md:w-4/12 lg:w-3/12 p-4" data-aos="flip-up">
                <div class="bg-white dark:bg-gray-800 shadow hover:shadow-md rounded-md p-5">
                    <iframe src="{{$item->video_url}}" frameborder="0" class="w-full aspect-video"></iframe>
                    <div class="mt-5">
                        <a href="{{route('home.success-story', ['id' => $item->id, 'name' => $item->name])}}" class="no-underline hover:underline">
                            <h6 class="text-xl text-slate-800 dark:text-white font-bold">{{$item->name}}</h6>
                            <hr class="border border-slate-800 dark:border-white my-4">
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="mt-20">
            {{$success_stories->links()}}
        </div>
    </div>
@endsection

@section('js')
    <script></script>
@endsection