@extends('layouts/layout')

@section('content')
<main class="min-h-[calc(100vh-97px)] pt-2">
	{{-- <p class="p-3">Temporary genetics page for Llwtrahors. 🌿</p> --}}
	<nav id="index select-none">
		<ul>
			<li><a href="{{ url('#bases') }}"><span class="text-green-500">ᛚᛖ</span> <span class="font-semibold">Bases</span></a></li>
			<li>
				<ul class="[&>*]:ml-7 [&>*]:capitalize">
					<li><a href="{{ url('#stori') }}"><span class="text-green-500">ᛚᛖ</span> stori</a></li>
					<li><a href="{{ url('#bae') }}"><span class="text-green-500">ᛚᛖ</span> bae</a></li>
					<li><a href="{{ url('#siocled') }}"><span class="text-green-500">ᛚᛖ</span> siocled</a></li>
					<li><a href="{{ url('#llaid') }}"><span class="text-green-500">ᛚᛖ</span> llaid</a></li>
					<li><a href="{{ url('#du') }}"><span class="text-green-500">ᛚᛖ</span> du</a></li>
				</ul>
			</li>
		</ul>
	</nav>

	{{-- Bases --}}
	<section id="bases">
		<h1>Bases</h1>
		All examples are shown with <a href="#gwelw" class="underline">gwelw</a>.
		<x-genetics-base-example name="stori" genes="ee AA/Aa/aa" />
		<x-genetics-base-example name="bae" genes="EE/Ee AA/Aa" />
		<x-genetics-base-example name="siocled" genes="EbEb/Ebe AA/Aa" />
		<x-genetics-base-example name="llaid" genes="EbEb/Ebe aa" />
		<x-genetics-base-example name="du" genes="EE/EEb/Ee aa" />
	</section>
</main>
@endsection
