<nav class="navbar content-layout">
    {{-- Mobile Menu --}}
    <nav class="relative large-screen-hidden ">
        <!-- Hamburger Button -->
        <button id="menuButton" class="menu-button">
            <img src="{{ asset('bars.png') }}" alt="{{ config('app.name') }}">
        </button>

        <div id="mobileMenu"
            class="fixed z-50 top-0 left-0 h-full w-64 bg-white shadow-md transform -translate-x-full transition-transform duration-300 lg:hidden">
            <button id="closeButton" class="text-xl absolute top-4 right-4">
                <i class="fa-solid fa-times"></i>
            </button>

            <!-- Menu Links -->
            <ul class="flex flex-col space-y-12 py-12 px-12">
                <li>
                    <a href="/"
                        class="{{ request()->is('/') ? 'border-b-2 custom-blue font-semibold' : '' }} hover:border-b-2 hover:border-blue-700">Home</a>
                </li>
                <li>
                    <a href="/blog"
                        class="{{ request()->is('blog') ? 'border-b-2 custom-blue font-semibold' : '' }} hover:border-b-2 hover:border-blue-700">Blog</a>
                </li>
                <li>
                    <a href="/about"
                        class="{{ request()->is('about') ? 'border-b-2 custom-blue font-semibold' : '' }} hover:border-b-2 hover:border-blue-700">About</a>
                </li>
                <li>
                    <a href="/services"
                        class="{{ request()->is('services') ? 'border-b-2 custom-blue font-semibold' : '' }} hover:border-b-2 hover:border-blue-700">Services</a>
                </li>
                <li>
                    <a href="/contact"
                        class="{{ request()->is('contact') ? 'border-b-2 custom-blue font-semibold' : '' }} hover:border-b-2 hover:border-blue-700">Contact</a>
                </li>
            </ul>
            <ul class="flex flex-col space-y-12 py-8 px-12">
                @auth
                    @if (Auth::user()->role == 'admin')
                        <li><a href="/dashboard"
                                class="{{ request()->is('dashboard') ? ' text-blue-700 font-semibold' : '' }} ">Dashboard</a>
                        </li>
                    @endif
                    <div class="flex">
                        <li><a href="/admin/profile"
                                class="mt-3 mr-2 {{ request()->is('admin/profile') ? ' text-blue-800 font-semibold' : '' }} ">Profile</a>
                        </li> /
                        <li>
                            <form id="logout-form" method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button
                                    type="submit"onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                    class="font-light ml-2">
                                    {{ __('Logout') }}
                                </button>
                            </form>
                        </li>
                    </div>
                @endauth
            </ul>
        </div>
    </nav>
    <div class="nav-logo pt-1">
        <a href="/" class="logo">
            <div class="flex">
                <span class="font-bold text-4xl custom-blue-color-1 border-logo px-1">M</span>
            </div>
        </a>
    </div>
    <div class="nav-container desktop-hidden">
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
            <div class="desktop-hidden nav-user-auth mr-3 nav-cat-dropdown">
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
                    class="quoteBtn px-4 py-2 text-white custom-blue-color  rounded-md shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-600">
                    <i class=" text-white pr-2 fa-solid fa-money-check-dollar"></i> Get a Quote
                </button>
            </div>
        </div>
    </div>
</nav>


<!-- JavaScript -->
<script>
    const menuButton = document.getElementById('menuButton');
    const closeButton = document.getElementById('closeButton');
    const mobileMenu = document.getElementById('mobileMenu');

    menuButton.addEventListener('click', () => {
        mobileMenu.classList.remove('-translate-x-full');
    });

    closeButton.addEventListener('click', () => {
        mobileMenu.classList.add('-translate-x-full');
    });
</script>
