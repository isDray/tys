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

</body>
</html>
<script src="{{ asset('js/main.js') }}"></script>