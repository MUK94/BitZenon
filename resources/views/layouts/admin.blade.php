<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('inc.head')
    <title>Admin |  {{ config('app.name') }}</title>

</head>

<body>
	<div class="admin-layout">
		<div class="dashboard-container mb-8">
			 {{-- Sidebar Menu --}}
			 @include('inc.admin-sidebar')
			 {{-- Content --}}
			 <main class="admin-content">
				<div class="admin-navbar">
					@include('layouts.nav-admin')
				</div>
				<div class="bg-gray-100 p-8 main-content">
					@yield('content')
				</div>
			 </main>
		</div>
	</div>
    @include('inc.admin-footer')
</body>

</html>
