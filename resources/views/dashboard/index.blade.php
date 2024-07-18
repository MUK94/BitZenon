@extends('layouts.app')
<title>{{ $title }} | Bonnafaire </title>
@section('content')
<div class="mx-2">
	<div class="dashboard-container">
		{{-- <div class="title"><h2>Tableau de Bord</h2></div> --}}
		<div class="raw">
			<div class="sidemenu">
				<div class="user">
					<img src="{{ asset('img/user.png') }}" alt="{{ auth()->user()->name }}">
					<h2>{{ explode(" ", auth()->user()->name)[0] }}</h2>
				</div>
				<ul class="lists">
					<li><a href="#"><i class="fa-solid fa-suitcase"></i> Services</a></li>
					<li><a href="#"><i class="fa-solid fa-user"></i> Clients</a></li>
					<li><a href="/profile"><i class="fa-solid fa-gear"></i> Paramètres</a></li>
					<li><a href="#"><i class="fa-solid fa-bell"></i> Notifications</a></li>
				</ul>
			</div>
			<div class="container">
				<h2>Bienvenu <span>{{ auth()->user()->name }}</span></h2>

				<div class="statistics">
					<div class="box">
						<div>
							<i class="fa-solid fa-suitcase"></i>
							<p>Services</p>
						</div>
						<h3>{{ $services->count() }}</h3>
					</div>
					<div class="box">
						<div>
							<i class="fa-solid fa-user"></i>
							<p>Clients</p>
						</div>
						<h3>56</h3>
					</div>
					<div class="box">
						<div>
							<i class="fa-solid fa-gear"></i>
							<p><a href="/profile">Paramètres</a></p>
						</div>
						<h3>1</h3>
					</div>
					<div class="box">
						<div>
							<i class="fa-solid fa-bell"></i>
							<p>Notifications</p>
						</div>
						<h3>12</h3>
					</div>
				</div>

				{{-- Table --}}
				<div class="table-container">
					<h2>Services <span>Admin</span></h2>
					<table class="min-w-full bg-white rounded-lg">
						<thead class="bg-gray-800 text-white">
							<tr >
								<th class="px-4 py-2  text-white">ID</th>
								<th class="px-4 py-2  text-white">Title</th>
								<th class="px-4 py-2  text-white">Edit</th>
								<th class="px-4 py-2  text-white">Delete</th>
							</tr>
						</thead>
						<tbody>
							@if ($services->count() > 0)
								@foreach ($services as $service)
								<tr>
									<td class="border px-4 py-2">{{ $service->id }}</td>
									<td class="border px-4 py-2">{{ $service->title }}</td>
									<td class="border px-4 py-2">
											<a href="{{ route('services.edit', $service) }}" class="text-blue-600 hover:text-blue-900">Edit</a>
									</td>
									<td class="border px-4 py-2">
										<form action="{{ route('services.destroy', $service) }}" method="POST">
												@csrf
												@method('DELETE')
												<button type="submit" class="text-red-600 hover:text-red-900">Delete</button>
										</form>
									</td>
								</tr>
								@endforeach

							@else
								<p class="mb-4">Vous n'avez pas encore publié de service.</p>
							@endif
						</tbody>
        			</table>
				</div>
			</div>

		</div>
	</div>
</div>

@endsection