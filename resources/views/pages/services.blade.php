@extends('layouts.app')
<title>{{ $title }} | BitZenon </title>
@section('content')
    <div class="content-layout">
        <div class="container article-post">
            <div class="headings">
                <h2>Browswe our <span>Services</span></h2>
            </div>
            <div class="service-desc mt-4 py-4 text-center">
                <p class="pl-4 italic text-xl text-gray-700">
                    "Tailored to fit your digital needs, contact us and get a quote today"
                </p>
            </div>
            <div class="container">
                {{--
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
                --}}
                <div
                    class="flex lg:flex-row flex-col lg:justify-center items-center lg:p-8 p-4 font-sans bg-slate-100 min-h-screen">
                    <div
                        class="lg:w-[23rem] bg-white w-full border-2 lg:border-r-0 border-gray-200 p-5 rounded-2xl lg:rounded-r-none">
                        <div class="pb-3 mb-4 border-b border-gray-200">
                            <div class="text-xs text-slate-800 mb-2">START</div>
                            <h2 class="text-5xl m-0 font-normal">Free</h2>
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
                                class="bg-white rounded-xl cursor-pointer text-white py-2 border-none w-full flex items-center px-3">
                                Get Free
                                <svg class="ml-auto" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="1.5" d="M13.75 6.75L19.25 12L13.75 17.25"></path>
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="1.5" d="M19 12H4.75"></path>
                                </svg>
                            </button>
                            <div class="text-xs mt-3 text-slate-600 line-height-2">Literally you probably haven't heard of
                                them jean shorts.</div>
                        </div>
                    </div>
                    <div
                        class="lg:w-[23rem] bg-white w-full lg:my-0 my-4 border-2 border-gray-200 p-5 rounded-2xl lg:shadow-8">
                        <div class="pb-3 mb-4 border-b border-gray-200">
                            <div class="text-xs text-slate-800 mb-2">PRO</div>
                            <div class="flex items-center">
                                <h2 class="text-5xl m-0 font-normal">$38</h2>
                                <span class="text-slate-300 ml-1">/mo</span>
                            </div>
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
                                class="bg-teal-500 rounded-xl cursor-pointer text-white py-2 border-none w-full flex items-center px-3">
                                Get Pro
                                <svg class="ml-auto" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="1.5" d="M13.75 6.75L19.25 12L13.75 17.25"></path>
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="1.5" d="M19 12H4.75"></path>
                                </svg>
                            </button>
                            <div class="text-xs mt-3 text-slate-600 line-height-2">Literally you probably haven't heard of
                                them jean shorts.</div>
                        </div>
                    </div>
                    <div
                        class="lg:w-[23rem] bg-white w-full border-2 lg:border-l-0 border-gray-200 p-5 rounded-2xl lg:rounded-l-none">
                        <div class="pb-3 mb-4 border-b border-gray-200">
                            <div class="text-xs text-slate-800 mb-2">ENTERPRISE</div>
                            <div class="flex items-center">
                                <h2 class="text-5xl m-0 font-normal">$72</h2>
                                <span class="text-slate-300 ml-1">/mo</span>
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
                                class="bg-white rounded-xl cursor-pointer text-white py-2 border-none w-full flex items-center px-3">
                                Get Enterprise
                                <svg class="ml-auto" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="1.5" d="M13.75 6.75L19.25 12L13.75 17.25"></path>
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="1.5" d="M19 12H4.75"></path>
                                </svg>
                            </button>
                            <div class="text-xs mt-3 text-slate-600 line-height-2">Literally you probably haven't heard of
                                them jean shorts.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="testimonials">
            <div class="title">
                <h2>Clients' <span>Testimonials</span></h2>
            </div>
        </section>
    </div>
@endsection
