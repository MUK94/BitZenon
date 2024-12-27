<footer class="footer pt-8">
    <div class="container content-layout">
        <div class="row py-12">
            <div class="col">
                <div class="box ">
                    <a href="/" class="font-bold text-4xl text-white border-2 border-white py-1 px-2">
                        <span class="font-bold text-4xl"><i class="text-2xl fa-solid fa-less-than text-white"></i><span
                                class="text-white text-4xl">&#47;</span></span>M <span class="font-bold text-4xl"><i
                                class="text-2xl fa-solid fa-greater-than text-white"></i></span>
                    </a>
                    <p class="my-6 text-white">Empowering your Digital Journey with Bright Solutions!</p>

                    <div class="company-address mt-8">
                        <ul class="social font-extralight">
                            <li><i class="fa-solid fa-map-location"></i><span class="text-gray-300 ml-1">Baden
                                    Württemberg, Germany</span></li>
                            <li><i class="fa-solid fa-phone"></i> <span class="text-gray-300 ml-1">+49 1784608200</span>
                            </li>
                            <li><i class="fa-solid fa-envelope-open-text"></i>
                                <a class="ml-1 text-gray-300"
                                    href="mailto:{{ 'service@' . strtolower(config('app.name')) . '.com' }}">{{ 'service@' . strtolower(config('app.name')) . '.com' }}</a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>

            <div class="col ">
                <ul class="box">
                    <h3>Main Services</h3>
                    <li class="footer-link font-extralight text-gray-300"><a href="/services" target="_blank">Process
                            Automation</a>
                    </li>
                    <li class="footer-link font-extralight text-gray-300"><a href="/services" target="_blank">Dataviz &
                            Analytics</a>
                    </li>
                    <li class="footer-link font-extralight text-gray-300"><a href="/services"
                            target="_blank">Consultation &
                            Training</a></li>
                    <li class="footer-link font-extralight text-gray-300"><a href="/services" target="_blank">Full-Stack
                            Web
                            Development</a></li>
                    <li class="footer-link font-extralight text-gray-300"><a href="/services" target="_blank">Business
                            Apps
                            Development </a></li>
                </ul>
            </div>
            <div class="col ">
                <ul class="box">
                    <h3>Categories</h3>
                    @foreach ($categories as $category)
                        <li class="font-extralight text-gray-300"><a
                                href="/categories/{{ $category->slug }}">{{ $category->name }}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    <div class="container content-layout">
        <div class="copyright border-t border-gray-700">
            <div class="text">
                {{ config('app.name') }} © 2021 - 2024 All Rights Reserved
            </div>
            @include('inc.social-media')
        </div>
    </div>
</footer>

<script src="{{ asset('js/scripts.js') }}"></script>
<script src="{{ asset('js/graphs.js') }}"></script>
