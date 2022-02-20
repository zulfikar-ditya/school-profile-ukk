@props(['type', 'id'])
<button type="{{ $type }}"
    class="inline-block px-6 py-2.5 bg-indigo-500 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-indigo-600 hover:shadow-lg focus:bg-indigo-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-indigo-700 active:shadow-lg transition duration-150 ease-in-out" id="{{$id}}">{{ $slot }}</button>
