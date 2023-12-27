<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="author" content="Ozgur Murat Tunca @ 2023 / tunca.development@gmail.com">
		<link rel="stylesheet" href="{{asset('/styles/main.css')}}">
		<link
			rel="stylesheet"
			href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
			integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
			crossorigin="anonymous"
			referrerpolicy="no-referrer"
		/>
		<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
		<script src="https://cdn.tailwindcss.com"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>

		<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
		
	</head>
	<body class="bg-white">
		<header class="bg-white lg:fixed lg:top-0 z-50 lg:drop-shadow w-full">
			@include('partials._header')
		</header>
	 
		@if(request()->is(App::getLocale().'/projects') || request()->is(App::getLocale().'/projects/search'))
    	<x-job-list-hero class="mt-16"/>
		@endif
		<main class="relative max-w-7xl lg:mx-auto container  bg-white  p-4 items-center min-h-screen z-40 mt-16">
			{{$slot}}
		</main>

		<footer class="bg-gray-50 px-4">
			@include('partials._footer')
		</footer>
		<x-registerpop />
		<x-loginpop />
		<x-flash-msg />
	</body>
</html>
