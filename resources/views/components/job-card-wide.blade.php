<div class="p-4 bg-white/5 rounded-xl flex gap-x-6">
    <div>
        {{-- Get random images off picusm with random seed --}}
        <img src="http://picsum.photos/seed/{{rand(0,10000)}}/100/100" alt="" class="rounded-xl">
    </div>

    <div class="flex-1">

        <a href="#" class="self-start text-sm text-gray-400">Laracasts</a>

        <h3>Video Producer</h3>
        <p>Full Time - $60,000</p>
    </div>

    <div>
        <x-tag>Tag</x-tag>
        <x-tag>Tag</x-tag>
        <x-tag>Tag</x-tag>
    </div>

</div>