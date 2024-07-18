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
                    <div class="slide">
                        <div class="box">
                            <div class="tags">
                                <a href="#"><span>PowerApps</span></a> <a href="#"><span>Copilot</span></a>
                            </div>
                            <a href="#">
                                <div class="side-articles side-slider">
                                    <h3>The Future of AI: How Artificial Intelligence is Shaping Our World</h3>
                                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repudiandae nam sapiente
                                        tenetur
                                        odio...</p>
                                    <img src="https://img.freepik.com/free-photo/portrait-relaxed-man-sitting-desk-table-living-room-working-remote-from-home-financial-project-using-laptop-computer-online-webinar-freelancer-guy-having-business-lesson_482257-37964.jpg?t=st=1721156626~exp=1721160226~hmac=a6fa32340b894e40f802d79b9ef73f611ba3c85dbdad5e1e426e4abbb576e293&w=900"
                                        alt="Mouctar">
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="slide">
                        <div class="box">
                            <div class="tags">
                                <a href="#"><span>PowerApps</span></a> <a href="#"><span>Copilot</span></a>
                            </div>
                            <a href="#">
                                <div class="side-articles side-slider">
                                    <h3>The Future of AI: How Artificial Intelligence is Shaping Our World</h3>
                                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repudiandae nam sapiente
                                        tenetur
                                        odio...</p>
                                    <img src="https://img.freepik.com/free-photo/portrait-relaxed-man-sitting-desk-table-living-room-working-remote-from-home-financial-project-using-laptop-computer-online-webinar-freelancer-guy-having-business-lesson_482257-37964.jpg?t=st=1721156626~exp=1721160226~hmac=a6fa32340b894e40f802d79b9ef73f611ba3c85dbdad5e1e426e4abbb576e293&w=900"
                                        alt="Mouctar">
                                </div>
                            </a>
                        </div>
                    </div>
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
                    web development using Laravel to create dynamic, scalable web solutions tailored to our clients' unique
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
                    <img src="https://img.freepik.com/free-photo/businesspeople-working-finance-accounting-analyze-financi_74952-1411.jpg?t=st=1721339672~exp=1721343272~hmac=aa99130f3ecde2a7f5403745a7238ddee14f6e3d12048ce63458cb7407f6294a&w=900"
                        alt="">
                    <div class="description">
                        <div class="tags">
                            <a href="#"><span>PowerApps</span></a> <a href="#"><span>Copilot</span></a>
                        </div>
                        <div class="text">
                            <a href="#"><h2>{{ $article->title }}</h2></a>
									 <p>{{ $article->description }}</p>
                            <span>{{ $article->created_at->diffForHumans() }}</span>
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
