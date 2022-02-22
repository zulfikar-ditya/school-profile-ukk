<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>School Profile</title>
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.css"
    />
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    />
    <style>
      body {
        font-family: 'Nunito', sans-serif;
      }
    </style> @livewireStyles() @yield('css')
  </head>
  <body class="bg-gray-50 text-slate-700 antialiased">
    <div id="root">
      @include('layouts.admin.sidebar')
      <div class="relative md:ml-64">
        <nav class="absolute top-0 left-0 w-full z-10 bg-white md:flex-row md:flex-nowrap md:justify-start flex items-center p-4">
          <div class="w-full mx-autp items-center flex justify-end md:flex-nowrap flex-wrap md:px-10 px-4">
            <ul class="flex-col md:flex-row list-none items-center hidden md:flex"> 
              <a class="text-blueGray-500 block" href="#{{Auth::user()->name}}" onclick="openDropdown(event,'user-dropdown')">
                <div class="items-center flex"> 
                  <span class="w-12 h-12 text-sm  bg-blueGray-200 inline-flex items-center justify-center rounded-full">
                    <img alt="User Profile" class="w-full rounded-full align-middle border-none shadow-lg" src="{{ Auth::user()->profile_photo_url}}" />
                  </span> 
                </div>
              </a>
              <div class="hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded shadow-lg mt-1" style="min-width: 12rem;" id="user-dropdown"> 
                <a href="#{{Auth::user()->name}}" class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">Action</a>
                <a href="#{{Auth::user()->name}}" class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">Anotheraction</a>
                <a href="#{{Auth::user()->name}}" class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">Somethingelse here</a>
                <div class="h-0 my-2 border border-solid border-blueGray-100"></div> 
                <a href="#{{Auth::user()->name}}" class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">Seprated
                  link
                </a>
              </div>
            </ul>
          </div>
        </nav>
        {{-- main content --}}
        @yield('content')
        {{-- main content --}}
      </div>
    </div>
    @livewireScripts() 
    <script src="https://unpkg.com/@popperjs/core@2" charset="utf-8"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/tailwind-element.js') }}"></script> 
    <script src="{{asset('js/jquery.js') }}"></script>
    <script src="{{asset('js/sweetalert.js') }}"></script>
    <script>
      /* Sidebar - Side navigation menu on mobile/responsive mode */ 
      function toggleNavbar(collapseID) {
        document.getElementById(collapseID).classList.toggle("hidden");
        document.getElementById(collapseID).classList.toggle("bg-white");
        document.getElementById(collapseID).classList.toggle("m-2");
        document.getElementById(collapseID).classList.toggle("py-3");
        document.getElementById(collapseID).classList.toggle("px-6"); 
      } 
      /* Function for dropdowns */ 
      function openDropdown(event, dropdownID) { 
        let element = event.target; 
        while (element.nodeName !== "A") { 
          element = element.parentNode; 
        } 
        var popper = Popper.createPopper(element, document.getElementById(dropdownID), { placement: "bottom-end" }); 
        document.getElementById(dropdownID).classList.toggle("hidden");
        document.getElementById(dropdownID).classList.toggle("block"); 
      }
    </script>
    @include('components.modal-alert') 
    @yield('js')
  </body>
</html>