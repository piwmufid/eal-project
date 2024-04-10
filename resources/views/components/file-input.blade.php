@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge([
    'class' => 'focus:border-sky-700 file:mr-4 file:py-2 file:px-4
                file:rounded-md file:border-0
                file:text-sm hover:file:bg-sky-500 hover:file:text-white focus:border-sky-700 focus:ring-sky-700 shadow-sm',
]) !!}>
