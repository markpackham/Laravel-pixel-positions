{{-- Get random images off picusm with random seed --}}
{{-- We only need to provide a width to get square shaped images since same value used in height --}}
@props(['width'=> 90])
<img src="http://picsum.photos/seed/{{rand(0,10000)}}/{{$width}}" alt="" class="rounded-xl">
