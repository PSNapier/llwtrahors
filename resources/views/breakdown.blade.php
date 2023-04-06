@extends('layouts/layout')

@section('content')
<main class="min-h-[calc(100vh-97px)] w-5/6 pt-2 text-lg">
	<section>
		<div class="relative h-screen">
			<div id="breakdown-hooves" class="breakdown"></div>
			<div id="breakdown-body" class="breakdown"></div>
			<div id="breakdown-bodygwelwmin" class="breakdown"></div>
			<div id="breakdown-eye" class="breakdown"></div>
			<div id="breakdown-slime" class="breakdown"></div>
			<div id="breakdown-lines" class="breakdown"></div>
		</div>

		<div class="pb-20">
			<div id="body-color-preview" class="w-[129px] h-[10px]"></div>
			<input id="body-color" type=range min="15" max="25" oninput="updateBodyColour(this.value)" />
		</div>
	</section>
</main>

<script>
	const bodyColorPreview = document.getElementById('body-color-preview');
	const hues = ['hsl(15, 20%, 32%)', 'hsl(25, 20%, 32%)'];
	bodyColorPreview.style.backgroundImage = `linear-gradient(to right, ${hues[0]}, ${hues[1]})`;

	// get input range value
	function updateBodyColour(x) {
		const hsl = `hsl(${x}, 20%, 32%)`;
		const hslGwelw = `hsl(${x}, 20%, 50%)`;
		document.getElementById('breakdown-body').style.backgroundColor = `${hsl}`;
		document.getElementById('breakdown-bodygwelwmin').style.backgroundColor = `${hslGwelw}`;
	}
	updateBodyColour(20);
</script>
@endsection