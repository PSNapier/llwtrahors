@extends('layouts/layout')

@section('content')
<main class="min-h-[calc(100vh-97px)] w-5/6 pt-2 grid grid-cols-1 gap-7 text-lg">
	{{-- Index --}}
	<section id="index" class="select-none">
		<ul>
			{{-- <li><a href="{{ url('#rarities') }}"><span class="text-green-500">ᛚᛖ</span> <span class="capitalize font-semibold">rarities</span></a></li> --}}
			<li><a href="{{ url('#gwelw') }}"><span class="text-green-500">ᛚᛖ</span> <span class="capitalize font-semibold">gwelw</span></a></li>
			<li><a href="{{ url('#bases') }}"><span class="text-green-500">ᛚᛖ</span> <span class="capitalize font-semibold">bases</span></a></li>
			<li>
				<ul class="[&>*]:ml-7 [&>*]:capitalize">
					<li><a href="{{ url('#stori') }}"><span class="text-green-500">⨁</span> stori</a></li>
					<li><a href="{{ url('#siocled') }}"><span class="text-green-500">⨁</span> siocled</a></li>
					<li><a href="{{ url('#bae') }}"><span class="text-green-500">⨁</span> bae</a></li>
					<li><a href="{{ url('#llaid') }}"><span class="text-green-500">⨁</span> llaid</a></li>
					<li><a href="{{ url('#du') }}"><span class="text-green-500">⨁</span> du</a></li>
				</ul>
			</li>
			<li><a href="{{ url('#cream') }}"><span class="text-green-500">ᛚᛖ</span> <span class="capitalize font-semibold">cream</span></a></li>
			<li><a href="{{ url('#butter') }}"><span class="text-green-500">ᛚᛖ</span> <span class="capitalize font-semibold">butter</span></a></li>
		</ul>
	</section>

	{{-- <section id="rarities">
		<h1>Rarities</h1>
		<p>Fancy graph generated from logbook stats to be added~ 📊</p>
	</section> --}}

	{{-- Gwelw --}}
	<section id="gwelw">
		<h1>Gwelw</h1>
		<p>Similiar to pangare, gwelw lightens the muzzle, throatlatch, girth area and canons of the horse, up to the entire underline. Dom/rec does not affect appearance.</p>
		<p class="italic">NOTE: All examples are shown with <a href="#gwelw" class="underline">gwelw</a> unless otherwise specified</p>
		<div class="grid lg:grid-cols-2 gap-4 mt-4">
			<x-genetics-base-example name="gwelw min" genes="GG/nG" />
			<x-genetics-base-example name="gwelw max" genes="GG/nG" />
		</div>
	</section>

	{{-- Bases --}}
	<section id="bases">
		<h1>Bases</h1>
		<div class="grid lg:grid-cols-2 gap-4 mt-4">
			<x-genetics-base-example name="stori" genes="ee AA/Aa/aa" />
			<x-genetics-base-example name="siocled" genes="EbEb/EbE/Ebe AA/Aa" />
			<x-genetics-base-example name="bae" genes="EE/Ee AA/Aa" />
			<x-genetics-base-example name="llaid" genes="EbEb/EbE/Ebe aa" />
			<x-genetics-base-example name="du" genes="EE/Ee aa" />
		</div>
	</section>

	{{-- Cream --}}
	<section id="cream">
		<h1>Cream <span class="normal-case text-sm">(CrCr)</span></h1>
		<div class="grid lg:grid-cols-2 gap-4 mt-4">
			<x-genetics-base-example name="cream stori" genes="ee AA/Aa/aa CrCr" />
			<x-genetics-base-example name="cream siocled" genes="EbEb/EbE/Ebe AA/Aa CrCr" />
			<x-genetics-base-example name="cream bae" genes="EE/Ee AA/Aa CrCr" />
			<x-genetics-base-example name="cream llaid" genes="EbEb/EbE/Ebe aa CrCr" />
			<x-genetics-base-example name="cream du" genes="EE/Ee aa CrCr" />
		</div>
	</section>

	{{-- Butter --}}
	<section id="butter">
		<h1>Butter <span class="normal-case text-sm">(nCr)</span></h1>
		<div class="grid lg:grid-cols-2 gap-4 mt-4">
			<x-genetics-base-example name="butter stori" genes="ee AA/Aa/aa nCr" />
			<x-genetics-base-example name="butter siocled" genes="EbEb/EbE/Ebe AA/Aa nCr" />
			<x-genetics-base-example name="butter bae" genes="EE/Ee AA/Aa nCr" />
			<x-genetics-base-example name="butter llaid" genes="EbEb/EbE/Ebe aa nCr" />
			<x-genetics-base-example name="butter du" genes="EE/Ee aa nCr" />
		</div>
	</section>
</main>
@endsection
