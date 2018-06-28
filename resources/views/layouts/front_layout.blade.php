<html>
<head>
	<title>
    山石山設計 - @yield('title')
	</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- 全體用js -->
    <script src="{{ asset('js/jquery-3.3.1.js') }}"></script>
    <script src="{{ asset('js/modernizr.js') }}"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>

	<!-- 全體用css -->
	<link rel="stylesheet" type="text/css" href="{{ asset('bootstrap/css/bootstrap-theme.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('bootstrap/css/bootstrap.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/layouts.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/reset.css') }}">
</head>
<body>

@section('main')
@show

<!-- menu -->
 <header>
    <nav class="cd-stretchy-nav">
		<a class="cd-nav-trigger" href="#0">	
			<span aria-hidden="true"></span>
		</a>

		<ul>
			<li><a href="#0" class="active"><span>Home</span></a></li>
			<li><a href="#0"><span>about</span></a></li>
			<li><a href="#0"><span>works</span></a></li>
			<li><a href="#0"><span>share</span></a></li>
			<li><a href="{{url('contact')}}"><span>contact</span></a></li>
		</ul>

		<span aria-hidden="true" class="stretchy-nav-bg"></span>
	</nav>
</header>
<!-- menu 結束 -->
</body>
</html>
<script src="{{ asset('js/main.js') }}"></script>