<!-- App logo and controls -->
			<div class="navbar navbar-light bg-transparent navbar-static">
				<div class="navbar-brand flex-fill wmin-0">
					<a href="/dashboard" class="d-inline-block">
						<img style="width: 35px; height: 35px;" src="images/logo.png" class="sidebar-resize-hide" alt="">
						<img src="images/logo.png" class="sidebar-resize-show" alt="">
					</a>
				</div>

				<ul class="navbar-nav align-self-center ml-auto sidebar-resize-hide">
					<li class="nav-item dropdown">
						<button type="button" class="btn btn-outline-light text-body border-transparent btn-icon rounded-pill btn-sm sidebar-control sidebar-main-resize d-none d-lg-inline-flex">
							<i class="icon-transmission"></i>
						</button>

						<button type="button" class="btn btn-outline-light text-body border-transparent btn-icon rounded-pill btn-sm sidebar-control sidebar-mobile-main-toggle d-lg-none">
							<i class="icon-cross2"></i>
						</button>
					</li>
				</ul>
			</div>
			<!-- /app logo and controls -->


			<!-- Sidebar content -->
			<div class="sidebar-content">

				<!-- User menu -->
				<div class="sidebar-section sidebar-section-body user-menu-vertical text-center">
					<div class="card-img-actions d-inline-block">
						<img class="img-fluid rounded-circle" src="/global_assets/images/placeholders/placeholder.jpg" width="80" height="80" alt="">
						<div class="card-img-actions-overlay card-img rounded-circle">
							<a href="#" class="btn btn-white btn-icon btn-sm rounded-pill">
								<i class="icon-pencil"></i>
							</a>
						</div>
					</div>

					<div class="sidebar-resize-hide position-relative mt-2">
						<div class="dropdown">
							<div class="cursor-pointer" data-toggle="dropdown">
					    		<h6 class="font-weight-semibold dropdown-toggle mb-0">{{ auth()->user()->name }}</h6>
					    		<span class="d-block text-muted">{{ auth()->user()->email }}</span>
					    	</div>

							<div class="dropdown-menu w-100">
								<a href="#" class="dropdown-item">
									<i class="icon-user-plus"></i>
									My profile
								</a>
								<a href="#" class="dropdown-item">
									<i class="icon-coins"></i>
									My balance
								</a>
								<a href="#" class="dropdown-item">
									<i class="icon-comment-discussion"></i>
									Messages
									<span class="badge badge-indigo badge-pill ml-auto">58</span>
								</a>
								<div class="dropdown-divider"></div>
								<a href="#" class="dropdown-item">
									<i class="icon-cog5"></i>
									Account settings
								</a>
                                {{-- <form action="/signout" method="POST">
                                    @csrf
                                    <span role="button" class="dropdown-item">
									   <span class="icon-switch2" data-feather="log-out"></span>
									   Logout
								    </span>
                                </form> --}}

							</div>
				    	</div>
			    	</div>
				</div>
				<!-- /user menu -->


				<!-- Main navigation -->
				<div class="sidebar-section">
					<ul class="nav nav-sidebar" data-nav-type="accordion">

						<!-- Main -->
						<li class="nav-item-header pt-0"><div class="text-uppercase font-size-xs line-height-xs">Main</div> <i class="icon-menu" title="Main"></i></li>
						<li class="nav-item">
							<a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
								<i class="icon-home4"></i>
								<span>
									Dashboard
									<span class="d-block font-weight-normal opacity-50">No active orders</span>
								</span>
							</a>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-copy"></i> <span>USER</span></a>

							<ul class="nav nav-group-sub" data-submenu-title="Layouts">
								<li class="nav-item"><a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">Dashboard</a></li>
								<li class="nav-item"><a class="nav-link {{ Request::is('dashboard/profile') ? 'active' : '' }}" href="/dashboard/profile">My Profile</a></li>
								<li class="nav-item"><a class="nav-link {{ Request::is('dashboard/criteria-comparisons*') ? 'active' : '' }}" href="/dashboard/criteria-comparisons">Criteria Comparisons</a></li>
								<li class="nav-item"><a class="nav-link {{ Request::is('dashboard/final-ranking*') ? 'active' : '' }}" href="/dashboard/final-ranking">Final Rank</a></li>
							</ul>
						</li>

                        @can('admin')
                        <li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-copy"></i> <span>ADMINISTRATOR</span></a>

							<ul class="nav nav-group-sub" data-submenu-title="Layouts">
								<li class="nav-item"><a class="nav-link {{ Request::is('dashboard/tourism-objects*') ? 'active' : '' }}" href="/dashboard/tourism-objects">Course Web Programming</a></li>
								<li class="nav-item"><a class="nav-link {{ Request::is('dashboard/criterias*') ? 'active' : '' }}" href="/dashboard/criterias">Kriteria</a></li>
								<li class="nav-item"><a class="nav-link {{ Request::is('dashboard/alternatives*') ? 'active' : '' }}" href="/dashboard/alternatives">Alternatif</a></li>
                                @can('viewAny', App\Models\User::class)
								<li class="nav-item"><a class="nav-link {{ Request::is('dashboard/users*') ? 'active' : '' }}" href="/dashboard/users">User Management</a></li>
                                @endcan
							</ul>
						</li>
                        @endcan
						<!-- /layout -->



					</ul>

				</div>
				<!-- /main navigation -->
                {{-- <button> --}}
                    <div class="d-grid gap-2">
                    <center>
                        <li class="nav-item">
                        <form id="logout-form" action="{{ url ('/signout')}}" method="GET">

                            <button class="nav-link" type="submit">
                                {{ __('Logout') }}
                            </button>
                        </form>
                        </li>
                    </center>
                    </div>


                {{-- </button> --}}


			</div>
			<!-- /sidebar content -->


			<!-- Service status -->
			<div class="sidebar-section sidebar-section-body sidebar-resize-hide bg-dark">
                <div class="d-flex mb-2">
                	<div class="font-weight-semibold">My storage</div>
                	<span class="ml-auto">80% used</span>
				</div>

				<div class="progress bg-light-100 mb-1" style="height: 0.25rem;">
					<div class="progress-bar bg-warning" style="width: 80%">
						<span class="sr-only">80% Complete</span>
					</div>
				</div>
			</div>
			<!-- /service status -->
