<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Registration Portal</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by freehtml5.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="freehtml5.co" />

	<!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FreeHTML5.co
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,700,800" rel="stylesheet">
	
	<!-- Animate.css -->
	<link href="{{ asset('front_template/css/animate.css')}}" rel="stylesheet">
	<!-- Icomoon Icon Fonts-->
	<link href="{{ asset('front_template/css/icomoon.css')}}" rel="stylesheet">
	<!-- Bootstrap  -->
	<link href="{{ asset('front_template/css/bootstrap.css')}}" rel="stylesheet">

	<!-- Magnific Popup -->
	<link href="{{ asset('front_template/css/magnific-popup.css')}}" rel="stylesheet">

	<!-- Owl Carousel  -->
	<link href="{{ asset('front_template/css/owl.carousel.min.css')}}" rel="stylesheet">
	<link href="{{ asset('front_template/css/owl.theme.default.min.css')}}" rel="stylesheet">

	<!-- Theme style  -->
	<link href="{{ asset('front_template/css/style.css')}}" rel="stylesheet">

	<!-- Modernizr JS -->
	<script src="{{ asset('front_template/js/modernizr-2.6.2.min.js')}}"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		
	<div class="fh5co-loader"></div>
	
	<div id="page">
	<nav class="fh5co-nav" role="navigation">
		<div class="top">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 text-right">
						<p class="num">Call: +01 123 456 7890</p>
						<ul class="fh5co-social">
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-dribbble"></i></a></li>
							<li><a href="#"><i class="icon-github"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="top-menu">
			<div class="container">
				<div class="row">
					<div class="col-xs-1">
						<div id="fh5co-logo"><a href="index.html">Learn<span>.</span></a></div>
					</div>
					<div class="col-xs-11 text-right menu-1">
						<ul>
							<li class="active"><a href="index.html">Home</a></li>
							<li><a href="courses.html">Courses</a></li>
							<li><a href="pricing.html">Pricing</a></li>
							<li class="has-dropdown">
								<a href="blog.html">Blog</a>
								<ul class="dropdown">
									<li><a href="#">Web Design</a></li>
									<li><a href="#">eCommerce</a></li>
									<li><a href="#">Branding</a></li>
									<li><a href="#">API</a></li>
								</ul>
							</li>
							<li><a href="contact.html">Contact</a></li>
							<li class="btn-cta"><a href="#"><span>Register</span></a></li>
							<li class="btn-cta"><a href="#"><span>Already Registered</span></a></li>
						</ul>
					</div>
				</div>
				
			</div>
		</div>
	</nav>

@yield('content')



	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="{{ asset('front_template/js/jquery.min.js')}}"></script>
	@stack('scripts')
	<!-- jQuery Easing -->
	<script src="{{ asset('front_template/js/jquery.easing.1.3.js')}}"></script>
	<!-- Bootstrap -->
	<script src="{{ asset('front_template/js/bootstrap.min.js')}}"></script>
	<!-- Waypoints -->
	<script src="{{ asset('front_template/js/jquery.waypoints.min.js')}}"></script>
	<!-- Stellar Parallax -->
	<script src="{{ asset('front_template/js/jquery.stellar.min.js')}}"></script>
	<!-- Carousel -->
	<script src="{{ asset('front_template/js/owl.carousel.min.js')}}"></script>
	<!-- countTo -->
	<script src="{{ asset('front_template/js/jquery.countTo.js')}}"></script>
	<!-- Magnific Popup -->
	<script src="{{ asset('front_template/js/jquery.magnific-popup.min.js')}}"></script>
	<script src="{{ asset('front_template/js/magnific-popup-options.js')}}"></script>
	<!-- Main -->
	<script src="{{ asset('front_template/js/main.js')}}"></script>

	</body>
</html>

