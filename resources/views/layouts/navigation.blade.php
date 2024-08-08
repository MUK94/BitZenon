<nav class="navbar content-layout">
    <div class="nav-logo">
        <a href="/" class="logo">
			<img src="{{ asset('logo-blue-max.png') }}" alt="BitZenon Logo">
			{{-- <h1>BitZenon</h1> --}}
        </a>
    </div>
    <div class="nav-cat-dropdown">

    </div>
    <div class="nav-container">
        <ul class="nav-links">
            <li><a href="/"
                    class="{{ request()->is('/') ? 'border-b-2 custom-blue font-semibold' : '' }} hover:border-b-2 hover:border-blue-700">Home</a>
            </li>
            <li><a href="/articles"
                    class="{{ request()->is('articles') ? 'border-b-2 custom-blue font-semibold' : '' }} hover:border-b-2 hover:border-blue-700">Articles</a>
            </li>
            <li><a href="/services"
                    class="{{ request()->is('services') ? 'border-b-2 custom-blue font-semibold' : '' }} hover:border-b-2 hover:border-blue-700">Services</a>
            </li>
            <li><a href="/podcasts"
                    class="{{ request()->is('podcasts') ? 'border-b-2 custom-blue font-semibold' : '' }} hover:border-b-2 hover:border-blue-700">Podcasts</a>
            </li>
            <li><a href="/contact"
                    class="{{ request()->is('contact') ? 'border-b-2 custom-blue font-semibold' : '' }} hover:border-b-2 hover:border-blue-700">Contact</a>
            </li>
        </ul>
    </div>
    <div class="nav-user">
        @auth
            <div class="nav-user-auth mr-3 nav-cat-dropdown">
                <button class="dropdown-link" onclick="event.preventDefault();">
                    <span class="font-light">{{ auth()->user()->name }}</span> <i class="fa-solid fa-angle-down"></i>
                </button>
                <ul class="dropdown-content">
                    <div class="drop-user">
                        <li><a href="/profile"
                                class="mt-3 {{ request()->is('profile') ? ' custom-blue-color font-semibold' : '' }} ">Profile</a>
                        </li>
                        <li><a href="/dashboard"
                                class="{{ request()->is('dashboard') ? ' custom-blue-color font-semibold' : '' }} ">Dashboard</a>
                        </li>
                        <li>
                            <form id="logout-form" method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                    class="font-light">
                                    {{ __('Logout') }}
                                </button>
                            </form>
                        </li>
                    </div>
                </ul>
            </div>
        @endauth

        {{-- User Not Auth --}}
        {{-- @guest
            <div class="btn-action nav-user-not-auth">
                <a href="/login" class="btn btn-1">Connexion</a>
            </div>
            <div class="btn-action nav-user-not-auth">
                <a href="/register" class="btn btn-1">Inscription</a>
            </div>
        @endguest --}}

        <div class="btn-booking">
            <a href="/booking" class=""><i class="fa-regular fa-calendar"></i> Book a Meeting</a>
        </div>

    </div>
</nav>
