@php
    $classes = "p-4 bg-purple-300 rounded-xl flex gap-x-6 border border-transparent hover:border-blue-600 group transition-colors duration-100";
@endphp

<div {{$attributes(['class' => $classes])}}>
{{$slot}}
</div>