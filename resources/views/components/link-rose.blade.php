@props(['link', 'id'])
<a href="{{ $link }}" class="inline-block px-6 py-2.5 bg-rose-500 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-rose-600 hover:shadow-lg focus:bg-rose-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-rose-700 active:shadow-lg transition duration-150 ease-in-out" id="{{ $id }}">{{ $slot }}</a>
