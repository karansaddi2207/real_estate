<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

<header class="header-section">
		<div class="header-top">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 header-top-left">
						<div class="top-info">
							<i class="fa fa-phone"></i>
							(+88) 666 121 4321
						</div>
						<div class="top-info">
							<i class="fa fa-envelope"></i>
							info.leramiz@colorlib.com
						</div>
					</div>
					<div class="col-lg-6 text-lg-right header-top-right">
						<div class="top-social">
							<a href=""><i class="fa fa-facebook"></i></a>
							<a href=""><i class="fa fa-twitter"></i></a>
							<a href=""><i class="fa fa-instagram"></i></a>
							<a href=""><i class="fa fa-pinterest"></i></a>
							<a href=""><i class="fa fa-linkedin"></i></a>
						</div>
						<div class="user-panel">
							@auth
							<a href="{{ route('logout') }}"><i class="fa fa-sign-in"></i>Logout</a>
							@else
							<a href="{{ route('register') }}"><i class="fa fa-user-circle-o"></i> Register</a>
							<a href="{{ route('login') }}"><i class="fa fa-sign-in"></i> Login</a>
							@endauth
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="site-navbar">
						<a href="{{ url('/') }}" class="site-logo"><img src="{{ asset('frontend/img/logo.png') }}" alt=""></a>
						<div class="nav-switch">
							<i class="fa fa-bars"></i>
						</div>
						<ul class="main-menu">
							<li><a href="{{ url('/') }}">Home</a></li>
							<li><a href="{{ url('user/listings/for_sale') }}">For Sale</a></li>
							<li><a href="{{ url('user/listings/for_rent') }}">For Rent</a></li>
							<li><a href="{{ route('user.featured') }}">FEATURED LISTING</a></li>
							<li><a href="{{ route('user.about') }}">ABOUT US</a></li>
							<li><a href="single-list.html">Pages</a></li>
							<li><a href="blog.html">Blog</a></li>
							<li><a href="{{ route('user.contact') }}">Contact</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</header>