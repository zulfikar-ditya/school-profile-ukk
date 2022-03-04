@props(['value'])

<label {{ $attributes->merge(['class' => 'form-label mb-2 font-bold']) }}>
    {{ $value ?? $slot }} <span class="text-red-500">*</span>
</label>