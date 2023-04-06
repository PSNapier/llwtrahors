@extends('layouts/layout')

@section('content')
<main class="min-h-[calc(100vh-97px)] w-5/6 pt-2 text-lg">
	<section>
		<div class="relative h-screen">
			<div id="breakdown-hooves" class="breakdown"></div>
			<div id="breakdown-body" class="breakdown"></div>
			<div id="breakdown-eye" class="breakdown"></div>
			<div id="breakdown-slime" class="breakdown"></div>
			<div id="breakdown-lines" class="breakdown"></div>
		</div>
	</section>
</main>
@endsection