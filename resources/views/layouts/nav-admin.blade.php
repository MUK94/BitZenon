<header>
    <nav class="navbar bg-white border-b-2 border-blue-900 shadow-sm">
        <div class="nav-content px-1">
            <div class="nav-user flex justify-between items-center">
					<div class="nav-notifications">
						<a href="/" class="hover:text-blue-700 mx-3">
							 <i class="hover:text-blue-700 {{ request()->is('/') ? 'custom-blue-color font-semibold' : '' }}   fa-solid fa-house"></i>
						</a>
					</div>
                <div class="nav-notifications mr-2">
                    <a href="/admin/messages/" class="hover:text-blue-700 mx-3">
                        Inbox
                        <i class="hover:text-blue-700 {{ request()->is('admin/messages') ? 'custom-blue-color font-semibold' : '' }}   fa-regular fa-envelope"></i>
                    </a>
                    <a href="/admin/comments/" class="hover:text-blue-700 mx-3">
                        Comments
                        <i class="hover:text-blue-700 {{ request()->is('admin/comments') ? 'custom-blue-color font-semibold' : '' }}   fa-regular fa-comment"></i>
                    </a>
						  @auth
								<div class="nav-user-auth nav-cat-dropdown">
									 <button class="dropdown-link" onclick="event.preventDefault();">
										  <div class="flex items-center justify-center font-normal">{{ auth()->user()->getInitials() }}
										  </div>
										  <i class="fa-solid fa-angle-down"></i>
									 </button>
									 <div class="dropdown-content">
										  <ul class="drop-user bg-white pb-4">
												<li>
													 <a href="/admin/profile"
														  class="mt-3 {{ request()->is('admin/profile') ? ' text-blue-800 font-semibold' : '' }} ">Profile</a>
												</li>
												<li><a href="/dashboard"
														  class="{{ request()->is('dashboard') ? ' text-blue-800 font-semibold' : '' }} ">Dashboard</a>
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
										  </ul>
									 </div>
								</div>
						  @endauth
                </div>

            </div>
        </div>
    </nav>

</header>
