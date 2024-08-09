<nav class="navbar nav-admin admin-layout bg-white shadow-sm">
    <div class="nav-logo pt-3">
        <a href="/" class="logo flex justify-center items-center">
            <img src="{{ asset('logo-blue-max.png') }}" alt="BitZenon Logo">
				<h1>Dashboard</h1>
        </a>
    </div>
    <div class="nav-user">
		 <div class="nav-notifications mr-8">
			<a href="/admin/messages" class="hover:text-blue-700 mx-3">
				Messages
					<i	class="hover:text-blue-700 {{ request()->is('admin/messages') ? 'custom-blue-color font-semibold' : '' }}   fa-regular fa-bell"></i>
			  </a>
			  <a href="/admin/comments" class="hover:text-blue-700 mx-3">
				Comments
					<i	class="hover:text-blue-700 {{ request()->is('admin/comments') ? 'custom-blue-color font-semibold' : '' }}   fa-regular fa-comment"></i>
			  </a>
		 </div>

        @auth
            <div class="nav-user-auth nav-cat-dropdown">
                <button class="dropdown-link" onclick="event.preventDefault();">
                    <span class="font-light px-1">{{ auth()->user()->name }}</span>
                    <img class="w-10 h-10 rounded-full" src="https://via.placeholder.com/150"
                        alt="{{ auth()->user()->name }}"><i class="fa-solid fa-angle-down"></i>
                </button>
                <ul class="dropdown-content">
                    <div class="drop-user">
                        <li>
                            <a href="/profile"
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
    </div>
</nav>
