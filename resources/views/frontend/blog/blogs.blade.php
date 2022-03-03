@extends('layouts.frontend.base')

@section('title', 'Blog')

@section('content')
    <div class="container mx-auto p-10 my-20">
        <div class="flex justify-center">
            <div class="w-full lg:w-6/12 text-center">
                <h3 class="text-4xl font-bold capitalize">Blog {{$category ? '- '.$category->name : ''}}</h3>
                <hr class="border border-slate-800 dark:border-white my-4">
                <p class="text-slate-500 dark:text-gray-300"> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iusto ratione maxime esse eaque totam nisi aperiam sint.</p>
            </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-4 mt-10">
            @foreach ($blogs as $item)
            <div class="" data-aos="fade-up">
                <div class="bg-white dark:bg-gray-800 rounded-md shadow hover:shadow-md p-5">
                    <a href="{{route('home.blog', ['id' => $item->id, 'slug' => $item->slug])}}" class="no-underline hover:underline">
                        <img src="{{url('storage/'.$item->image)}}" alt="" class="object-cover object-center rounded-md h-60 w-full">
                        <h6 class="text-slate-900 dark:text-white text-1xl my-5 font-semibold">{{Str::headline(Str::limit($item->title, 50))}}</h6>
                        <hr class="border border-slate-800 dark:border-white mb-7">
                        <a href="{{route('home.blogs.category', $item->blog_category_id)}}" class="bg-rose-100 text-rose-500 py-2 px-3 rounded">{{$item->blog_category->name}}</a>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
        <div class="mt-20">
            {{$blogs->links()}}
        </div>
    </div>
@endsection 

@section('js')
    <script></script>
@endsection
