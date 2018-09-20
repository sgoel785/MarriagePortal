<!doctype html>

<html>
 
 @include('common.head')

<body>

	<div id="top"></div>
	@include('common.header')
	@yield('content')
	@include('common.footer')

	<!--<script src="{{URL::asset('js/jquery.min.js')}}"></script>

	<script src="{{URL::asset('js/jquery.validate.min.js')}}"></script>

	<script src="{{URL::asset('js/bootstrap.min.js')}}"></script>-->

	<!--<script src="{{URL::asset('js/custom.js')}}"></script>-->
	<script src="{{URL::asset('js/home/js/vendor/jquery-2.2.4.min.js')}}"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
	<script src="{{URL::asset('js/home/js/vendor/bootstrap.min.js')}}"></script>
	<script src="{{URL::asset('js/home/js/jquery.ajaxchimp.min.js')}}"></script>
	<script src="{{URL::asset('js/home/js/jquery.sticky.js')}}"></script>
	<script src="{{URL::asset('js/home/js/owl.carousel.min.js')}}"></script>
	<script src="{{URL::asset('js/home/js/mixitup.min.js')}}"></script>
	<script src="{{URL::asset('js/home/js/main.js')}}"></script>

</body>

</html>