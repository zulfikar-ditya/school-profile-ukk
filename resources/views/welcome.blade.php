<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>School Profile</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }

    </style>
    @livewireStyles()

    @yield('css')
</head>

<body class="bg-gray-50">
    @yield('content')
    @livewireScripts()
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/tailwind-element.js') }}"></script>
    @include('components.modal-alert')
    @yield('js')
</body>

</html>
