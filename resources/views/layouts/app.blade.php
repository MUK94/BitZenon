<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('inc.head')
    <title>Home | BitZenon</title>

    @livewireStyles
</head>

<body>
    <header class="header-section">
        @include('layouts.navigation')
    </header>
    <main class="main-content">
        @yield('content')
    </main>
    <!-- Footer -->
    @include('inc.footer')
    @livewireScripts
	 @livewire('quote-form')
</body>

</html>
