<!doctype html>
<html>
@include('common.head')
<body class="nav-md that-computer-guy">
	<div class="container body">
		<div class="main_container">
			<div class="col-md-3 left_col">
				<div class="left_col scroll-view">
					@include('common.header')
					@include('common.sidebar')
				</div>
			</div>
			@include('common.top_navigation')
			@yield('content')
			@include('common.footer')
		</div>
	</div>
<script src="{{asset('public/js/jquery.min.js')}}"></script>
<script src="{{asset('public/js/user/user.js')}}"></script>
<script src="{{asset('public/js/jquery.validate.min.js')}}"></script>
<script src="{{asset('public/js/bootstrap.min.js')}}"></script>
<script src="{{asset('public/js/custom.js')}}"></script>
</body>
</html>

