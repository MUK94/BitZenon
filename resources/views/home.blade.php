@extends('layouts.app')
<title>{{ $title }} | Mouctechy </title>
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
					<div class="box">
						<div class="tags">
							<a href="#"><span>PowerApps</span></a> <a href="#"><span>Copilot</span></a>
						</div>
						<a href="#">
							<div class="side-articles side-slider">
									<h3>The Future of AI: How Artificial Intelligence is Shaping Our World</h3>
									<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repudiandae nam sapiente tenetur
										odio...</p>
									<img src="https://img.freepik.com/free-photo/portrait-relaxed-man-sitting-desk-table-living-room-working-remote-from-home-financial-project-using-laptop-computer-online-webinar-freelancer-guy-having-business-lesson_482257-37964.jpg?t=st=1721156626~exp=1721160226~hmac=a6fa32340b894e40f802d79b9ef73f611ba3c85dbdad5e1e426e4abbb576e293&w=900"
										alt="Mouctar">
							</div>
						</a>
					</div>
					<div class="sliderdots">
						<div></div>
						<div></div>
						<div></div>
					</div>
            </div>
        </div>
    </section>

    <section class="section-container content-layout">
        <div class="title">
            <h2>About <span>me</span></h2>
        </div>
        <div class="raw">
        </div>
    </section>

    <section class="section-container content-layout">
        <div class="title">
            <h2> Latest <span>Posts</span></h2>
        </div>
        <div class="container">
        </div>
    </section>

    <section class="section-container content-layout">
        <div class="title">
            <h2>My <span>Services</span></h2>
        </div>
    </section>
@endsection
