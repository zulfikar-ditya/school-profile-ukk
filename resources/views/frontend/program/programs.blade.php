@extends('layouts.frontend.base')

@section('title', 'Programs')

@section('content')
    <div class="container mx-auto my-20 p-10">
        <div class="flex justify-center">
            <div class="w-full lg:w-6/12 px-0 py-4 lg:px-4 lg:py-0 text-center">
                <h3 class="text-4xl font-bold">Programs</h3>
                <hr class="border border-slate-800 dark:border-white my-4">
                <p class="text-slate-500 dark:text-gray-300"> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iusto ratione maxime esse eaque totam nisi aperiam sint.</p>
            </div>
        </div>
        <div class="flex flex-wrap justify-center">
            @foreach ($programs as $item)
                <div class="w-full md:w-4/12 lg:w-3/12 px-0 py-4 lg:px-4" data-aos="fade-up">
                    <div class="bg-white dark:bg-gray-800 rounded-md shadow hover:shadow-md p-5">
                        <a href="{{route('home.program', ['id' => $item->id, 'title' => $item->title ])}}" class="no-underline hover:underline">
                            <img src="{{url('storage/'.$item->image)}}" alt="" class="object-cover object-center rounded-md h-60 w-full">
                            <h6 class="text-slate-900 dark:text-white text-1xl mt-5 font-semibold">{{Str::headline($item->title)}}</h6>
                            <p class="text-slate-500 dark:text-gray-300 mt-2">{{Str::limit($item->description, 50)}}</p>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="mt-20">
            {{$programs->links()}}
        </div>
    </div>
@endsection

@section('js')
    <script></script>
@endsection