@extends('layouts.frontend.base')

@section('title', 'Facility')

@section('content')
    <div class="container mx-auto my-20 p-10">
        <div class="flex justify-center">
            <div class="w-full lg:w-6/12 px-0 py-4 lg:px-4 lg:py-0 text-center">
                <h3 class="text-4xl font-bold">Facility</h3>
                <hr class="border border-slate-800 dark:border-white my-4">
                <p class="text-slate-500 dark:text-gray-300"> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iusto ratione maxime esse eaque totam nisi aperiam sint.</p>
            </div>
        </div>
        <div class="flex flex-wrap justify-center mt-10">
            @foreach ($facilities as $item)
            <div class="w-full md:w-4/12 lg:w-3/12 px-0 py-4 lg:px-4" data-aos="zoom-in-up">
                <div class="bg-white dark:bg-gray-800 rounded-md shadow hover:shadow-md p-5">
                    <img src="{{url('storage/'.$item->image)}}" class="h-60 object-cover object-center rounded-md" alt="">
                    <div class="mt-5">
                        <h6 class="text-xl font-bold">{{Str::title($item->name)}}</h6>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="mt-20">
            {{$facilities->links()}}
        </div>
    </div>
@endsection

@section('js')
    <script></script>
@endsection