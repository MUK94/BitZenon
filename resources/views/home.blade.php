@extends('layouts.app')
<title>{{ $title }} | BitZenon </title>
@section('content')
    <section class="content-layout">
        <div class="landing">
            <div class="left">
                <h1>Your Source for Tech Knowledge and Digital Solutions</h1>
                <img src="https://img.freepik.com/free-photo/futuristic-portrait-young-girl-with-high-tech_23-2151133520.jpg?t=st=1721157300~exp=1721160900~hmac=1922307cb1889e9aad6b771683a99e0f16c8380df68f5c9490caa6a3bf24aba2&w=1060"
                    alt="article title">
                <button class="btn-angle-down">
                    <i class="fa-solid fa-angle-down"></i>
                </button>
            </div>
            <div class="right sidebar">
                <div class="slider">
                    @foreach ($sidebarArticles as $article)
                        <div class="slide">
                            <div class="box">
                                <div class="tags">
                                    <a
                                        href="/categories/{{ $article->category->slug }}"><span>{{ $article->category->name }}</span></a>
                                </div>
                                <a href="/articles/{{ $article->slug }}">
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

                    <div class="dots"></div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-container content-layout">
        <div class="title">
            <h2>About <span>Us</span></h2>
        </div>
        <div class="container about">
            <div class="box">
                <div class="heading">
                    <i class="fa-regular fa-building"></i>
                    <h3>StartUp</h3>
                </div>
                <p>
                    At BitZenon, we blend the latest tech insights with practical digital solutions to keep you ahead in the
                    evolving tech landscape. Experience cutting-edge technology and innovative solutions with us.
                </p>
            </div>
            <div class="box">
                <div class="heading">
                    <i class="fa-regular fa-lightbulb"></i>
                    <h3> Mission</h3>
                </div>
                <p>
                    Our mission is to empower businesses and individuals with the tools and knowledge to succeed in the
                    digital world. From the latest tech articles and insightful podcasts to expert digital project support,
                    BitZenon is your go-to destination.
                </p>
            </div>
            <div class="box">
                <div class="heading">
                    <i class="fa-solid fa-code"></i>
                    <h3>Expertise</h3>
                </div>
                <p>
                    We specialize in diverse technological services, including business app development and process
                    automation with Microsoft Power Platform to enhance productivity. Additionally, we excel in full stack
                    web development using Laravel and Django to create dynamic, scalable web solutions tailored to our
                    clients' unique
                    needs.
                </p>
            </div>
            <div class="box">
                <div class="heading">
                    <i class="fa-solid fa-asterisk"></i>
                    <h3> Why Choose us?</h3>
                </div>
                <p>
                    We offer innovative solutions by staying at the forefront of technology trends. Our expert team delivers
                    high-quality, tailored services, and our comprehensive suite of offerings—from tech articles and
                    podcasts to full-scale digital projects—supports your entire digital journey.
                </p>
            </div>
        </div>
    </section>

    <section class="section-container content-layout">
        <div class="title">
            <h2> Latest <span>Posts</span></h2>
        </div>
        <div class="container posts">
            @foreach ($latestArticles as $article)
                <div class="post">
                    <a href="/articles/{{ $article->slug }}">
                        <img src="{{ asset('storage/' . $article->cover_image) }}" alt="{{ $article->title }}">
                    </a>
                    <div class="description">
                        <div class="tags">
                            <a
                                href="/categories/{{ $article->category->slug }}"><span>{{ $article->category->name }}</span></a>
                        </div>
                        <div class="text mb-4">
                            <a href="/articles/{{ $article->slug }}">
                                <h2>{{ $article->title }}</h2>
                            </a>
                        </div>
                        <div class="meta-data">
									<span class="">{{ $article->created_at->diffForHumans() }}</span>
									<span>3 min <i class="fa-brands fa-readme"></i></span>
                            <span>1044 <i class="fa-regular fa-eye"></i></span>
                            <span>45 <i class="fa-regular fa-comment"></i></span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <section class="section-container content-layout">
        <div class="title">
            <h2>My <span>Services</span></h2>
        </div>
        <div class="container">
        </div>
    </section>
@endsection
