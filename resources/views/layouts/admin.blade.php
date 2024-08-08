<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('inc.head')
    <title>Admin | {{ config('app.name', 'Bonnafaire') }}</title>

</head>

<body>
    <header class="header-section">
        @include('layouts.nav-admin')
    </header>
    <main class="main-content">
        @yield('content')
    </main>
    <!-- Footer -->
    @include('inc.footer')
</body>

</html>
