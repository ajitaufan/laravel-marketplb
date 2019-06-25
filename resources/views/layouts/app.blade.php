<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="img/fav.png">
	<!-- Author Meta -->
	<meta name="author" content="CodePixar">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>Karma Shop</title>
	<!--
		CSS
        ============================================= -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
	<link rel="stylesheet" href="{{asset('mp/css/linearicons.css')}}">
	<link rel="stylesheet" href="{{asset('mp/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('mp/css/themify-icons.css')}}">
	<link rel="stylesheet" href="{{asset('mp/css/bootstrap.css')}}">
	<link rel="stylesheet" href="{{asset('mp/css/owl.carousel.css')}}">
	<link rel="stylesheet" href="{{asset('mp/css/nice-select.css')}}">
	<link rel="stylesheet" href="{{asset('mp/css/nouislider.min.css')}}">
	<link rel="stylesheet" href="{{asset('mp/css/ion.rangeSlider.css')}}" />
	<link rel="stylesheet" href="{{asset('mp/css/ion.rangeSlider.skinFlat.css')}}" />
	<link rel="stylesheet" href="{{asset('mp/css/magnific-popup.css')}}">
	<link rel="stylesheet" href="{{asset('mp/css/main.css')}}">
</head>

<body>

	<!-- Start Header Area -->
    @include('layouts.header')
	<!-- End Header Area -->

	<div class="content-wrapper">
        @yield('content')
    </div>

	<!-- start footer Area -->
    @include('layouts.footer')
	<!-- End footer Area -->

	<script src="{{asset('mp/js/vendor/jquery-2.2.4.min.js')}}"></script>
	<script src="{{asset('mp/https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
	 crossorigin="anonymous')}}"></script>
	<script src="{{asset('mp/js/vendor/bootstrap.min.js')}}"></script>
	<script src="{{asset('mp/js/jquery.ajaxchimp.min.js')}}"></script>
	<script src="{{asset('mp/js/jquery.nice-select.min.js')}}"></script>
	<script src="{{asset('mp/js/jquery.sticky.js')}}"></script>
	<script src="{{asset('mp/js/nouislider.min.js')}}"></script>
	<script src="{{asset('mp/js/countdown.js')}}"></script>
	<script src="{{asset('mp/js/jquery.magnific-popup.min.js')}}"></script>
	<script src="{{asset('mp/js/owl.carousel.min.js')}}"></script>
	<!--gmaps Js-->
	<script src="{{asset('mp/https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE')}}"></script>
	<script src="{{asset('mp/js/gmaps.min.js')}}"></script>
	<script src="{{asset('mp/js/main.js')}}"></script>
</body>

</html>
