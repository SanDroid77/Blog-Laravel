@extends('admin.template.main')

@section('title')
    Bienvenido
@endsection

@section('content')
	<div class="jumbotron">
		<h1>Proyecto de Blog con Laravel 5.</h1>
		<p>Hola a todos! Soy SanDroid y estoy presentando mi primer proyecto web, el cual consiste en un blog usando el espectacular framework basado en PHP, <a href="laravel.com">Laravel</a>, en su versión 5 y <a href="getbootstrap.com">Bootstrap</a> para el diseño y front-end. Este proyecto se hace gracias a un completo curso dictado por Carlos Fernandes (su Twitter es <a href="https://twitter.com/_bycar">twitter.com/_bycar</a>) en la plataforma <a href="codigofacilito.com">Código Facilito</a>.</p>
		<p>El sitio todavía está en construcción, y solo se puede acceder si se tiene usuario registrado. Para solicitarlo, consulte al administrador, o sea a mí :v</p>
		<p><a class="btn btn-primary btn-lg" href="mailto:sandrosvragulia@gmail.com" role="button">Contactar a SanDroid</a></p>
	</div>
@endsection