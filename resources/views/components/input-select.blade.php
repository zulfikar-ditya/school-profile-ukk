@props(['name', 'value', 'required', 'autofocus', 'data'])
<div class="mb-3">
    <label for="{{ $name }}" class="form-label mb-2 font-bold @error($name) text-rose-500 @enderror">
        {{ Str::headline($name) }}
        {!! $required ? '<span class="text-red-500">*</span>' : '<span class="text-blue-500">*</span>' !!}
    </label>
    <select class="
        form-select appearance-none
        block
        w-full
        px-3
        py-1.5
        text-base
        font-normal
        text-gray-700
        bg-white bg-clip-padding bg-no-repeat
        border border-solid border-gray-300
        rounded
        transition
        ease-in-out
        m-0
        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" name="{{ $name }}" id="{{ $name }}" {{ $value == null && $required ? 'required' : '' }} value="{{ $value }}">
        <option value="" selected>------</option>
        @foreach ($data as $item)
            <option value="{{$item->id}}" {{$value == $item->id ? 'selected' : ''}}>{{$item->name}}</option>
        @endforeach
    </select>
</div>