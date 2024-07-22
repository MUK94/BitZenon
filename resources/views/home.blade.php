@extends('layouts.app')
<title>{{ $title }} | BitZenon </title>
@section('content')
    <section class="content-layout">
        <div class="landing">
            <div class="left">
                <h1>BitZenon - Your Source for Tech Knowledge and Digital Solutions</h1>
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
                            <span><i class="fa-regular fa-clock"></i> 3 min read</span>
                            <span> <i class="fa-regular fa-eye"></i> {{ $article->view_count }}</span>
                            <span> <i class="fa-regular fa-comment"></i> 45</span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <section class="section-container content-layout">
        <div class="title">
            <h2>Our <span>Services</span></h2>
        </div>
        <div class="container">
            <div class="services-wrapper">

                <!-- Business App Development -->
                <div class="service-card">
                    <h3 class="service-title">Business Apps</h3>
                    <p class="service-description">Designed for projects of any scope and complexity.</p>
                    <ul class="pricing-options">
                        <li><strong>Fixed Price:</strong> Based on project scope.</li>
                        <li><strong>Hourly Rate:</strong> Ongoing or less-defined work.</li>
                        <li><strong>Value-Based Pricing:</strong> Based on project impact.</li>
                    </ul>
                    <div class="card-detail">
                        <h4 class="included-title">What's Included:</h4>
                        <ul class="included-list">
                            <li><i class="fa-regular fa-circle-check"></i> Requirements gathering</li>
                            <li><i class="fa-regular fa-circle-check"></i> Design and development</li>
                            <li><i class="fa-regular fa-circle-check"></i> Testing</li>
                            <li><i class="fa-regular fa-circle-check"></i> Deployment</li>
                            <li><i class="fa-regular fa-circle-check"></i> Post-launch support & Training</li>
                        </ul>
                        <div class="service-btn">
                            <a href="/contact">Contact Us</a>
                        </div>
                    </div>
                </div>

                <!-- Web Development -->
                <div class="service-card">
                    <h3 class="service-title">Web Development</h3>
                    <p class="service-description">Build and enhance your web presence with tailored solutions.</p>
                    <ul class="pricing-options">
                        <li><strong>Fixed Price:</strong> Complete project builds.</li>
                        <li><strong>Hourly Rate:</strong> Additional features or integration.</li>
                        <li><strong>Package Deals:</strong> Various levels of support.</li>
                    </ul>
                    <div class="card-detail">
                        <h4 class="included-title">What's Included:</h4>
                        <ul class="included-list">
                            <li><i class="fa-regular fa-circle-check"></i> Custom design/ Laravel/Diango</li>
                            <li><i class="fa-regular fa-circle-check"></i> Responsive development</li>
                            <li><i class="fa-regular fa-circle-check"></i> CMS integration (WordPress)</li>
                            <li><i class="fa-regular fa-circle-check"></i> SEO basics</li>
                            <li><i class="fa-regular fa-circle-check"></i> Initial content upload</li>
                            <li><i class="fa-regular fa-circle-check"></i> Basic support (3 Months Free)</li>
                        </ul>
                        <div class="service-btn">
                            <a href="/contact">Contact Us</a>
                        </div>
                    </div>
                </div>

                <!-- Process and Business Automation -->
                <div class="service-card">
                    <h3 class="service-title">Process Automation</h3>
                    <p class="service-description">Automate your business processes for efficiency.</p>
                    <ul class="pricing-options">
                        <li><strong>Fixed Price:</strong> Predefined projects et well detailed.</li>
                        <li><strong>Hourly Rate:</strong> Consultation and implementation.</li>
                        <li><strong>Subscription:</strong> Ongoing support & Training.</li>
                    </ul>
                    <div class="card-detail">
                        <h4 class="included-title">What's Included:</h4>
                        <ul class="included-list">
                            <li><i class="fa-regular fa-circle-check"></i> Process analysis</li>
                            <li><i class="fa-regular fa-circle-check"></i> Solution design</li>
                            <li><i class="fa-regular fa-circle-check"></i> Implementation</li>
                            <li><i class="fa-regular fa-circle-check"></i> Testing</li>
                            <li><i class="fa-regular fa-circle-check"></i> Training and documentation</li>
                        </ul>
                        <div class="service-btn">
                            <a href="/contact">Contact Us</a>
                        </div>
                    </div>
                </div>

                <!-- Data Analytics and Visualization -->
                <div class="service-card">
                    <h3 class="service-title">Analytics & Visualization</h3>
                    <p class="service-description">Turn your data into actionable insights.</p>
                    <ul class="pricing-options">
                        <li><strong>Fixed Price:</strong> Specific projects and well defined.</li>
                        <li><strong>Hourly Rate:</strong> Analysis and consulting.</li>
                        <li><strong>Retainer:</strong> Ongoing support & Training.</li>
                    </ul>
                    <div class="card-detail">
                        <h4 class="included-title">What's Included:</h4>
                        <ul class="included-list">
                            <li><i class="fa-regular fa-circle-check"></i> Data collection and cleaning</li>
                            <li><i class="fa-regular fa-circle-check"></i> Analysis and insights</li>
                            <li><i class="fa-regular fa-circle-check"></i> Custom visualizations</li>
                            <li><i class="fa-regular fa-circle-check"></i> Dashboard creation</li>
                            <li><i class="fa-regular fa-circle-check"></i> Report generation</li>
                        </ul>
                        <div class="service-btn">
                            <a href="/contact">Contact Us</a>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
@endsection
