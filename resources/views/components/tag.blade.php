@props(['size' => 'base'])

@php
    // Base classes
    $classes = "bg-gray-400 hover:bg-gray-800 px-2 py-1 rounded-xl text-xs";

    // Adjust classes based on size
    if ($size === 'base') {
        $classes .= " px-5 py-1 text-lg";
    }
    if ($size === 'small') {
        $classes .= " px-3 py-1 text-xs";
    }
@endphp

<a href="#" class="{{ $classes }}">{{ $slot }}</a>





