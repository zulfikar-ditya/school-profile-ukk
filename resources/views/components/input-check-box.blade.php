@props(['required', 'autofocus', 'label', 'name'])
@php
$color = $required ? 'text-red-500' : 'text-cyan-500';
@endphp
<div class="form-check form-switch">
    <input type="checkbox"
        class="form-check-input appearance-none w-9 -ml-10 rounded-full float-left h-5 align-top bg-no-repeat bg-contain bg-gray-300 focus:outline-none cursor-pointer shadow-sm"
        placeholder="{{ $label }}" value="{{ $model ? $model->$name : '' || old($name) }}"
        name="{{ $name }}" role="switch" id="{{ $name }}" {{ $required ? 'required' : '' }} />
    <label class="form-check-label inline-block text-gray-800 font-bold capitalize" for="{{ $name }}">
        {{ $label }} <span class="{{ $color }}">*</span>
    </label>
</div>
