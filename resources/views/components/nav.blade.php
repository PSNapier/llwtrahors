<div {{ $attributes->merge(['class' => '']) }}>
	<nav class="p-2 select-none">
		<ul class="flex flex-wrap gap-5 justify-center text-lg uppercase  [&>*]:min-w-fit">
			<div class="font-bold text-green-500 mr-7">Llwtrahors</div>
			<li class="accent-shadow"><a href="{{ url('/') }}">🌿 Getting Started</a></li>
			<li class="accent-shadow"><a href="{{ url('/') }}">📚 Lore</a></li>
			<li class="accent-shadow"><a href="{{ url('/genetics') }}">🧬 Genetics</a></li>
			<li class="accent-shadow"><a href="{{ url('/') }}">📜 Logbook</a></li>
			<li class="accent-shadow"><a href="{{ url('/') }}">🏅 Leaderboards</a></li>
		</ul>
		<div class="h-[1px] mt-2 lg:mx-40 bg-gradient-to-r from-neutral-100 via-neutral-300 to-neutral-100"></div>
	</nav>
</div>
