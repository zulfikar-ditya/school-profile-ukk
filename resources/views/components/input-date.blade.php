@props(['required', 'autofocus', 'label', 'name'])
@php
$color = $required ? 'text-red-500' : 'text-cyan-500';
@endphp
<div class="datepicker relative form-floating mb-3 xl:w-96">
    <input type="text"
        class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
        placeholder="Select a date" />
    <label for="floatingInput" class="text-gray-700">Select a date</label>
</div>
