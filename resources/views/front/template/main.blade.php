<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title', 'Home') | Blog SanDroid</title>
	<link rel="stylesheet" href="{{ asset('plugins/bootstrap/themes/Flaty/bootstrap.css') }}">
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
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="collapse navbar-collapse">
                        <p class="navbar-text">Todos los derechos reservados</p>
                        <p class="navbar-text navbar-right"><b>SanDroid &copy; {{ date('Y') }}</b></p>
                    </div>
                </div>
            </nav>
		</footer>
	</div>

	<script src="{{ asset('plugins/jquery/js/jquery-2.1.4.js') }}"></script>
</body>