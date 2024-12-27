@extends('layouts.app')
<title>{{ $title }} | {{ config('app.name') }} </title>
@section('content')
    <div class="content-layout">
        <div class="container article-post">
            <div class="headings">
                <h2>About <span>me</span></h2>
            </div>
            <div class="contact-container pt-8 mb-12">
                @include('inc.about-header')
            </div>
            @include('inc.about-section')
        </div>
    </div>
@endsection
