<div class="form-check">
    <input
        class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer @error($name) border-rose-500 @enderror"
        type="checkbox" value="" id="flexCheckDefault"
        {{$autofocus ? 'autofocus' : ''}}>
<label for="{{ $name }}" class="form-label mb-2 font-bold @error($name) text-rose-500 @enderror"> {{ Str::title($name)
        }} {!! $required ? '<span class="text-red-500">*</span>' : '<span class="text-blue-500">*</span>' !!} </label>
</div>
