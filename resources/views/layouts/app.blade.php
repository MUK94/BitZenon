<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('inc.head')
    <title>Home | {{ config('app.name', 'BitZenon') }}</title>


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
    <script src="{{ asset('js/scripts.js') }}"></script>
</body>

</html>
