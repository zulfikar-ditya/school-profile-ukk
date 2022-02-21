@props(['name', 'value', 'required'])
<div class="mb-3">
    <div class="form-check form-switch">
        <input type="checkbox"
            class="form-check-input appearance-none w-9 -ml-10 rounded-full float-left h-5 align-top bg-no-repeat bg-contain bg-gray-300 focus:outline-none cursor-pointer shadow-sm"
            name="{{ $name }}" id="{{ $name }}" placeholder="{{ Str::title($name) }}"
            value="{{ $value }}" {{ $required ? 'required' : '' }}>
        <label for="{{ $name }}" class="form-label mb-2 font-bold">
            {{ Str::title($name) }}
            {!! $required ? '<span class="text-red-500">*</span>' : '<span class="text-blue-500">*</span>' !!}
        </label>
    </div>
</div>