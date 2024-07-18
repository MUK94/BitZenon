
@extends('layouts.app')
<title>{{ $title }} | Bonnafaire </title>

@section('content')
{{-- {{ dd($query, $services)}} --}}
	<div class="recommended-container content-layout">
		<div class="title">
			<h2> Resultat:  {{ $search }} <span>({{ $search_services->count() }})</span> </h2>
		</div>
		<div class="container">

			@foreach ($search_services as $service)
				<div class="card">
					<div>
						<div class="image">
							<img src="{{ asset('storage/'.$service->cover_image) }}" alt="" srcset="">
						</div>
						<div class="detail">


							<a href="/categories/{{ $service->slug }}"><span class="cat"> {{ $service->category }}</span></a>
							<h3><a href="{{ route('serviceListings.detail', ['slug'=>$service->title_slug]) }}">{{ $service->title }}</a></h3>
							<div class="raw">
								<div class="owner">
									<img src="{{ asset('img/user.png') }}" alt="">
									<span>{{ explode(" ", $service->user->name)[0] }}</span>
								</div>
								<div class="review">
									<i class="fa-solid fa-star"></i><span> 5.0 (9 reviews)</span>
								</div>
							</div>
							<div class="price">
								<button href="#">A partir de <span>{{ $service->price }} FG</span></button>
							</div>
						</div>
					</div>
				</div>
			@endforeach
		</div>
	</div>
@endsection
