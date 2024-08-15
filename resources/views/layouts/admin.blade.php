<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('inc.head')
    <title>Admin |  BitZenon</title>

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
				<div class="main-content">
					@yield('content')
				</div>
			 </main>
		</div>
	</div>
    @include('inc.footer')
</body>

</html>
