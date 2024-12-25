@extends('layouts.app')
<title>{{ $title }} | {{ config('app.name') }} </title>
@section('content')
    <section class="content-layout header-container">
        <div class="landing pt-6">
            <div class="left">
                @foreach ($heroSection as $hero)
                    {{-- <h1 class="hero-title">{{ $hero->title }}</h1> --}}
                    <div class="hero-container">
                        <img src="{{ asset('storage/' . $hero->image) }}" alt="{{ $hero->title }}">
                        <button class="btn-angle-down" onclick="scrollToBottom()">
                            <i class="fa-solid fa-angle-down"></i>
                        </button>
                    </div>
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

    <section class="section-container content-layout scrollable-content">
        <div class="title">
            <h2>About <span>me</span></h2>
        </div>
        <div class="about-container pt-8 mb-12">
            @foreach ($aboutSection as $about)
                <div class="pt-8 pb-16 w-full flex justify-between items-center gap-8 relative">
                    <img class="w-1/2 h-96 object-cover" src="{{ asset('storage/' . $about->image) }}"
                        alt="{{ $about->name }}">
                    <div class="w-1/2 flex flex-col">
                        <div class="flex flex-col">
                            <span>{{ $about->name }}</span>
                            <div class="about-social-links mb-6">
                                <p class="custom-blue-color-1 text-3xl font-bold mb-1">{{ $about->title }}</p>
                                @include('inc.social-media')
                            </div>
                            <p class="mb-2 mr-6">
                                {{ $about->description }}
                            </p>
                            <div class="btns flex justify-around gap-2">
                                <button class="btn btn-primary  about-btn my-4"><a class="px-2"
                                        href="https://linkedin.com/in/thierno-dev">Read
                                        More <i class="ml-1 fa-solid fa-arrow-up-right-from-square"></i></a></button>
                                <button class="btn btn-secondary  about-btn my-4"><a class="px-2" href="#">Download
                                        CV <i class="ml-1 fa-solid fa-cloud-arrow-down"></i></a></button>
                                <button class="btn btn-tertiary  about-btn my-4"><a class="px-2" href="#">Call me <i
                                            class="mb-2 text-3xl text-white fa-solid fa-phone"></i></a></button>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        {{-- @include('inc.about-section') --}}
    </section>

    <section class="section-container mb-12">
        <div class="content-layout">
            <div class="title">
                <h2>My<span> Services</span></h2>
            </div>
            <div class="service-desc text-center">
                <p class="px-4 italic text-xl">
                    "Designed for projects of any scope and complexity, Build and enhance your web presence with tailored
                    solutions. Automate your business processes for efficiency, Turn your data into actionable insights."
                </p>
            </div>
            @include('inc.services-section')
            @include('inc.testimonials')
        </div>
    </section>

    <section class="section-container content-layout">
        <div class="title">
            <h2> Latest <span>Posts</span></h2>
        </div>
        <div class="container posts">

            @include('inc.latest-posts')
        </div>
    </section>
@endsection
