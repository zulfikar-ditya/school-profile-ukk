@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => ' form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 dark:text-gray-200 bg-white dark:bg-gray-800 bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 dark:focus:text-gray-300  focus:bg-white dark:focus:bg-gray-900  focus:border-blue-600  focus:outline-none']) !!}>
