@props(['tag','size'=>'base'])

@php
$classes = 'bg-white/10 hover:bg-white/25 rounded-xl font-bold transition-colors duration-300';

    if($size === 'base'){
        // Leave a space at start so they aren't merged when concatinating to the rest of the class string
        $classes .= " px-5 py-1 text-sm";
    }

    if($size === 'small'){
        $classes .= " px-3 py-1 text-2xs";
    }
@endphp

<a href="/tags/{{strtolower($tag->name)}}" class="{{$classes}}">{{$tag->name}}</a>
