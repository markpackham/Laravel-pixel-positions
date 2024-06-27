{{-- Get random images off picusm with random seed --}}
{{-- We only need to provide a width to get square shaped images since same value used in height --}}
@props(['employer','width'=> 90])
<img src="{{$employer->logo}}" alt="{{$employer->name}}" class="rounded-xl">
