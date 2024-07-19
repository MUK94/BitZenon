<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<meta name="csrf-token" content="{{ csrf_token() }}">

			<title>Admin | {{ config('app.name', 'Bonnafaire') }}</title>

			{{-- Tailwind --}}
			<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

			<link rel="icon" type="image/x-icon" href="{{ asset('favicon-pro.png') }}">



			<!-- Fonts -->
			{{-- <link rel="preconnect" href="https://fonts.bunny.net">
			<link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" /> --}}

			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

			<link rel="preconnect" href="https://fonts.googleapis.com">
			<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
			<link href="https://fonts.googleapis.com/css2?family=Lexend+Deca:wght@200;300;500;600;700&family=Roboto:wght@100;300;400;500;700&display=swap" rel="stylesheet">
			<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">

			<link rel="stylesheet" href="{{ asset('css/_variables.css') }}">
			<link rel="stylesheet" href="{{ asset('css/styles.css') }}">
			<link rel="stylesheet" href="{{ asset('css/detail.css') }}">
			<link rel="stylesheet" href="{{ asset('css/contact.css') }}">
			<link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">


	</head>
	<body>
		<header class="header-section">
			@include('layouts.navigation')
		</header>
		<main class="main-content">
			@yield('content')
		</main>
			<!-- Footer -->
	<footer class="footer">
		<div class="container content-layout">
			<div class="raw">
				<div class="col">
					<div class="box">
						<h3>Bonnafaire</h3>
						<ul class="box">
							<li>Le meilleur site de mise en relation en <br>République de Guinée.</li>
							<li><i class="fa-solid fa-phone"></i>+224 621149477</li>
							<li><i class="fa-solid fa-location-dot"></i>Kipe, Centre Emetteur</li>
							<li><a href="mailto:contact@bonnafaire.com"><i class="fa-solid fa-envelope"></i>contact@bonnafaire.com</a></li>
						</ul>
					</div>
				</div>
				<div class="col ">
					<h3>Catégories</h3>
					<ul class="box">
						@foreach ($categories as $category)
							<li><a href="/categories/{{ $category->slug }}">{{ $category->name }}</a></li>
						@endforeach
					</ul>
				</div>
				<div class="col ">
					<h3>A Propos</h3>
					<ul class="box">
						<li class="footer-link"><a href="#">Tarification</a></li>
						<li class="footer-link"><a href="#">Devenir Vendeur</a></li>
						<li class="footer-link"><a href="#">Notre Histoire</a></li>
						<li class="footer-link"><a href="#">Notre Mission</a></li>
						<li class="footer-link"><a href="#">Offre d'Emploi</a></li>
					</ul>
				</div>
				<div class="col ">
					<h3>Aide & Support</h3>
					<ul class="box">
						<li class="footer-link"><a href="#">FAQs</a></li>
						<li class="footer-link"><a href="#">Comment Vendre?</a></li>
						<li class="footer-link"><a href="#">Contactez-Nous</a></li>
						<li class="footer-link"><a href="#">Terms & Conditions</a></li>
					</ul>
				</div>
			</div>
			</div>
		<div class="container content-layout">
			<div class="copyright">
				<div class="text">
					© 2024 Bonnafaire All Rights Reserved
				</div>
				<div class="social">
					<a href="#"><i class="fa-brands fa-facebook"></i></a>
					<a href="#"><i class="fa-brands fa-linkedin"></i></a>
					<a href="#"><i class="fa-brands fa-twitter"></i></a>
					<a href="#"><i class="fa-brands fa-youtube"></i></a>
					<a href="#"><i class="fa-brands fa-instagram"></i></a>
				</div>
			</div>
		</div>

	<script src="{{ asset('js/scripts.js') }}"></script>
	</footer>
	</body>
</html>
