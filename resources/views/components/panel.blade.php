@php
    $classes = 'p-4 bg-white/5 rounded-xl border border-transparent hover:border-blue-600 group transition-colors duration-300';
@endphp

{{-- Using shorthand for $attributes->merge by calling it as a function --}}
<div {{$attributes(['class'=> $classes])}}>{{$slot}}</div>