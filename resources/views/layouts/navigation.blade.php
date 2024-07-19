<nav class="navbar content-layout">
    <div class="nav-logo">
        <a href="/" class="logo">
            {{-- <h1>BitZenon</h1> --}}
				<img src="{{asset("logo-blue-max.png")}}" alt="BitZenon Logo">
        </a>
    </div>
    <div class="nav-cat-dropdown">
        <a href="" class="dropdown-link" onclick="event.preventDefault();">
            Categories <i class="fa-solid fa-caret-down"></i>
        </a>
        <ul class="dropdown-content">
            <div class="cat-drop">
                <li><a href="/articles">All</a></li>
                @foreach ($categories as $category)
                    <li><a href="/categories/{{ $category->slug }}">{{ $category->name }}</a></li>
                @endforeach
            </div>
        </ul>
    </div>
    <div class="nav-container">
        <ul class="nav-links">
            <li><a href="/">Home</a></li>
            {{-- <li><a href="/about">About</a></li> --}}
            <li><a href="/services">Services</a></li>
            <li><a href="/articles">Articles</a></li>
            <li><a href="/podcasts">Podcasts</a></li>
            <li><a href="/contact">Contact</a></li>
        </ul>
    </div>
    <div class="nav-user">
        @auth
            <div class="nav-user-auth nav-cat-dropdown">
                <a href="" class="dropdown-link" onclick="event.preventDefault();"><i
                        class="fa-solid fa-user-circle"></i> {{ explode(' ', auth()->user()->name)[0] }}<i
                        class="fa-solid fa-caret-down"></i></a>
                <ul class="dropdown-content">
                    <div class="drop-user">
                        <li><a href="/profile">Profile</a></li>
                        <li><a href="/dashboard">Dashboard</a></li>
                        <li>
                            <form id="logout-form" method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
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
