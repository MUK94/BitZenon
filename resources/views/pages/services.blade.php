@extends('layouts.app')
<title>{{ $title }} | BitZenon </title>
@section('content')
    <div class="content-layout">
        <div class="container article-post">
            <div class="headings">
                <h2>Browse our <span>Services</span></h2>
            </div>
            <div class="service-desc mt-4 py-4 text-center">
                <p class="pl-4 italic text-xl text-gray-700">
                    "Tailored to fit your digital needs, contact us and get a quote today"
                </p>
            </div>
			</div>
		</div>
		@include('inc.services-section')
@endsection
