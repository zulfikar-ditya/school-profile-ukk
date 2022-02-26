@props(['name', 'value', 'required', 'autofocus'])
<div class="mb-3">
    <label for="{{ $name }}" class="form-label mb-2 font-bold @error($name) text-rose-500 @enderror">
        {{ Str::headline($name) }}
        {!! $required ? '<span class="text-red-500">*</span>' : '<span class="text-blue-500">*</span>' !!}
    </label>
    <textarea
    name="{{ $name }}" id="{{ $name }}" placeholder="{{ Str::headline($name) }}"
    {{ $autofocus ? 'autofocus' : ''}}
    class="
        form-control
        block
        w-full
        px-3
        py-1.5
        text-base
        font-normal
        text-gray-700 dark:text-gray-200
        bg-white dark:bg-gray-800 bg-clip-padding
        border border-solid border-gray-300
        rounded
        transition
        ease-in-out
        m-0
        @error($name)
            border-rose-500
        @enderror
        focus:text-gray-700 dark:focus:text-gray-300 
        focus:bg-white dark:focus:bg-gray-900 
        focus:border-blue-600 
        focus:outline-none"/>{!! $value !!}</textarea>
</div>