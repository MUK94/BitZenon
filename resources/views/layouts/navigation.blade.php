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
            <li><a href="/about"
                    class="{{ request()->is('about') ? 'border-b-2 custom-blue font-semibold' : '' }} hover:border-b-2 hover:border-blue-700">About</a>
            </li>
            <li><a href="/services"
                    class="{{ request()->is('services') ? 'border-b-2 custom-blue font-semibold' : '' }} hover:border-b-2 hover:border-blue-700">Services</a>
            </li>
            <li><a href="/blog"
                    class="{{ request()->is('blog') ? 'border-b-2 custom-blue font-semibold' : '' }} hover:border-b-2 hover:border-blue-700">Blog</a>
            </li>
            {{-- <li><a href="/podcasts"
                    class="{{ request()->is('podcasts') ? 'border-b-2 custom-blue font-semibold' : '' }} hover:border-b-2 hover:border-blue-700">Podcasts</a>
            </li> --}}
            <li><a href="/contact"
                    class="{{ request()->is('contact') ? 'border-b-2 custom-blue font-semibold' : '' }} hover:border-b-2 hover:border-blue-700">Contact</a>
            </li>
        </ul>
    </div>
    <div class="nav-user">
        @auth
            <div class="nav-user-auth mr-3 nav-cat-dropdown">
                <button class="dropdown-link" onclick="event.preventDefault();">
                    <div class="flex items-center justify-center font-normal">{{ auth()->user()->getInitials() }}</div> <i
                        class="text-sm fa-solid fa-angle-down"></i>
                </button>
                <ul class="dropdown-content">
                    <div class="drop-user">
                        <li><a href="/admin/profile"
                                class="mt-3 {{ request()->is('admin/profile') ? ' text-blue-800 font-semibold' : '' }} ">Profile</a>
                        </li>
                        @if (Auth::user()->role == 'admin')
                            <li><a href="/dashboard"
                                    class="{{ request()->is('dashboard') ? ' text-blue-700 font-semibold' : '' }} ">Dashboard</a>
                            </li>
                        @endif
                        <li>
                            <form id="logout-form" method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                    class="font-light pb-4">
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
            <button wire:click.prevent="openForm" class="custom-blue-color px-4 shadow-sm hover:bg-blue-600 py-2 rounded flex items-center">
                <i class="text-white pr-2 fa-solid fa-money-check-dollar"></i> Get a Quote
            </button>
        </div>

    </div>
</nav>
