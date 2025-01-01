<footer class="footer pt-8">
    <div class="container content-layout">
        <div class="row py-12 mobile">
            <div class="col">
                <div class="box ">
                    <div class="footer-logo flex items-start">
                        <a href="/" class="font-bold text-4xl mt-1 text-white border-2 border-white px-1">M</a>
                        <h3 class="text-white ml-3"><a href="/">Empowering your Digital Journey with <br> Bright
                                Solutions!</a></h3>
                    </div>

                    <div class="company-address mt-8">
                        <ul class="social font-extralight">
                            <li><i class="fa-solid fa-map-location"></i><span class="text-gray-400 ml-1">Baden
                                    Württemberg, Germany</span></li>
                            <li><i class="fa-solid fa-phone"></i> <span class="text-gray-400 ml-1">+49 1784608200</span>
                            </li>
                            <li><i class="fa-solid fa-envelope-open-text"></i>
                                <a class="ml-1 text-gray-400"
                                    href="mailto:{{ 'service@' . strtolower(config('app.name')) . '.com' }}">{{ 'service@' . strtolower(config('app.name')) . '.com' }}</a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>

            <div class="col ">
                <ul class="box">
                    <h3>Main Services</h3>
                    <li class="footer-link"><a href="/services" class="font-extralight text-gray-400"
                            target="_blank">Full-Stack Web Development</a></li>
                    <li class="footer-link"><a href="/services" class="font-extralight text-gray-400"
                            target="_blank">Process Automation</a>
                    </li>
                    <li class="footer-link"><a href="/services" class="font-extralight text-gray-400"
                            target="_blank">Data Analytics</a>
                    </li>
                    <li class="footer-link"><a href="/services" class="font-extralight text-gray-400"
                            target="_blank">Consultation & Training</a></li>
                    <li class="footer-link"><a href="/services" class="font-extralight text-gray-400"
                            target="_blank">Business Apps Development </a></li>
                </ul>
            </div>
            <div class="col ">
                <ul class="box">
                    <h3>Categories</h3>
                    @foreach ($categories as $category)
                        <li><a class="font-extralight text-gray-400"
                                href="/categories/{{ $category->slug }}">{{ $category->name }}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    <div class="container content-layout">
        <div class="copyright border-t border-gray-700 mobile">
            <div class="text-gray-400 text-sm">
                {{ config('app.name') }} © 2021 - 2024 All Rights Reserved
            </div>
            <div class="footer-social">
                @include('inc.social-media')
            </div>
        </div>
    </div>
</footer>

<script src="{{ asset('js/scripts.js') }}"></script>
