@extends('layouts.app')
<title>{{ $title }} | BitZenon </title>
@section('content')
    <div class="content-layout">
        <div class="container article-post">
            <div class="headings">
                <h2>About <span>Us</span></h2>
            </div>
            <div class="contact-container pt-8 mb-12">
                @foreach ($aboutSection as $about)
					 <div class="pt-8 pb-16 w-full flex justify-between items-center gap-12 relative">
						<img class="w-1/2 h-96 object-cover" src="{{ asset('storage/' . $about->image) }}" alt="{{ $about->name }}">
						<div class="w-1/2 flex flex-col">
							<div class="flex flex-col">
								<span>{{$about->name}}</span>
								<div class="about-social-links mb-6">
									<h3 class="custom-blue-color-1 text-4xl ">{{ $about->title }}</h3>
									@include('inc.social-media')
								</div>
								  <p class="mb-2 mr-6">
										{{ $about->description }}
								  </p>
								  <div class="btns flex gap-2">
										<button class="btn btn-primary about-btn my-4">Hire Me</button>
										<button class="btn btn-secondary about-btn my-4">Download CV</button>
										<button class="btn btn-secondary about-btn my-4">Book a Meeting</button>
								  </div>
							 </div>
						</div>
				  </div>

                @endforeach
            </div>
            @include('inc.about-section')
        </div>
    </div>
@endsection
