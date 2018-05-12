<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/bootstrap3/css/bootstrap.min.css')}}">
	@yield('custom_styles')
</head>
<body>
	@include('layouts.partials._header')
	@yield('content')
	@include('layouts.partials._footer')
	<script type="text/javascript" src="{{asset('vendor/jquery/jquery-1.12.4.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('vendor/bootstrap3/js/bootstrap.min.js')}}"></script>
	@yield('custom_scripts')
</body>
</html>