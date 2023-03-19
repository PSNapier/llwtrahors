<div {{ $attributes->merge(['class' => '']) }}>
	<div id="{{$name}}" class="bg-neutral-200 bg-opacity-50 rounded-xl text-center p-4 h-full">
		{{-- <img src="images/items/{{$name}}.webp" class="minw-[250px] pb-2" defer /> --}}
		<h2><span class="capitalize">{{$name}}</span></h2>
		<p class="text-sm">{{$info}}</p>
	</div>
</div>
