<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="utf-8" />
	<meta name="viewport"
		content="width=device-width, initial-scale=1" />
	<meta name="csrf-token"
		content="{{ csrf_token() }}" />

	<title>Llwtrahors</title>
	{{-- <link rel="shortcut icon"
		sizes="32x32"
		href="{{ asset('images/favicon-32x32.png') }}"> --}}
	<link rel="icon" href="data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 100 100%22><text y=%22.9em%22 font-size=%2290%22>🌿</text></svg>">

	<!-- Scripts -->
	@vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased bg-neutral-100 text-neutral-800">
	<div>
	{{-- <div class="min-h-screen min-w-fit bg-neutral-100 text-neutral-800"> --}}
		<!-- Header -->
		<x-nav />

		<main class="text-neutral">
			<div class="flex justify-center text-neutral">
				<!-- Page Content -->
				@yield('content')
			</div>
		</main>
	</div>

	<footer class="text-center p-2">
		<div>
			<p>Copyright © 2023 Abature Studio</p>
		</div>
	</footer>
</body>

</html>
