@php
    $info = \App\Models\SchoolInformation::orderByDesc('created_at')->limit(1)->get()[0];

    $name = $info->name;
    $logo = $info->logo;
@endphp
<nav class="md:left-0 md:block md:fixed md:top-0 md:bottom-0 md:overflow-y-auto md:flex-row md:flex-nowrap md:overflow-hidden shadow-xl bg-white dark:bg-slate-800 dark:text-slate-200 flex flex-wrap items-center justify-between relative md:w-64 z-10 py-4 px-6">
    <div
        class="md:flex-col md:items-stretch md:min-h-full md:flex-nowrap px-0 flex flex-wrap items-center justify-between w-full mx-auto">
        <button class="cursor-pointer text-black dark:text-gray-200 opacity-50 md:hidden px-3 py-1 text-xl leading-none bg-transparent rounded border border-solid border-transparent" type="button"  onclick="toggleNavbar('example-collapse-sidebar')"> 
            <i class="" data-feather="menu"></i>
        </button> 
        <a class="md:block md:pb-2 text-blueGray-600 mr-0 inline-block text-sm uppercase font-bold p-4 px-0 text-center" href="{{route('admin.index')}}">
            <img src="{{url('storage/'.$logo)}}" alt="" class="h-16 mx-auto">
            {{$name}}
        </a>
        <ul class="md:hidden items-center flex flex-wrap list-none">
            <li class="inline-block relative"> 
                <a class="text-blueGray-500 block" href="#pablo" onclick="openDropdown(event,'user-responsive-dropdown')">
                    <div class="items-center flex"> 
                        <span class="w-12 h-12 text-sm text-white  inline-flex items-center justify-center rounded-full">
                            <img alt="..." class="w-full rounded-full align-middle border-none shadow-lg" src="{{Auth::user()->profile_photo_url}}" />
                        </span>
                    </div>
                </a>
                <div class="hidden bg-white dark:bg-gray-800 dark:border dark:border-gray-300 text-base z-50 float-left py-2 list-none text-left rounded shadow-lg mt-1" style="min-width: 12rem;" id="user-responsive-dropdown">                     
                    <a href="{{route('dashboard')}}" class="text-sm py-2 px-4 font-normal w-full bg-transparent text-blueGray-700 flex items-center">
                        <i class=""data-feather="user"></i>
                        My Account
                    </a>
                    <div class="h-0 my-2 border border-solid border-blueGray-100"></div> 
                    <a href="{{route('logout')}}" class="text-sm py-2 px-4 font-normal w-full bg-transparent text-blueGray-700 flex items-center" id="link-logout">
                        <i data-feather="log-out"></i>
                        Logout
                        <form action="{{route('logout')}}" method="post" id="form-logout">
                            @csrf
                        </form>
                    </a>
                </div>
            </li>
        </ul>
        <div class="md:flex md:flex-col md:items-stretch md:opacity-100 md:relative md:mt-4 md:shadow-none shadow absolute top-0 left-0 right-0 z-40 overflow-y-auto overflow-x-hidden h-auto items-center flex-1 rounded hidden bg-white dark:bg-slate-800" id="example-collapse-sidebar">
            <div class="md:min-w-full md:hidden block pb-4 mb-4 border-b border-solid border-blueGray-200">
                <div class="flex flex-wrap">
                    <div class="w-6/12"> 
                        <a class="md:block text-left md:pb-2 text-blueGray-600 mr-0 inline-block text-sm uppercase font-bold p-4 px-0" href="{{route('admin.index')}}">{{$name}}</a> 
                    </div>
                    <div class="w-6/12 flex justify-end"> 
                        <button type="button" class="cursor-pointer text-black dark:text-white opacity-50 md:hidden px-3 py-1 text-xl leading-none bg-transparent rounded border border-solid border-transparent" onclick="toggleNavbar('example-collapse-sidebar')"> 
                            <i data-feather="x"></i> 
                        </button>
                    </div>
                </div>
            </div>
            <hr class="my-4 md:min-w-full" />
            <h6 class="md:min-w-full text-blueGray-500 text-xs uppercase font-bold block pt-1 pb-4 no-underline">Main Menu</h6>
            <ul class="md:flex-col md:min-w-full flex flex-col list-none">
                <li class="items-center"> 
                    <a href="{{route('admin.index')}}" class=" text-xs uppercase py-3 font-bold flex items-center" id="dashboard">
                        <i class="opacity-75 mr-2 text-sm" data-feather="compass"></i> Dashboard
                    </a> 
                </li>
                @if (Auth::user()->hasRole('superuser'))
                <li class="items-center"> 
                    <a href="{{route('admin.user.index')}}" class=" text-xs uppercase py-3 font-bold flex items-center" id="user">
                        <i data-feather="users" class="opacity-75 mr-2 text-sm"></i> User
                    </a> 
                </li>
                @endif
            </ul>
            <hr class="my-4 md:min-w-full" />
            <h6 class="md:min-w-full text-blueGray-500 text-xs uppercase font-bold block pt-1 pb-4 no-underline">Menu</h6>
            <ul class="md:flex-col md:min-w-full flex flex-col list-none">
                <li class="items-center"> 
                    <a href="{{route('admin.message.index')}}" class=" text-xs uppercase py-3 font-bold flex items-center" id="message">
                        <i data-feather="mail" class="opacity-75 mr-2 text-sm"></i> Message
                    </a> 
                </li>
            </ul>
            <hr class="my-4 md:min-w-full" />
            <h6 class="md:min-w-full text-blueGray-500 text-xs uppercase font-bold block pt-1 pb-4 no-underline">Landing Page Setting</h6>
            <ul class="md:flex-col md:min-w-full flex flex-col list-none md:mb-4">
                <li class="items-center"> 
                    <a href="{{route('admin.about-us.index')}}" class=" text-xs uppercase py-3 font-bold flex items-center" id="about-us">
                        <i class="opacity-75 mr-2 text-sm" data-feather="info"></i> About Us
                    </a> 
                </li>
                <li class="items-center"> 
                    <a href="{{route('admin.blog.index')}}" class=" text-xs uppercase py-3 font-bold flex items-center" id="blog">
                        <i class="opacity-75 mr-2 text-sm" data-feather="edit"></i> Blog
                    </a> 
                </li>
                @if (Auth::user()->hasRole('superuser'))
                <li class="items-center"> 
                    <a href="{{route('admin.blog-category.index')}}" class=" text-xs uppercase py-3 font-bold flex items-center" id="blog-category">
                        <i class="opacity-75 mr-2 text-sm" data-feather="list"></i> Blog Category
                    </a> 
                </li>
                @endif
                <li class="items-center"> 
                    <a href="{{route('admin.extracurricular.index')}}" class=" text-xs uppercase py-3 font-bold flex items-center" id="extracurricular">
                        <i class="opacity-75 mr-2 text-sm" data-feather="award"></i> Extracurricular
                    </a> 
                </li>
                <li class="items-center"> 
                    <a href="{{route('admin.facility.index')}}" class=" text-xs uppercase py-3 font-bold flex items-center" id="facility">
                        <i class="opacity-75 mr-2 text-sm" data-feather="clipboard"></i> facility
                    </a> 
                </li>
                <li class="items-center"> 
                    <a href="{{route('admin.learning-oportunity.index')}}" class=" text-xs uppercase py-3 font-bold flex items-center" id="learning-oportunity">
                        <i class="opacity-75 mr-2 text-sm" data-feather="book"></i> Learning Oportunity
                    </a> 
                </li>
                <li class="items-center"> 
                    <a href="{{route('admin.learning-process.index')}}" class=" text-xs uppercase py-3 font-bold flex items-center" id="learning-process">
                        <i class="opacity-75 mr-2 text-sm" data-feather="book-open"></i> Learning Process
                    </a> 
                </li>
                <li class="items-center"> 
                    <a href="{{route('admin.program.index')}}" class=" text-xs uppercase py-3 font-bold flex items-center" id="program">
                        <i class="opacity-75 mr-2 text-sm" data-feather="layers"></i> Program
                    </a> 
                </li>
                <li class="items-center"> 
                    <a href="{{route('admin.quote.index')}}" class=" text-xs uppercase py-3 font-bold flex items-center" id="quote">
                        <i class="opacity-75 mr-2 text-sm" data-feather="align-center"></i> Quote
                    </a> 
                </li>
                @if (Auth::user()->hasRole('superuser'))
                <li class="items-center"> 
                    <a href="{{route('admin.school-information.index')}}" class=" text-xs uppercase py-3 font-bold flex items-center" id="school-information">
                        <i class="opacity-75 mr-2 text-sm" data-feather="alert-circle"></i> School Information
                    </a> 
                </li>
                @endif
                <li class="items-center"> 
                    <a href="{{route('admin.slider.index')}}" class=" text-xs uppercase py-3 font-bold flex items-center" id="slider">
                        <i class="opacity-75 mr-2 text-sm" data-feather="sliders"></i> Slider
                    </a> 
                </li>
                <li class="items-center"> 
                    <a href="{{route('admin.success-story.index')}}" class=" text-xs uppercase py-3 font-bold flex items-center" id="success-story">
                        <i class="opacity-75 mr-2 text-sm" data-feather="check-circle"></i> Success Story
                    </a> 
                </li>
                <li class="items-center"> 
                    <a href="{{route('admin.why-us.index')}}" class=" text-xs uppercase py-3 font-bold flex items-center" id="why-us">
                        <i class="opacity-75 mr-2 text-sm" data-feather="help-circle"></i> Why Us
                    </a> 
                </li>
            </ul>
        </div>
    </div>
</nav>