<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Medicine Donation</title>
	<link rel="stylesheet" href="{{ asset('frontend_assets/font-awesome-4.7.0/css/font-awesome.min.css') }}">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" integrity="sha512-+EoPw+Fiwh6eSeRK7zwIKG2MA8i3rV/DGa3tdttQGgWyatG/SkncT53KHQaS5Jh9MNOT3dmFL0FjTY08And/Cw==" crossorigin="anonymous" />
	<link rel="stylesheet" href="{{ asset('frontend_assets/css/imagehover.min.css') }}">
	<link rel="stylesheet" href="{{ asset('frontend_assets/css/slick-theme.min.css') }}">
	<link rel="stylesheet" href="{{ asset('frontend_assets/css/slick.min.css') }}">
	<link rel="stylesheet" href="{{ asset('frontend_assets/css/uikit.min.css') }}">
	<link rel="stylesheet" href="{{ asset('frontend_assets/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('frontend_assets/css/style.css') }}">
	<link rel="stylesheet" href="{{ asset('frontend_assets/css/responsive.css') }}">

</head>

<body>
	<!-- START NAV-TOP SECTION -->
	<div class="top-nav-section p-3">
		<div class="container">
			<div class="row">
				<div class="col-8">
					<div class="top-nav-content">
						<div class="d-block d-lg-inline location">
							<span class="icons"><i class="fa fa-map-marker"></i></span>
							<h6 class=" d-inline"> Satarkul, badda </h6>
							<span class="px-3 d-none d-lg-inline">|</span>
						</div>
						<div class="d-block d-lg-inline mail">
							<span class="icons"><i class="fa fa-envelope-o"></i></span>
							<h6 class="d-inline">unusedmedicine@gmail.com</h6>
							<span class="px-3 d-none d-lg-inline">|</span>
						</div>
						<div class="d-block d-lg-inline contect">
							<span class="icons"><i class="fa fa-phone"></i></span>
							<h6 class="d-inline">16475</h6>
						</div>
					</div>
				</div>
				<div class="col-4">
					<div class="top-nav-log-reg float-right">
						{{-- <div class="login d-inline">
							<a href="step-form.html"><button type="button" class="btn">করোনা টেস্ট</button></a>
						</div> --}}
						<div class="login d-inline">
							<a class="btn" href="{{ route('admin.login') }}">
                                {{ Auth::check() ? 'Profile' : 'Login' }}
                            </a>
						</div>

						@if (!Auth::check())
							<div class="register d-inline">
								<a href="{{ route('register') }}"><button type="button" class="btn">register</button></a>
							</div>
						@endif
						
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- END  NAV-TOP SECTION -->
	<!-- START NAV SECTION -->



	<nav class="navbar navbar-dark navbar-expand-md text-light" uk-sticky="top: 200; animation: uk-animation-slide-top; bottom: #sticky-on-scroll-up navbar-style">
		<div class="container">
			<a class="navbar-brand text-light" href="{{route('index')}}">
                <img src="{{ asset('frontend_assets/photos/Logo3.png') }}" alt="Logo" height="30px" width="30px" class="mr-2"> Unused Medicine Donation
            </a>
			<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse " id="navbarNav">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active px-2">
						<a class="nav-link text-uppercase" href="{{route('index')}}">home</a>
					</li>
					<li class="nav-item px-2">
						<a class="nav-link text-uppercase" href="{{route('about')}}">About Us</a>
					</li>
					<li class="nav-item px-2">
						<a class="nav-link text-uppercase" href="{{route('suppopt.team')}}">Support Team</a>
					</li>
					<li class="nav-item px-2">
						<a class="nav-link text-uppercase" href="{{route('contact')}}">Contact</a>
					</li>
					
					{{-- <li class="nav-item px-2">
						<!-- <a class="nav-link text-uppercase bbb" href="registation.html">make appoint</a> -->
						<a href="appointform.html" class="myButton ">MAKE APPOINT</a>
					</li> --}}
				</ul>
			</div>
		</div>
	</nav>
	<!-- END NAV SECTION -->
	<!-- START SEARCH SECTION -->
	<!-- END SEARCH SECTION -->
   @yield('content')


	<!--    end corona text section-->

	<!-- START FOOTER SECTION -->
	<footer class="footer-secton py-3">
		<div class="container">
			<div class="row">
				<div class="col-12 col-md-6 col-lg-4">
					<div class="content">
						<h4 class="text-uppercase text-light py-3">contect us</h4>
						<div class="row">
							<div class="col-2">
								<i class="fa fa-volume-control-phone"></i>
							</div>
							<div class="col-10">
								<p class="text-light mb-0">+8801723019475</p>
								<p class="text-light">+8801861153337</p>
							</div>

							<div class="col-2">
								<i class="fa fa-envelope"></i>
							</div>
							<div class="col-10">
								<p class="text-light mb-0">unusedmedicine@gmail.com </p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-6 col-lg-4">
					<div class="content-about">
						<div class="row">
							<div class="col-12">
								<h4 class="text-light text-uppercase py-3">about us</h4>
								<p class="text-light">
								এই ওয়েবসাইটের মাধ্যমে আপনার অব্যবহৃত ঔষধ অপরকে দান এবং যাদের ঔষধ কেনার সামথ্য নেই তারা গ্রহণ করতে পারবেন।
								</p>
							</div>
							
						</div>
					</div>
				</div>
				<div class="col-12 col-md-6 col-lg-4">
					<div class="row">
						<div class="col-12">
							<h4 class="text-light text-uppercase py-3">important link</h4>
							<div class="row">
								<div class="col-2 link-footer">
									<i class="fa fa-link"></i>
								</div>
								<div class="col-10">
									<a href="https://facebook.com/sohag.475">facebook/unused_medicine_donation</a>
								</div>
							</div>
							<div class="row">
								<div class="col-2 link-footer">
									<i class="fa fa-link"></i>
								</div>
								<div class="col-10">
								<a href="https://facebook.com/sohag.475">youtube/unused_medicine_donation</a>
								</div>
							</div>
							<div class="row">
								<div class="col-2 link-footer">
									<i class="fa fa-link"></i>
								</div>
								<div class="col-10">
								<a href="https://facebook.com/sohag.475">twitter/unused_medicine_donation</a>
								</div>
							</div>
							<div class="row">
								<div class="col-2 link-footer">
									<i class="fa fa-link"></i>
								</div>
								<div class="col-10">
								<a href="https://facebook.com/sohag.475">linkdin/unused_medicine_donation</a>
								</div>
							</div>
							
						</div>
					</div>
				</div>
			</div>
		</div>

	</footer>
	<!-- END FOOTER SECTION -->
	<!--START COPYRIGHT SECTION -->
	<section class="copyright-section">

		<nav class="navbar navbar-expand-sm navbar-dark">
			<!-- Brand/logo -->
			<div class="container">
				<a class="navbar-brand" href="#">
					<p class="text-">Copyright@Dhaka International University</p>
				</a>

				<!-- Links -->
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link text-light text-uppercase" href="#">home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link text-light text-uppercase" href="#">about us</a>
					</li>
					<li class="nav-item">
						<a class="nav-link text-light text-uppercase" href="#">service</a>
					</li>
					<li class="nav-item">
						<a class="nav-link text-light text-uppercase" href="#">blog</a>
					</li>
					{{-- <li class="nav-item px-2">
						<!-- <a class="nav-link text-uppercase bbb" href="registation.html">make appoint</a> -->
						<a href="#" class="myButton ">MAKE APPOINT</a>
					</li> --}}
				</ul>
			</div>
		</nav>
	</section>
	<!-- END COPYRIGHT SECTION -->


	<script src="{{ asset('frontend_assets/js/jquery.steps.min.js') }}"></script>
	<script src="{{ asset('frontend_assets/js/jquery-3.5.1.min.js') }}"></script>
	<script src="{{ asset('frontend_assets/js/popper.min.js') }}"></script>
	<script src="{{ asset('frontend_assets/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('frontend_assets/js/uikit.min.js') }}"></script>
	<script src="{{ asset('frontend_assets/js/uikit-icons.min.js') }}"></script>
	<script src="{{ asset('frontend_assets/js/slick.min.js') }}"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js " integrity="sha512-IsNh5E3eYy3tr/JiX2Yx4vsCujtkhwl7SLqgnwLNgf04Hrt9BT9SXlLlZlWx+OK4ndzAoALhsMNcCmkggjZB1w==" crossorigin=" anonymous "></script>
	<script src="{{ asset('frontend_assets/js/main.js') }}"></script>

</body>

</html>
