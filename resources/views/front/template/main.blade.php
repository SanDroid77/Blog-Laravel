<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title', 'Home') | Blog Facilito</title>
	<link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/journal/bootstrap.css') }}">
	<link rel="stylesheet" href="{{ asset('css/general.css') }}">
	<link rel="stylesheet" href="{{ asset('plugins/font-awesome/css/font-awesome.min.css') }}">
</head>
<body>
	<header>
		@include('front.template.partials.header')
	</header>
	<div class="container">
		@yield('content')
		<footer>
			<hr>
			Todos los derechos reservados &copy; {{ date('Y') }}
			<div class="pull-right">SanDroid</div>
		</footer>
	</div>

	<script src="{{ asset('plugins/jquery/js/jquery-2.1.4.js') }}"></script>
</body>
</html>