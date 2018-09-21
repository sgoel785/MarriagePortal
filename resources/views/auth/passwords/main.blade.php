<!doctype html>

<html>
 
 <head>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Author Meta -->
    <meta name="author" content="CodePixar">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->

    <meta name="csrf_token" content="{{ csrf_token() }}" />

    <title>Marriage Portal</title>

<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{URL::asset('css/auth/css/vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{URL::asset('css/auth/css/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{URL::asset('css/auth/css/vendor/animate/animate.css')}}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{URL::asset('css/auth/css/vendor/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{URL::asset('css/auth/css/vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{URL::asset('css/auth/css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{URL::asset('css/auth/css/main.css')}}">
<!--===============================================================================================-->

</head>

<body>
	@yield('content')

	<!--===============================================================================================-->	
	<script src="{{URL::asset('js/auth/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
	<!--===============================================================================================-->
	<script src="{{URL::asset('js/auth/vendor/bootstrap/js/popper.js')}}"></script>
	<script src="{{URL::asset('js/auth/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
	<!--===============================================================================================-->
	<script src="{{URL::asset('js/auth/vendor/select2/select2.min.js')}}"></script>
	<!--===============================================================================================-->
	<script src="{{URL::asset('js/auth/vendor/tilt/tilt.jquery.min.js')}}"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
	<!--===============================================================================================-->
	<script src="{{URL::asset('js/auth/js/main.js')}}"></script>

</body>

</html>