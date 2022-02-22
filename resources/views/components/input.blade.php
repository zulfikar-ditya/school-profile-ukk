@props(['type', 'name', 'value', 'required', 'autofocus'])
<div class="mb-3">
    <label for="{{ $name }}" class="form-label mb-2 font-bold @error($name) text-rose-500 @enderror">
        {{ Str::title($name) }}
        {!! $required ? '<span class="text-red-500">*</span>' : '<span class="text-blue-500">*</span>' !!}
    </label>
    <input type="{{ $type }}"
        class="
        form-control
        block
        w-full
        px-3
        py-1.5
        text-base
        font-normal
        text-gray-700
        bg-white bg-clip-padding
        border border-solid border-gray-300
        rounded
        transition
        ease-in-out
        m-0
        @error($name)
            border-rose-500
        @enderror
        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
        name="{{ $name }}" id="{{ $name }}" placeholder="{{ Str::title($name) }}"
        value="{{$value}}"
        {{ $required ? 'required' : '' }} 
        {{$autofocus ? 'autofocus' : ''}}
        />
</div>
