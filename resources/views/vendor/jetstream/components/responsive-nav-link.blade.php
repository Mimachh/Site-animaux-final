@props(['active'])

@php
$classes = ($active ?? false)
            ? 'rounded-full block pl-3 pr-4 py-2 border-l-4 border-indigo-400 text-sm font-medium text-indigo-700 bg-indigo-50 focus:outline-none focus:text-indigo-800 focus:bg-indigo-100 focus:border-indigo-700 transition'
            : 'rounded-full block pl-3 pr-4 py-2 border-l-4 border-transparent text-sm font-medium text-gray-500 hover:text-gray-800 hover:bg-blue-200 hover:border-gray-300 focus:outline-none focus:text-gray-800 focus:bg-blue-200 focus:border-gray-300 transition';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
