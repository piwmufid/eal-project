@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-sky-700 focus:border-sky-700 dark:focus:border-sky-700 focus:ring-sky-700 dark:focus:ring-sky-700 rounded-md shadow-sm']) !!}>
