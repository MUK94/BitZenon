<footer class="footer pt-8">
	<div class="container content-layout">
		 <div class="row py-12">
			  <div class="col">
					<div class="box ">
						 <h3>Subscribe to our Newsletter</h3>
						 <div class="newsletter">
							  <form action="#" method="POST" class="flex justify-between">
									<input type="email" id="email" placeholder="Email Address" name="email" required
										 class="mb-4 p-3 border w-80 border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-700">
									<button type="submit"
										 class="text-sm text-white mx-2 px-2 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 btn">
										 {{ __('Subscribe') }}
									</button>
							  </form>
							  <p class="mb-6 text-white">Get the latest articles right in your inbox</p>

							  <div class="company-address mt-8">
									<ul class="">
										 <li><i class="fa-solid fa-map-location"></i> Conakry, Guinea</li>
										 <li><i class="fa-solid fa-phone"></i> +224 621 14 94 77</li>
										 <li><i class="fa-solid fa-envelope-open-text"></i> contact@bitzenon.com</li>
									</ul>
							  </div>
						 </div>
					</div>
			  </div>

			  <div class="col ">
				 <ul class="box">
					  <h3>Main Services</h3>
					  <li class="footer-link"><a href="/services" target="_blank">Process Automation</a></li>
					  <li class="footer-link"><a href="/services" target="_blank">Dataviz & Analytics</a></li>
					  <li class="footer-link"><a href="/services" target="_blank">Consultation & Training</a></li>
					  <li class="footer-link"><a href="/services" target="_blank">Full-Stack Web Development</a></li>
					  <li class="footer-link"><a href="/services" target="_blank">Business Apps Development </a></li>
				 </ul>
			</div>
			  <div class="col ">
					<ul class="box">
						 <h3>Categories</h3>
						 @foreach ($categories as $category)
							  <li><a href="/categories/{{ $category->slug }}">{{ $category->name }}</a></li>
						 @endforeach
					</ul>
			  </div>
		 </div>
	</div>
	<div class="container content-layout">
		 <div class="copyright border-t border-gray-700">
			  <div class="text">
					© 2024 BitZenon All Rights Reserved
			  </div>
			  <div class="social">
					<a href="#"><i class="fa-brands fa-facebook"></i></a>
					<a href="https://linkedin.com/in/thierno-dev" target="_blank"><i
							  class="fa-brands fa-linkedin"></i></a>
					<a href="#"><i class="fa-brands fa-youtube-square"></i></a>
					<a href="#"><i class="fa-brands fa-github"></i></a>
					<a href="#"><i class="fa-brands fa-x-twitter"></i></a>
			  </div>
		 </div>
	</div>
</footer>

<script src="{{ asset('js/scripts.js') }}"></script>
<script src="{{ asset('js/graphs.js') }}"></script>