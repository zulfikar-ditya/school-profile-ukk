@php
    $school_information = App\Models\SchoolInformation::orderByDesc('created_at')->limit(1)->get()[0];
    $name = $school_information->name;
    $logo = $school_information->logo;
    $title = $school_information->title;
@endphp
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="theme-color" content="#f43f5e">
        <title> @yield('title') | {{$name}} | {{$title}}</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('css/loader.css') }}">
        @livewireStyles() 
        @yield('css')
        <link rel="shortcut icon" href="{{url('storage/'.$logo)}}" type="image/x-icon">
    </head>
    <body class="bg-slate-100 dark:bg-slate-900 text-slate-700 dark:text-white antialiased">
        @include('layouts.frontend.navbar')
        {{--  --}}
        @yield('content')
        {{--  --}}
        @include('layouts.frontend.footer')
        @include('components.dark-mode-toggle')
        @include('components.loader')
        @livewireScripts()
        <script src="{{ asset('js/app.js') }}"></script>
        <script src="{{ asset('js/tailwind-element.js') }}"></script> 
        <script src="{{asset('js/jquery.js') }}"></script>
        <script src="{{asset('js/sweetalert.js') }}"></script>
        <script src="{{asset('js/feather-icons.js') }}"></script>
        <script src="{{asset('js/darkmode.js') }}"></script>
        <script src="{{asset('js/flowbite.js') }}"></script>
        <script src="{{asset('js/loader.js') }}"></script>
        <script>
            // lgoout
            let link_logout = document.getElementById('link-logout');
            link_logout.addEventListener('click', (e) => {
                e.preventDefault();
                document.getElementById('form-logout').submit();
            })
        </script>
        @include('components.modal-alert') 
        @yield('js')
    </body>
</html>