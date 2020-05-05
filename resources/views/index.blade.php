<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="ltr">
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="{{asset('css/app.css')}}">
		<title>Home</title>
	</head>
	<body>
		@include('partials.header')
		@include('partials.footer')
	</body>
</html>
