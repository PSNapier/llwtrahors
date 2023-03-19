<div {{ $attributes->merge(['class' => '']) }}>
	<div id="{{$name}}" class="bg-neutral-200 bg-opacity-50 rounded-xl">
		<a href="images/examples/{{$name}}.webp">
			<h2 class="pl-3 pt-1"><span class="capitalize">{{$name}}</span> <span class="text-xs">({{$genes}})</span></h2>
			<div>
				<div><img src="images/examples/{{$name}}.webp" class="minw-[500px] " defer /></div>
			</div>
		</a>
	</div>
</div>
