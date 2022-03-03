@extends('layouts.frontend.base')

@section('title', 'Extracurricular')

@section('content')
    <div class="container mx-auto my-20 p-10">
        <div class="w-full block lg:hidden px-0 py-4 lg:px-4 lg:py-0 text-center">
            <h3 class="text-4xl font-bold">Extracurricular</h3>
            <hr class="border border-slate-800 dark:border-white my-4">
            <p class="text-slate-500 dark:text-gray-300"> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iusto ratione maxime esse eaque totam nisi aperiam sint.</p>
        </div>
        <div class="flex flex-wrap justify-center mt-10">
            @foreach ($extracurriculars as $item)
            <div class="w-full md:w-3/12 lg:w-4/12 p-4" data-aos="flip-up">
                <div class="bg-white dark:bg-gray-800 rounded-md shadow hover:shadow-md p-5">
                    <img src="{{url('storage/'.$item->image)}}" class="h-60 object-cover object-center rounded-md" alt="">

                    <div class="mt-5">
                        <a href="{{route('home.extracurricular', ['id' => $item->id, 'name' => $item->name])}}" class="no-underline hover:underline">
                            <h6 class="text-xl font-bold">{{Str::title($item->name)}}</h6>
                            <hr class="border border-slate-800 dark:border-white my-5">
                            <p class="text-gray-500 dark:text-gray-400">{{Str::limit($item->description, 50)}}</p>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection

@section('js')
    <script></script>
@endsection