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
		<div class="grid lg:grid-cols-3 gap-4 mt-4">
			<x-genetics-base-example name="gwelw min" genes="GG/nG" />
			<x-genetics-base-example name="gwelw max" genes="GG/nG" />
		</div>
	</section>

	{{-- Bases --}}
	<section id="bases">
		<h1>Bases</h1>
		<div class="grid lg:grid-cols-3 gap-4 mt-4">
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
		<div class="grid lg:grid-cols-3 gap-4 mt-4">
			<x-genetics-base-example name="cream stori" genes="ee AA/Aa/aa CrCr" />
			<x-genetics-base-example name="cream siocled" genes="EbEb/EbE/Ebe AA/Aa CrCr" />
			<x-genetics-base-example name="cream bae" genes="EE/Ee AA/Aa CrCr" />
			<x-genetics-base-example name="cream llaid" genes="EbEb/EbE/Ebe aa CrCr" />
			<x-genetics-base-example name="cream du" genes="EE/Ee aa CrCr" />
		</div>
	</section>

	{{-- Butter --}}
	<section id="butter">
		<h1>Butter <span class="normal-case text-sm">(Crprl/nCr)</span></h1>
		<div class="grid lg:grid-cols-3 gap-4 mt-4">
			<x-genetics-base-example name="butter stori" genes="ee AA/Aa/aa Crprl/nCr" />
			<x-genetics-base-example name="butter siocled" genes="EbEb/EbE/Ebe AA/Aa Crprl/nCr" />
			<x-genetics-base-example name="butter bae" genes="EE/Ee AA/Aa Crprl/nCr" />
			<x-genetics-base-example name="butter llaid" genes="EbEb/EbE/Ebe aa Crprl/nCr" />
			<x-genetics-base-example name="butter du" genes="EE/Ee aa Crprl/nCr" />
		</div>
	</section>

	{{-- Pearl --}}
	<section id="pearl">
		<h1>Pearl <span class="normal-case text-sm">(prlprl)</span></h1>
		<div class="grid lg:grid-cols-3 gap-4 mt-4">
			<x-genetics-base-example name="pearl stori" genes="ee AA/Aa/aa prlprl" />
			<x-genetics-base-example name="pearl siocled" genes="EbEb/EbE/Ebe AA/Aa prlprl" />
			<x-genetics-base-example name="pearl bae" genes="EE/Ee AA/Aa prlprl" />
			<x-genetics-base-example name="pearl llaid" genes="EbEb/EbE/Ebe aa prlprl" />
			<x-genetics-base-example name="pearl du" genes="EE/Ee aa prlprl" />
		</div>
	</section>

	{{-- Champagne --}}
	<section id="champagne">
		<h1>Champagne <span class="normal-case text-sm">(ChCh/nCh)</span></h1>
		<div class="grid lg:grid-cols-3 gap-4 mt-4">
			<x-genetics-base-example name="champagne stori" genes="ee AA/Aa/aa ChCh/nCh" />
			<x-genetics-base-example name="champagne siocled" genes="EbEb/EbE/Ebe AA/Aa ChCh/nCh" />
			<x-genetics-base-example name="champagne bae" genes="EE/Ee AA/Aa ChCh/nCh" />
			<x-genetics-base-example name="champagne llaid" genes="EbEb/EbE/Ebe aa ChCh/nCh" />
			<x-genetics-base-example name="champagne du" genes="EE/Ee aa ChCh/nCh" />
		</div>
	</section>

	{{-- cream-liqueur --}}
	<section id="cream-liqueur">
		<h1>cream-liqueur <span class="normal-case text-sm">(CrCr ChCh/nCh)</span></h1>
		<div class="grid lg:grid-cols-3 gap-4 mt-4">
			<x-genetics-base-example name="cream-liqueur stori" genes="ee AA/Aa/aa CrCr ChCh/nCh" />
			<x-genetics-base-example name="cream-liqueur siocled" genes="EbEb/EbE/Ebe AA/Aa CrCr ChCh/nCh" />
			<x-genetics-base-example name="cream-liqueur bae" genes="EE/Ee AA/Aa CrCr ChCh/nCh" />
			<x-genetics-base-example name="cream-liqueur llaid" genes="EbEb/EbE/Ebe aa CrCr ChCh/nCh" />
			<x-genetics-base-example name="cream-liqueur du" genes="EE/Ee aa CrCr ChCh/nCh" />
		</div>
	</section>

	{{-- Butter-Beer --}}
	<section id="butter-beer">
		<h1>Butter-Beer <span class="normal-case text-sm">(Crprl/nCr ChCh/nCh)</span></h1>
		<div class="grid lg:grid-cols-3 gap-4 mt-4">
			<x-genetics-base-example name="butter-beer stori" genes="ee AA/Aa/aa Crprl/nCr ChCh/nCh" />
			<x-genetics-base-example name="butter-beer siocled" genes="EbEb/EbE/Ebe AA/Aa Crprl/nCr ChCh/nCh" />
			<x-genetics-base-example name="butter-beer bae" genes="EE/Ee AA/Aa Crprl/nCr ChCh/nCh" />
			<x-genetics-base-example name="butter-beer llaid" genes="EbEb/EbE/Ebe aa Crprl/nCr ChCh/nCh" />
			<x-genetics-base-example name="butter-beer du" genes="EE/Ee aa Crprl/nCr ChCh/nCh" />
		</div>
	</section>

	{{-- Sea-Foam --}}
	<section id="sea-foam">
		<h1>Sea-Foam <span class="normal-case text-sm">(prlprl ChCh/nCh)</span></h1>
		<div class="grid lg:grid-cols-3 gap-4 mt-4">
			<x-genetics-base-example name="sea-foam stori" genes="ee AA/Aa/aa prlprl ChCh/nCh" />
			<x-genetics-base-example name="sea-foam siocled" genes="EbEb/EbE/Ebe AA/Aa prlprl ChCh/nCh" />
			<x-genetics-base-example name="sea-foam bae" genes="EE/Ee AA/Aa prlprl ChCh/nCh" />
			<x-genetics-base-example name="sea-foam llaid" genes="EbEb/EbE/Ebe aa prlprl ChCh/nCh" />
			<x-genetics-base-example name="sea-foam du" genes="EE/Ee aa prlprl ChCh/nCh" />
		</div>
	</section>
</main>
@endsection
