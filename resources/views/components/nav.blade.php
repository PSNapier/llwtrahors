<div {{ $attributes->merge(['class' => '']) }}>
	<nav class="w-5/6 m-auto mb-4 select-none">
		<div class="flex flex-wrap justify-between gap-x-5 py-2 text-lg uppercase">
			<div class="font-bold text-green-500">Llwtrahors</div>
			<ul class="flex flex-wrap gap-x-5 [&>*]:min-w-fit">
				<li class="accent-shadow"><a href="{{ url('/') }}">🌿 Getting Started</a></li>
				<li class="accent-shadow"><a href="{{ url('/items') }}">💎 Items</a></li>
				<li class="accent-shadow"><a href="{{ url('/genetics') }}">🧬 Genetics</a></li>
				<li class="accent-shadow"><a href="{{ url('/') }}">📜 Logbook</a></li>
				<li class="accent-shadow"><a href="{{ url('/') }}">🏅 Leaderboards</a></li>
			</ul>
		</div>
		<div class="h-[1px] bg-gradient-to-r from-neutral-200 via-neutral-300 to-neutral-200""></div>
		{{-- <div class="h-[1px] mt-2 lg:mx-40 bg-gradient-to-r from-neutral-100 via-neutral-300 to-neutral-100"></div> --}}
	</nav>
</div>
