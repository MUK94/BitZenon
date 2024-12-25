<nav class="navbar content-layout">
    <div class="nav-logo pt-1">
        <a href="/" class="logo">
            {{-- <img src="{{ asset('logo_mouctar_circular.png') }}" alt="{{ config('app.name') }}"> --}}
            <div class="flex desktop">
                <p class="font-bold text-4xl custom-blue-color-1 border-2 border-blue-700 px-1">
                    <span class="font-bold"><i class="text-2xl fa-solid fa-less-than custom-blue-color-1"></i><span
                            class="custom-blue-color-1 text-4xl">&#47;</span></span>M <span class="font-bold"><i
                            class="text-2xl fa-solid fa-greater-than custom-blue-color-1"></i></span>
                </p>
            </div>
            <div class="mobile-logo">
                {{-- <img src="{{ asset('mobile-logo.png') }}" alt="{{ config('app.name') }}"> --}}
            </div>
        </a>
    </div>
    <div class="nav-container">
        <ul class="nav-links">
            <li><a href="/"
                    class="{{ request()->is('/') ? 'border-b-2 custom-blue font-semibold' : '' }} hover:border-b-2 hover:border-blue-700">Home</a>
            </li>
            <li><a href="/blog"
                    class="{{ request()->is('blog') ? 'border-b-2 custom-blue font-semibold' : '' }} hover:border-b-2 hover:border-blue-700">Blog</a>
            </li>
            <li><a href="/about"
                    class="{{ request()->is('about') ? 'border-b-2 custom-blue font-semibold' : '' }} hover:border-b-2 hover:border-blue-700">About</a>
            </li>
            <li><a href="/services"
                    class="{{ request()->is('services') ? 'border-b-2 custom-blue font-semibold' : '' }} hover:border-b-2 hover:border-blue-700">Services</a>
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


        <div class="btn-booking">
            <div>
                <button wire:click.prevent="openForm" type="submit"
                    class="px-4 py-2 text-white custom-blue-color  rounded-md shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-600">
                    <i class="text-white pr-2 fa-solid fa-money-check-dollar"></i> Get a Quote
                </button>
            </div>
        </div>

    </div>
</nav>
