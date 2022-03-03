@extends('layouts.frontend.base')

@section('title', Str::headline(Str::title($blog->title)).' - Blog ')

@section('content')
    <div class="container mx-auto my-20 p-10">
        <div class="flex flex-wrap justify-center">
            <div class="w-full lg:w-8/12 px-4">
                <h3 class="text-3xl font-bold">{{Str::title($blog->title)}}</h3>
                <img src="{{url('storage/'.$blog->image)}}" alt="{{Str::title($blog->title)}}" class="w-full object-cover object-center rounded-md my-10">

                <span class="">
                    {!!$blog->content!!}
                </span>
            </div>
            <div class="w-full lg:w-4/12 px-4 self-start sticky top-0 overflow-hidden">
                <h5 class="text-2xl">Related Blogs.</h5>
                <hr class="border border-slate-800 dark:border-white my-5">
                <div class="grid grid-cols-1 gap-4">
                @foreach ($blogs as $item)
                <div class="" data-aos="fade-up">
                    <div class="bg-white dark:bg-gray-800 rounded-md shadow hover:shadow-md p-5">
                        <a href="{{route('home.blog', ['id' => $item->id, 'slug' => $item->slug])}}" class="no-underline hover:underline">
                            <img src="{{url('storage/'.$item->image)}}" alt="" class="object-cover object-center rounded-md h-60 lg:h-44 w-full">
                            <h6 class="text-slate-900 dark:text-white text-1xl my-5 font-semibold">{{Str::headline(Str::limit($item->title, 50))}}</h6>
                            <hr class="border border-slate-800 dark:border-white mb-7">
                            <a href="{{route('home.blogs.category', $item->blog_category_id)}}" class="bg-rose-100 text-rose-500 py-2 px-3 rounded">{{$item->blog_category->name}}</a>
                        </a>
                    </div>
                </div>
                @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script></script>
@endsection