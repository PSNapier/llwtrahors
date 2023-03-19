@extends('layouts/layout')

@section('content')
<main class="min-h-[calc(100vh-97px)] w-5/6 pt-2 grid grid-cols-1 gap-7 text-lg">
	{{-- Index --}}
	<section id="index" class="select-none">
		<ul>
			<li><a href="{{ url('#vouchers') }}"><span class="text-green-500">ᛚᛖ</span> <span class="capitalize font-semibold">vouchers</span></a></li>
			<li>
				<ul class="[&>*]:ml-7 [&>*]:capitalize">
					<li><a href="{{ url('#activity vouchers') }}"><span class="text-green-500">⨁</span> <span class="capitalize font-semibold">activity voucher</span></a></li>
					<li><a href="{{ url('#breeding vouchers') }}"><span class="text-green-500">⨁</span> <span class="capitalize font-semibold">breeding voucher</span></a></li>
				</ul>
			</li>
			<li><a href="{{ url('#tokens') }}"><span class="text-green-500">ᛚᛖ</span> <span class="capitalize font-semibold">tokens</span></a></li>
			<li>
				<ul class="[&>*]:ml-7 [&>*]:capitalize">
					<li><a href="{{ url('#random import token') }}"><span class="text-green-500">⨁</span> <span class="capitalize font-semibold">random import token</span></a></li>
					<li><a href="{{ url('#custom import token') }}"><span class="text-green-500">⨁</span> <span class="capitalize font-semibold">custom import token</span></a></li>
					<li><a href="{{ url('#base reroll token') }}"><span class="text-green-500">⨁</span> <span class="capitalize font-semibold">base reroll token</span></a></li>
					<li><a href="{{ url('#slime reroll token') }}"><span class="text-green-500">⨁</span> <span class="capitalize font-semibold">slime reroll token</span></a></li>
				</ul>
			</li>
		</ul>
	</section>

	{{-- Vouchers --}}
	<section id="vouchers">
		<h1>Vouchers</h1>
		<div class="grid lg:grid-cols-3 gap-4 mt-4">
			<x-item name="activity voucher" info="These vouchers can be redeemed in the 'dailies' channel in the breed Discord with the /av command, each activity roll gives you a chance to find more items and imports! Every member can claim 1x free activity-voucher daily." />
			<x-item name="breeding voucher" info="Breeding vouchers are required to execute a breeding. Every member can claim 1x free breeding-voucher weekly." />
		</div>
	</section>

	{{-- Tokens --}}
	<section id="tokens">
		<h1>Tokens</h1>
		<div class="grid lg:grid-cols-3 gap-4 mt-4">
			<x-item name="random import token" info="n/a" />
			<x-item name="custom import token" info="n/a" />
			<x-item name="base reroll token" info="n/a" />
			<x-item name="slime reroll token" info="n/a" />
		</div>
	</section>
</main>
@endsection
