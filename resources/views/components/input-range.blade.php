@props(['name', 'value', 'required'])
<div class="mb-3">
    <div class="relative pt-1">
        <label for="{{ $name }}" class="form-label mb-2 font-bold">
            {{ Str::title($name) }}
            {!! $required ? '<span class="text-red-500">*</span>' : '<span class="text-blue-500">*</span>' !!}
        </label>
        <input type="range"
            class=" form-range appearance-none w-full h-6 p-0  bg-transparent focus:outline-none focus:ring-0 focus:shadow-none"
            name="{{ $name }}" id="{{ $name }}" placeholder="{{ Str::title($name) }}"
            value="{{ $value }}" {{ $required ? 'required' : '' }} />
    </div>
