@extends('layouts.app')
<title>{{ $title }} | BitZenon </title>
@section('content')
    <div class="content-layout">
        <div class="container article-post">
            <div class="headings">
                <h2>About <span>Us</span></h2>
            </div>
            <div class="contact-container pt-8">
					@include('inc.about-section')
					<div class="pt-8 pb-16 w-full flex justify-between gap-8">
						<img class="w-1/2"
							 src="https://img.freepik.com/free-photo/medium-shot-bored-people-working_23-2150697560.jpg?t=st=1724632162~exp=1724635762~hmac=397e5c6d5bf3d165cf4bbc046137c37b6d97106d8365bb2ae09c55f6f25e63ee&w=900"
							 alt="">
						 <div class="w-1/2">
							  <p>
									Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati consequatur
									dolor iste, magnam incidunt nemo nisi aliquam perferendis,
									blanditiis quisquam aut hic, doloremque accusantium ipsa minima atque deleniti.
									Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati consequatur
									dolor iste, magnam incidunt nemo nisi aliquam perferendis,
									blanditiis quisquam aut hic, doloremque accusantium ipsa minima atque deleniti.
									Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati consequatur
									dolor iste, magnam incidunt nemo nisi aliquam perferendis,
									blanditiis quisquam aut hic, doloremque accusantium ipsa minima atque deleniti.
							  </p>
							  <button class="btn about-btn my-4">Contact Us</button>
						 </div>
					</div>
            </div>
			</div>
        <div class="container-team">
            <div class="title">
                <h2>Our <span>Team</span></h2>
            </div>
        </div>
    </div>
@endsection
