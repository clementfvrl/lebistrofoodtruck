@props(['active'])

@php
$classes = ($active ?? false)
            ? 'block w-full ps-3 pe-4 py-2 border-l-4 border-orange-500 text-start text-base font-medium text-orange-700 dark:text-white bg-orange-50 dark:bg-orange-700/50 focus:outline-none focus:text-orange-800 dark:focus:text-white focus:bg-orange-100 dark:focus:bg-orange-700 focus:border-orange-700 dark:focus:border-orange-300 transition duration-150 ease-in-out'
            : 'block w-full ps-3 pe-4 py-2 border-l-4 border-transparent text-start text-base font-medium text-white dark:text-white hover:text-orange-800 dark:hover:text-white hover:bg-orange-50 dark:hover:bg-orange-600 hover:border-orange-300 dark:hover:border-orange-300 focus:outline-none focus:text-orange-800 dark:focus:text-white focus:bg-orange-50 dark:focus:bg-orange-600 focus:border-orange-300 dark:focus:border-orange-300 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>