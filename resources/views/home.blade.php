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
                                            @excerpt($article->description)
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
        @include('inc.about-section')
    </section>

    <section class="section-container mb-12">
        <div class="content-layout">
            <div class="title">
                <h2>Our <span>Services</span></h2>
            </div>
            <div class="service-desc py-2 text-center">
                <p class="px-4 italic text-xl">
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
