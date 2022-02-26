@props(['name', 'value', 'required', 'autofocus'])
<div class="mb-3">
    <div class="form-check">
        <input type="radio"
            class="form-check-input
            appearance-none
            rounded-full
            h-4 w-4 
            border border-gray-300 
            bg-white dark:bg-slate-800
            checked:bg-blue-600 checked:border-blue-600 
            focus:outline-none 
            transition 
            duration-200 
            mt-1 
            align-top 
            bg-no-repeat bg-center bg-contain 
            float-left 
            mr-2 cursor-pointer @error($name) border-rose-500 @enderror"
            name="{{ $name }}" 
            id="{{ $name }}" 
            placeholder="{{ Str::headline($name) }}"
            value="{{ $value }}" 
            {{ $value == null && $required ? 'required' : '' }}
            {{$autofocus ? 'autofocus' : ''}} />
        <label for="{{ $name }}" class="form-label mb-2 font-bold @error($name) text-rose-500 @enderror"> 
            {{ Str::headline($name)}} 
            {!! $required ? '<span class="text-red-500">*</span>' : '<span class="text-blue-500">*</span>' !!} 
        </label>
    </div>
