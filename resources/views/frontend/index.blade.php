@extends('layouts.frontend.base')

@section('title', 'Home')

@section('content')
    {{-- slider --}}
    <div id="default-carousel" data-carousel="slide" class="relative">

        <div class="overflow-hidden relative h-screen">
            <div class="duration-700 ease-in-out absolute inset-0 transition-all transform translate-x-0 object-contain object-center bg-cover bg-center bg-no-repeat" data-carousel-item="active" style="background-image: url({{{url('storage/'.$sliders[0]->image)}}});">
                <div class="text-center z-10 flex justify-center items-center min-h-screen px-10">
                    <div class="w-full md:w-6/12 p-10 bg-white/50 text-slate-900 shadow rounded-md">
                        <h1 class="text-6xl font-bold">{{$sliders[0]->main_text}}</h1>
                        <hr class="my-4" />
                        <h5 class="text-2xl">{{$sliders[0]->sub_text}}</h5>
                    </div>
                </div>
            </div>

            <div class="duration-700 ease-in-out absolute inset-0 transition-all transform translate-x-full object-contain object-center bg-cover bg-center bg-no-repeat" data-carousel-item="" style="background-image: url({{{url('storage/'.$sliders[1]->image)}}});">
                <div class="text-center z-10 flex justify-center items-center min-h-screen px-10">
                    <div class="w-full md:w-6/12 p-10 bg-white/50 text-slate-900 shadow rounded-md">
                        <h1 class="text-6xl font-bold">{{$sliders[1]->main_text}}</h1>
                        <hr class="my-4" />
                        <h5 class="text-2xl">{{$sliders[1]->sub_text}}</h5>
                    </div>
                </div>
            </div>

            <div class="hidden duration-700 ease-in-out absolute inset-0 transition-all transform object-contain object-center bg-cover bg-center bg-no-repeat" data-carousel-item="" style="background-image: url({{{url('storage/'.$sliders[2]->image)}}});">
                <div class="text-center z-10 flex justify-center items-center min-h-screen px-10">
                    <div class="w-full md:w-6/12 p-10 bg-white/50 text-slate-900 shadow rounded-md">
                        <h1 class="text-6xl font-bold">{{$sliders[2]->main_text}}</h1>
                        <hr class="my-4" />
                        <h5 class="text-2xl">{{$sliders[2]->sub_text}}</h5>
                    </div>
                </div>
            </div>

            <div class="hidden duration-700 ease-in-out absolute inset-0 transition-all transform object-contain object-center bg-cover bg-center bg-no-repeat" data-carousel-item="" style="background-image: url({{{url('storage/'.$sliders[3]->image)}}});">
                <div class="text-center z-10 flex justify-center items-center min-h-screen px-10">
                    <div class="w-full md:w-6/12 p-10 bg-white/50 text-slate-900 shadow rounded-md">
                        <h1 class="text-6xl font-bold">{{$sliders[3]->main_text}}</h1>
                        <hr class="my-4" />
                        <h5 class="text-2xl">{{$sliders[3]->sub_text}}</h5>
                    </div>
                </div>
            </div>

            <div class="hidden duration-700 ease-in-out absolute inset-0 transition-all transform object-contain object-center bg-cover bg-center bg-no-repeat" data-carousel-item="" style="background-image: url({{{url('storage/'.$sliders[4]->image)}}});">
                <div class="text-center z-10 flex justify-center items-center min-h-screen px-10">
                    <div class="w-full md:w-6/12 p-10 bg-white/50 text-slate-900 shadow rounded-md">
                        <h1 class="text-6xl font-bold">{{$sliders[4]->main_text}}</h1>
                        <hr class="my-4" />
                        <h5 class="text-2xl">{{$sliders[4]->sub_text}}</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex absolute bottom-5 left-1/2 space-x-3 -translate-x-1/2">
            <button type="button" class="w-3 h-3 rounded-full bg-white dark:bg-gray-800" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
            <button type="button" class="w-3 h-3 rounded-full bg-white/50 dark:bg-gray-800/50 hover:bg-white dark:hover:bg-gray-800" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
            <button type="button" class="w-3 h-3 rounded-full bg-white/50 dark:bg-gray-800/50 hover:bg-white dark:hover:bg-gray-800" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
            <button type="button" class="w-3 h-3 rounded-full bg-white/50 dark:bg-gray-800/50 hover:bg-white dark:hover:bg-gray-800" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
            <button type="button" class="w-3 h-3 rounded-full bg-white/50 dark:bg-gray-800/50 hover:bg-white dark:hover:bg-gray-800" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
        </div>

        <button type="button" class="flex absolute top-0 left-0 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none" data-carousel-prev="">
            <span class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                <span class="hidden">Previous</span>
            </span>
        </button>
        <button type="button" class="flex absolute top-0 right-0 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none" data-carousel-next="">
            <span class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                <span class="hidden">Next</span>
            </span>
        </button>
    </div>
    {{-- slider --}}

    {{-- learning oportunity --}}
    <div class="container mx-auto p-10 my-10">
        <div class="flex flex-wrap justify-center items-center">
            <div class="w-full lg:w-3/12 px-0 py-4 lg:px-4 lg:py-0" data-aos="fade-right">
                <h5 class="text-slate-900 dark:text-white text-2xl font-bold">Learning Oportunity</h5>
                <hr class="border border-slate-800 dark:border-white my-5">
                <p class="text-slate-500 dark:text-gray-300">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione, nemo quasi in vitae.</p>
            </div>
            @foreach ($learning_oportunities as $item)
                <div class="w-full lg:w-3/12 px-0 py-4 lg:px-4 lg:py-0" data-aos="fade-up">
                    <div class="bg-white dark:bg-gray-800 rounded-md shadow hover:shadow-md p-5">
                        <i data-feather="{{$item->icon}}" class="text-3xl w-12 h-12 text-rose-500"></i>
                        <h6 class="text-slate-900 dark:text-white text-1xl mt-5 font-semibold">{{Str::headline($item->title)}}</h6>
                        <p class="text-slate-500 dark:text-gray-300 mt-2">{{Str::limit($item->description, 50)}}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    {{-- learning oportunity --}}

    {{-- about us --}}
    <div class="bg-white dark:bg-gray-800">
        <div class="container mx-auto p-10 my-10">
            <div class="flex flex-wrap flex-row-reverse justify-center items-center min-h-screen">
                <div class="w-full lg:w-6/12 flex justify-center lg:justify-end" data-aos="flip-left">
                    <img src="{{url('storage/'.$about_us->image)}}" alt="" class="w-full ">
                </div>
                <div class="w-full lg:w-6/12" data-aos="flip-right">
                    <h3 class="text-4xl font-bold">About Us</h3>
                    <hr class="border border-slate-800 dark:border-white my-4" >
                    <p class="text-slate-500 dark:text-gray-300">
                        {!!$about_us->text!!}
                    </p>
                </div>
            </div>
        </div>
    </div>
    {{-- about us --}}

    {{-- program --}}
    <div class="container mx-auto p-10 my-10">
        <div class="flex flex-row-reverse flex-wrap justify-center items-center">
            <div class="w-full lg:w-3/12 px-0 py-4 lg:px-4 lg:py-0" data-aos="fade-right">
                <h5 class="text-slate-900 dark:text-white text-2xl font-bold">Programs</h5>
                <hr class="border border-slate-800 dark:border-white my-5">
                <p class="text-slate-500 dark:text-gray-300">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione, nemo quasi in vitae.</p>
                <div class="mt-5 hidden lg:block">
                    <x-link-cyan :link="route('home.programs')" :id="''">See More</x-link-cyan>
                </div>
            </div>
            @foreach ($programs as $item)
                <div class="w-full lg:w-3/12 px-0 py-4 lg:px-4 lg:py-0" data-aos="fade-up">
                    <div class="bg-white dark:bg-gray-800 rounded-md shadow hover:shadow-md p-5">
                        <a href="{{route('home.program', ['id' => $item->id, 'title' => $item->title ])}}" class="no-underline hover:underline">
                            <img src="{{url('storage/'.$item->image)}}" alt="" class="object-cover object-center rounded-md h-60 w-full">
                            <h6 class="text-slate-900 dark:text-white text-1xl mt-5 font-semibold">{{Str::headline($item->title)}}</h6>
                            <p class="text-slate-500 dark:text-gray-300 mt-2">{{Str::limit($item->description, 50)}}</p>
                        </a>
                    </div>
                </div>
            @endforeach
            <div class="mt-5 block lg:hidden">
                <x-link-cyan :link="route('home.programs')" :id="''">See Others</x-link-cyan>
            </div>
        </div>
    </div>
    {{-- program --}}

    {{-- why us --}}
    <div class="bg-white dark:bg-gray-800">
        <div class="container mx-auto p-10 mt-10">
            <div class="flex flex-wrap justify-center items-center min-h-screen">
                <div class="w-full lg:w-6/12 flex justify-center lg:justify-start" data-aos="zoom-in-left">
                    <img src="{{url('storage/'.$why_us->image)}}" alt="" class="w-full lg:w-9/12">
                </div>
                <div class="w-full lg:w-6/12" data-aos="zoom-in-right">
                    <h3 class="text-4xl font-bold">Why Us</h3>
                    <hr class="border border-slate-800 dark:border-white my-4">
                    <p class="text-slate-500 dark:text-gray-300">
                        {!!$why_us->text!!}
                    </p>
                </div>
            </div>
        </div>
    </div>
    {{-- why us --}}

    {{-- quote --}}
    <div class="bg-center bg-cover p-10 py-20" style="background-image: url('{{url('storage/'.$quote->image)}}');">
        <div class="container mx-auto">
            <div class="flex justify-center items-center">
                <div class="w-full lg:w-6/12 m-auto text-center bg-white/30 rounded-md shadow p-10">
                    <p class="text-xl text-slate-900">{{$quote->text}}</p>
                </div>
            </div>
        </div>
    </div>
    {{-- quote --}}

    {{-- learning proccess --}}
    <div class="container mx-auto p-10 my-10">
        <div class="flex justify-center">
            <div class="w-full lg:w-6/12 text-center">
                <h3 class="text-4xl font-bold">Learning Process</h3>
                <hr class="border border-slate-800 dark:border-white my-4">
                <p class="text-slate-500 dark:text-gray-300"> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iusto ratione maxime esse eaque totam nisi aperiam sint.</p>
            </div>
        </div>
        <div class="flex flex-wrap justify-center my-20">
            @foreach ($learning_process as $item)
                <div class="w-full lg:w-3/12 px-0 py-4 lg:px-4 lg:py-0" data-aos="fade-up">
                    <div class="bg-white dark:bg-gray-800 rounded-md shadow hover:shadow-md p-5">
                        <div class="text-center">
                            <h3 class="text-4xl bg-rose-500 p-10 rounded-full shadow text-white w-32 mx-auto">{{$item->order}}</h3>
                            <div class="mt-5">
                                <h5 class="text-2xl text-slate-800 dark:text-gray-100 font-semibold">{{Str::headline($item->text)}}</h5>
                                <p class="text-gray-500 dark:text-gray-300 mt-2">{{$item->sub_text}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    {{-- learning proccess --}}

    {{-- success story --}}
    <div class="bg-white dark:bg-gray-800">
        <div class="container mx-auto p-10 my-10">
            <div class="flex flex-wrap lg:justify-center items-center min-h-full lg:min-h-screen">
                <div class="w-full block lg:hidden px-0 py-4 lg:px-4 lg:py-0 text-center">
                    <h3 class="text-4xl font-bold">Success Stories</h3>
                    <hr class="border border-slate-800 dark:border-white my-4">
                    <p class="text-slate-500 dark:text-gray-300"> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iusto ratione maxime esse eaque totam nisi aperiam sint.</p>
                </div>
                <div class="w-full lg:w-6/12 px-0 py-4 lg:px-4 lg:py-0 my-10 lg:my-0" data-aos="zoom-in-up">
                    <iframe src="{{$success_story->video_url}}" frameborder="0" class="w-full aspect-video"></iframe>
                    <div class="mt-5">
                        <h6 class="text-xl text-slate-800 dark:text-white font-bold">{{$success_story->name}}</h6>
                        <hr class="border border-slate-800 dark:border-white my-4">
                        <p class="text-gray-500 dark:text-gray-300">{!!$success_story->text!!}</p>
                    </div>
                </div>
                <div class="w-full lg:w-6/12 px-0 py-4 lg:px-4 lg:py-0">
                    <div class="hidden lg:block">
                        <h3 class="text-4xl font-bold">Success Stories</h3>
                        <hr class="border border-slate-800 dark:border-white my-4">
                        <p class="text-slate-500 dark:text-gray-300"> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iusto ratione maxime esse eaque totam nisi aperiam sint.</p>
                    </div>
                    <div class="grid grid-cols-1 gap-4 mt-7">
                        @foreach ($success_stories as $item)
                        <div class="" data-aos="zoom-in-up">
                            <div class="bg-gray-100 dark:bg-slate-900 p-5">
                                <div class="flex flex-wrap items-center">
                                    <div class="w-full lg:w-4/12 px-4">
                                        <iframe src="{{$item->video_url}}" frameborder="0" class="w-full aspect-video"></iframe>
                                    </div>
                                    <div class="w-full lg:w-8/12 px-4">
                                        <a href="{{route('home.success-story', ['id' => $item->id, 'name' => $item->name])}}" class="no-underline hover:underline">
                                            <h6 class="text-xl text-slate-800 dark:text-white font-bold">{{$item->name}}</h6>
                                            <hr class="border border-slate-800 dark:border-white my-4">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="mt-7 flex justify-center lg:justify-start">
                        <x-link-cyan :link="route('home.success-stories')" :id="''">See More</x-link-cyan>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- success story --}}

    {{-- blog --}}
    <div class="container mx-auto p-10 my-10">
        <div class="flex justify-center">
            <div class="w-full lg:w-6/12 text-center">
                <h3 class="text-4xl font-bold">Blog</h3>
                <hr class="border border-slate-800 dark:border-white my-4">
                <p class="text-slate-500 dark:text-gray-300"> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iusto ratione maxime esse eaque totam nisi aperiam sint.</p>
            </div>
        </div>
        <div class="flex flex-wrap justify-center my-20">
            @foreach ($blogs as $item)
                <div class="w-full lg:w-3/12 px-0 py-4 lg:px-4 lg:py-0" data-aos="fade-up">
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
        <div class="flex justify-center">
            <x-link-cyan :link="route('home.blogs')" :id="''">See More</x-link-cyan>
        </div>
    </div>
    {{-- blog --}}
@endsection

@section('js')
<script>
    document.querySelector('#home').classList.add('active');
</script>
@endsection