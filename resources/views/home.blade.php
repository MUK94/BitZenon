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
                <div class="post shadow-sm">
                    <a href="/blog/{{ $article->slug }}">
                        <img src="{{ asset('storage/' . $article->cover_image) }}" alt="{{ $article->title }}">
                    </a>
                    <div class="description">
                        <div class="tags">
                            <a
                                href="/categories/{{ $article->category->slug }}"><span>{{ $article->category->name }}</span></a>
                        </div>
                        <div class="text mb-4">
                            <a href="/blog/{{ $article->slug }}">
                                <h2>{{ $article->title }}</h2>
                            </a>
                        </div>
                        <div class="meta-data">
                            <span class="">{{ $article->created_at->diffForHumans() }}</span>
                            <span><i class="fa-regular fa-clock"></i> {{ $article->read_time }} min read</span>
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
        <div class="service-desc py-4 text-center">
            <p class="pl-4 italic text-xl text-gray-700">
                "Designed for projects of any scope and complexity, Build and enhance your web presence with tailored
                solutions. Automate your business processes for efficiency, Turn your data into actionable insights."
            </p>
        </div>
        <div class="container">
            <div class="services-wrapper">

                <!-- Business App Development -->
                <div class="service-card">
                    <h3 class="service-title">Business Apps</h3>
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
                            <a href="/contact">Get a Quote</a>
                        </div>
                    </div>
                </div>

                <!-- Web Development -->
                <div class="service-card">
                    <h3 class="service-title">Web Development</h3>
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
                            <a href="/contact">Get a Quote</a>
                        </div>
                    </div>
                </div>

                <!-- Process and Business Automation -->
                <div class="service-card">
                    <h3 class="service-title">Process Automation</h3>
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
                            <a href="/contact">Get a Quote</a>
                        </div>
                    </div>
                </div>

                <!-- Data Analytics and Visualization -->
                <div class="service-card">
                    <h3 class="service-title">Analytics & Visualization</h3>
                    <ul class="pricing-options">
                        <li><strong>Fixed Price:</strong> Specific projects and well defined.</li>
                        <li><strong>Hourly Rate:</strong> Analysis, Debugging and consulting.</li>
                        <li><strong>Package:</strong> Ongoing support, Training & Documentation.</li>
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
                            <a href="/contact">Get a Quote</a>
                        </div>
                    </div>
                </div>

            </div>

            {{-- Services --}}
            <div class="flex lg:flex-row flex-col lg:justify-center items-center p-2 bg-slate-100 min-h-screen">
                <div
                    class="lg:w-[22rem] bg-white w-full border-2 lg:border-r-0 border-gray-200 p-5 rounded-2xl lg:rounded-r-none">
                    <div class="pb-3 mb-4 border-b border-gray-200">
                        <div class="text-xs text-slate-800 mb-2">START</div>
                        <h2 class="text-2xl m-0 custom-blue-color-1">Web Development</h2>
                    </div>
                    <div class="flex items-center mb-2">
                        <svg width="24" height="24" fill="none" class="text-green-500 mr-1"
                            viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="1.5"
                                d="M5.75 12.8665L8.33995 16.4138C9.15171 17.5256 10.8179 17.504 11.6006 16.3715L18.25 6.75">
                            </path>
                        </svg>10k Visitors/mo
                    </div>
                    <div class="flex items-center mb-2">
                        <svg width="24" height="24" fill="none" class="text-green-500 mr-1"
                            viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="1.5"
                                d="M5.75 12.8665L8.33995 16.4138C9.15171 17.5256 10.8179 17.504 11.6006 16.3715L18.25 6.75">
                            </path>
                        </svg>
                        10 Funnels, 50 Pages
                    </div>
                    <div class="flex items-center mb-5">
                        <svg width="24" height="24" fill="none" class="text-green-500 mr-1"
                            viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="1.5"
                                d="M5.75 12.8665L8.33995 16.4138C9.15171 17.5256 10.8179 17.504 11.6006 16.3715L18.25 6.75">
                            </path>
                        </svg>Unlimited Transactions
                    </div>
                    <div class="mt-auto w-full">
                        <button
                            class="bg-white rounded-xl cursor-pointer text-blue-700 py-2 border-none w-full flex items-center px-3">
                            Get Quote
                            <svg class="ml-auto" width="24" custom-blue-color-1 height="24" fill="none"
                                viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="1.5" d="M13.75 6.75L19.25 12L13.75 17.25"></path>
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="1.5" d="M19 12H4.75"></path>
                            </svg>
                        </button>
                        <div class="text-xs mt-3 text-slate-600 line-height-2">Literally you probably haven't heard of them
                            jean shorts.</div>
                    </div>
                </div>
                <div
                    class="lg:w-[26rem] w-full lg:my-0 bg-blue-700 hover:text-white my-4 border-2 border-gray-200 p-5 rounded-2xl lg:shadow-8">
                    <div class="pb-3 mb-4 border-b border-gray-200">
                        <div class="text-xs text-gray-400 mb-2">PRO</div>
                        <div class="flex items-center">
                            <h2 class="text-2xl m-0 text-white ">Business Apps & Automation</h2>
                        </div>
                    </div>
                    <div class="flex items-center text-white mb-2">
                        <svg width="24" height="24" fill="none" class="text-green-500 mr-1"
                            viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="1.5"
                                d="M5.75 12.8665L8.33995 16.4138C9.15171 17.5256 10.8179 17.504 11.6006 16.3715L18.25 6.75">
                            </path>
                        </svg>10k Visitors/mo
                    </div>
                    <div class="flex items-center mb-2">
                        <svg width="24" height="24" fill="none" class="text-green-500 mr-1"
                            viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="1.5"
                                d="M5.75 12.8665L8.33995 16.4138C9.15171 17.5256 10.8179 17.504 11.6006 16.3715L18.25 6.75">
                            </path>
                        </svg>
                        10 Funnels, 100 Pages
                    </div>
                    <div class="flex items-center mb-2">
                        <svg width="24" height="24" fill="none" class="text-green-500 mr-1"
                            viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="1.5"
                                d="M5.75 12.8665L8.33995 16.4138C9.15171 17.5256 10.8179 17.504 11.6006 16.3715L18.25 6.75">
                            </path>
                        </svg>Unlimited Transactions

                    </div>
                    <div class="flex items-center mb-2">
                        <svg width="24" height="24" fill="none" class="text-green-500 mr-1"
                            viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="1.5"
                                d="M5.75 12.8665L8.33995 16.4138C9.15171 17.5256 10.8179 17.504 11.6006 16.3715L18.25 6.75">
                            </path>
                        </svg>Analytics
                    </div>
                    <div class="flex items-center mb-5">
                        <svg width="24" height="24" fill="none" class="text-green-500 mr-1"
                            viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="1.5"
                                d="M5.75 12.8665L8.33995 16.4138C9.15171 17.5256 10.8179 17.504 11.6006 16.3715L18.25 6.75">
                            </path>
                        </svg>lnstegrations
                    </div>
                    <div class="mt-auto w-full">
                        <button
                            class="bg-teal-500 rounded-xl cursor-pointer text-blue-700 py-2 border-none w-full flex items-center px-3">
                            Get Quote
                            <svg class="ml-auto" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="1.5" d="M13.75 6.75L19.25 12L13.75 17.25"></path>
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="1.5" d="M19 12H4.75"></path>
                            </svg>
                        </button>
                        <div class="text-xs mt-3 text-slate-600 line-height-2">Literally you probably haven't heard of them
                            jean shorts.</div>
                    </div>
                </div>
                <div
                    class="lg:w-[22rem] bg-white w-full border-2 lg:border-l-0 border-gray-200 p-5 rounded-2xl lg:rounded-l-none">
                    <div class="pb-3 mb-4 border-b border-gray-200">
                        <div class="text-xs text-slate-800 mb-2">ENTERPRISE</div>
                        <div class="flex items-center">
                            <h2 class="text-2xl m-0 custom-blue-color-1">Analytics & Dataviz</h2>
                        </div>
                    </div>
                    <div class="flex items-center mb-2">
                        <svg width="24" height="24" fill="none" class="text-green-500 mr-1"
                            viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="1.5"
                                d="M5.75 12.8665L8.33995 16.4138C9.15171 17.5256 10.8179 17.504 11.6006 16.3715L18.25 6.75">
                            </path>
                        </svg>Audience Date
                    </div>
                    <div class="flex items-center mb-2">
                        <svg width="24" height="24" fill="none" class="text-green-500 mr-1"
                            viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="1.5"
                                d="M5.75 12.8665L8.33995 16.4138C9.15171 17.5256 10.8179 17.504 11.6006 16.3715L18.25 6.75">
                            </path>
                        </svg>
                        Premium templates
                    </div>
                    <div class="flex items-center mb-5">
                        <svg width="24" height="24" fill="none" class="text-green-500 mr-1"
                            viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="1.5"
                                d="M5.75 12.8665L8.33995 16.4138C9.15171 17.5256 10.8179 17.504 11.6006 16.3715L18.25 6.75">
                            </path>
                        </svg>White Labelling
                    </div>
                    <div class="mt-auto w-full">
                        <button
                            class="bg-white rounded-xl cursor-pointer text-blue-700 py-2 border-none w-full flex items-center px-3">
                            Get Quote
                            <svg class="ml-auto" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="1.5" d="M13.75 6.75L19.25 12L13.75 17.25"></path>
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="1.5" d="M19 12H4.75"></path>
                            </svg>
                        </button>
                        <div class="text-xs mt-3 text-slate-600 line-height-2">Literally you probably haven't heard of them
                            jean shorts.</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
