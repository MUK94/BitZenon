<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">

{{-- SEO Meta Tags --}}
<meta name="description"
    content="Discover cutting-edge web development services with Laravel and WordPress and process automation with Microsoft Power Platform at Mouctar.com.">
<meta name="keywords"
    content="business app development, Power Platform, process automation, Laravel, tech solutions, Mouctar.com">
<meta name="author" content="Mouctar.com">
<meta property="og:title" content="Mouctar.com | Empowering your Digital Journey with Bright Solutions!">
<meta property="og:description"
    content="Stay ahead in the tech landscape with expert solutions in app development, automation, and full-stack web development.">
<meta property="og:type" content="website">
<meta property="og:url" content="{{ url()->current() }}">
<meta property="og:image" content="{{ asset('mouctar-preview.png') }}">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Mouctar.com | Empowering Digital Innovation">
<meta name="twitter:description"
    content="Cutting-edge web development services, process automation, and web business app development.">
<meta name="twitter:image" content="{{ asset('mouctar-preview.png') }}">
<meta name="robots" content="index, follow">
<meta name="language" content="English">
<meta name="revisit-after" content="7 days">

{{-- Tailwind --}}
<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

<link rel="icon" type="image/x-icon" href="{{ asset('favicon.png') }}">

{{-- Text Editor --}}
<script src="https://cdn.ckeditor.com/ckeditor5/23.0.0/classic/ckeditor.js"></script>

<!-- Fonts -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link
    href="https://fonts.googleapis.com/css2?family=Exo+2:wght@300;400;500;600&family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&family=Space+Grotesk:wght@300..700&display=swap"
    rel="stylesheet">

{{-- Custom CSS --}}
<link rel="stylesheet" href="{{ asset('css/_variables.css') }}">
<link rel="stylesheet" href="{{ asset('css/styles.css') }}">
<link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">


{{-- Google Recaptcha --}}
<script async src="https://www.google.com/recaptcha/api.js"></script>
