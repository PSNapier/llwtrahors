<div {{ $attributes->merge(['class' => '']) }}>
	<nav class="p-2">
		<ul class="flex flex-wrap gap-4 justify-center text-lg uppercase font-semibold [&>*]:min-w-fit">
			<div class="font-bold text-green-500">Llwtrahors</div>
			<li class="accent-shadow"><a href="{{ url('/') }}">Lore</a></li>
			<li class="accent-shadow"><a href="{{ url('/') }}">Getting Started</a></li>
			<li class="accent-shadow"><a href="{{ url('/') }}">Genetics</a></li>
			<li class="accent-shadow"><a href="{{ url('/') }}">Logbook</a></li>
			<li class="accent-shadow"><a href="{{ url('/') }}">Leaderboards</a></li>
		</ul>
	</nav>
</div>
