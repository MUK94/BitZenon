@extends('layouts.app')
<title>{{ $title }} | BitZenon </title>
@section('content')
    <div class="content-layout">
        <div class="contact">
            <div class="raw">
                <h1 class="title">Services</h1>
                <div class="slogan">
						<p>
							Designed for projects of any scope and complexity, Build and enhance your web presence with tailored solutions.
							Automate your business processes for efficiency, Turn your data into actionable insights.
						</p>
                </div>
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
										<a href="/contact">Contact Us</a>
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
										<a href="/contact">Contact Us</a>
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
										<a href="/contact">Contact Us</a>
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
										<a href="/contact">Contact Us</a>
								  </div>
							 </div>
						</div>

				  </div>

			 </div>
        </div>
    </div>
@endsection
