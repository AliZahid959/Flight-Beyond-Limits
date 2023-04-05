<!DOCTYPE html>
<html>
	<head>

		<!-- Basic -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title>IBN FIRNAS ACADEMY</title>

		<meta name="keywords" content="IBN FIRNAD ACADEMY" />
		<meta name="description" content="IBN FIRNAD ACADEMY">
		<meta name="author" content="IBN FIRNAD ACADEMY">

		<!-- Favicon -->
		<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
		<link rel="apple-touch-icon" href="img/apple-touch-icon.png">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">



		<link id="googleFonts" href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700&display=swap" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="{{asset('front/assets/vendor/bootstrap/css/bootstrap.min.css')}}">
		<link rel="stylesheet" href="{{asset('front/assets/vendor/fontawesome-free/css/all.min.css')}}">
		<link rel="stylesheet" href="{{asset('front/assets/vendor/animate/animate.compat.css')}}">
		<link rel="stylesheet" href="{{asset('front/assets/vendor/simple-line-icons/css/simple-line-icons.min.css')}}">
		<link rel="stylesheet" href="{{asset('front/assets/vendor/owl.carousel/assets/owl.carousel.min.css')}}">
		<link rel="stylesheet" href="{{asset('front/assets/vendor/owl.carousel/assets/owl.theme.default.min.css')}}">
		<link rel="stylesheet" href="{{asset('front/assets/vendor/magnific-popup/magnific-popup.min.css')}}">

		<!-- Theme CSS -->
		<link rel="stylesheet" href="{{asset('front/assets/css/theme.css')}}">
		<link rel="stylesheet" href="{{asset('front/assets/css/theme-elements.css')}}">
		<link rel="stylesheet" href="{{asset('front/assets/css/theme-blog.css')}}">
		<link rel="stylesheet" href="{{asset('front/assets/css/theme-shop.css')}}">


        <!-- Start CSS Slideshow HEAD section -->
        <link rel="stylesheet" type="text/css" href="engine1/style.css" />
        <script type="text/javascript" src="engine1/jquery.js"></script>
        <!-- End CSS Slider HEAD section -->

		<!-- Demo CSS -->
		<link rel="stylesheet" href="{{asset('front/assets/css/demos/demo-education.css')}}">
		<!-- Skin CSS -->
		<link id="skinCSS" rel="stylesheet" href="{{asset('front/assets/css/skins/skin-education.css')}}">

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="{{asset('front/assets/css/custom.css')}}">

		<!-- Head Libs -->
		<script src="{{asset('front/assets/vendor/modernizr/modernizr.min.js')}}"></script>


        <style>

        #header .header-nav.header-nav-links nav > ul > li > a, #header .header-nav.header-nav-links nav > ul > li:hover > a, #header .header-nav.header-nav-line nav > ul > li > a, #header .header-nav.header-nav-line nav > ul > li:hover > a {
            position: relative;
            background: transparent !important;
            padding: 0 .9rem;
            margin: 1px 0 0;
            min-height: 51px;
            height: 100%;
	    }

        #header .header-nav-main nav > ul > li > a:hover{

            border:2px solid #001624 !important;
        }

	#header .header-nav-main nav > ul > li > a{

        border:2px solid transparent !important;
    }


    </style>
	</head>
	<body>
        @include('front.page.academy.layout.header')
        @yield('content')
        @include('front.page.academy.layout.footer')
    </div>
    <!-- Vendor -->
    <script src="{{asset('front/assets/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('front/assets/vendor/jquery.appear/jquery.appear.min.js')}}"></script>
    <script src="{{asset('front/assets/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
    <script src="{{asset('front/assets/vendor/jquery.cookie/jquery.cookie.min.js')}}"></script>
    <script src="{{asset('front/assets/vendor/popper/umd/popper.min.js')}}"></script>
    <script src="{{asset('front/assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('front/assets/vendor/jquery.validation/jquery.validate.min.js')}}"></script>
    <script src="{{asset('front/assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js')}}"></script>
    <script src="{{asset('front/assets/vendor/jquery.gmap/jquery.gmap.min.js')}}"></script>
    <script src="{{asset('front/assets/vendor/lazysizes/lazysizes.min.js')}}"></script>
    <script src="{{asset('front/assets/vendor/isotope/jquery.isotope.min.js')}}"></script>
    <script src="{{asset('front/assets/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('front/assets/vendor/magnific-popup/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('front/assets/vendor/vide/jquery.vide.min.js')}}"></script>
    <script src="{{asset('front/assets/vendor/vivus/vivus.min.js')}}"></script>
    <script src="{{asset('front/assets/vendor/jquery.countdown/jquery.countdown.min.js')}}"></script>
    <!-- Theme Base, Components and Settings -->
    <script src="{{asset('front/assets/js/theme.js')}}"></script>
    <!-- Current Page Vendor and Views -->
    <!-- Theme Custom -->
    <script src="{{asset('front/assets/js/custom.js')}}"></script>
    <!-- Theme Initialization Files -->
    <script src="{{asset('front/assets/js/theme.init.js')}}"></script>
</body>
</html>
