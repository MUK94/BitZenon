@extends('layouts.app')
<title>{{ $title }} | BitZenon </title>
@section('content')
    <section class="content-layout">
        <div class="landing">
            <div class="left">
                @foreach ($heroSection as $hero)
                    <h1>{{ $hero->title }}</h1>
                    <img src="{{ asset('storage/' . $hero->image) }}" alt="{{ $hero->title }}">
                    <button class="btn-angle-down">
                        <i class="fa-solid fa-angle-down"></i>
                    </button>
                @endforeach
            </div>
            <div class="right sidebar">
                <div class="slider">
                    @foreach ($mostPopular as $article)
                        <div class="slide">
                            <div class="box">
                                <div class="tags pb-2">
                                    <a
                                        href="/categories/{{ $article->category->slug }}"><span>{{ $article->category->name }}</span></a>
                                </div>
                                <a href="/blog/{{ $article->slug }}">
                                    <div class="side-articles side-slider">
                                        <h3>{{ $article->title }}</h3>
                                        <p>
                                            {!! strlen($article->description) > 100 ? substr($article->description, 0, 100) . '...' : $article->description !!}
                                        </p>
                                        <img src="{{ asset('storage/' . $article->cover_image) }}"
                                            alt="{{ $article->title }}">
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endforeach
                    <!-- silder  buttons and dots -->
                    <button aria-label="none" class="slider__btn slider__btn--left"><i
                            class="fa-solid fa-angle-left"></i></button>
                    <button aria-label="none" class="slider__btn slider__btn--right"><i
                            class="fa-solid fa-angle-right"></i></button>

                    <div class="dots mt-2"></div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-container content-layout">
        <div class="title">
            <h2>About <span>Us</span></h2>
        </div>
        @foreach ($aboutSection as $about)
            <div class="container about">
                <div class="box">
                    <div class="heading">
                        <i class="fa-regular fa-building"></i>
                        <h3>StartUp</h3>
                    </div>
                    <p>
                        {{ $about->intro }}</p>
                </div>
                <div class="box">
                    <div class="heading">
                        <i class="fa-regular fa-lightbulb"></i>
                        <h3> Mission</h3>
                    </div>
                    <p>
                        {{ $about->mission }}</p>
                </div>
                <div class="box">
                    <div class="heading">
                        <i class="fa-solid fa-code"></i>
                        <h3>Expertise</h3>
                    </div>
                    <p>
                        {{ $about->expertise }}</p>
                </div>
                <div class="box">
                    <div class="heading">
                        <i class="fa-solid fa-asterisk"></i>
                        <h3> Why Choose us?</h3>
                    </div>
                    <p>
                        {{ $about->goal }}</p>
                </div>
            </div>
        @endforeach
    </section>

    <section class="section-container mb-12">
        <div class="content-layout">
            <div class="title">
                <h2>Our <span>Services</span></h2>
            </div>
            <div class="service-desc py-2 text-center">
                <p class="px-4 italic text-xl text-gray-700">
                    "Designed for projects of any scope and complexity, Build and enhance your web presence with tailored
                    solutions. Automate your business processes for efficiency, Turn your data into actionable insights."
                </p>
            </div>
        </div>

        @include('inc.services-section')
    </section>

    <section class="section-container content-layout">
        <div class="title">
            <h2> Latest <span>Posts</span></h2>
        </div>
        <div class="container posts">
            {{-- Grid Layout --}}
            @include('inc.latest-posts')
        </div>
    </section>
@endsection
