@props(['active'])

@php
$classes = ($active ?? false)
            ? 'block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white transition duration-150 ease-in-out'
            : 'block px-4 py-2 bg-violet-300 hover:bg-gray-400 dark:hover:bg-gray-800 dark:hover:text-white transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
