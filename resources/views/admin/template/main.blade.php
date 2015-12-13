<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Default') | Panel de administración</title>
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap/themes/Flaty/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/chosen/chosen.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/trumbowyg/ui/trumbowyg.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/fileinput/css/fileinput.css') }}">
</head>
<body>

    <div class="container">
        @include('admin.template.partials.nav')

        <section>
            <div class="panel panel-default">
                
                <div class="panel-heading">
                    <h3 class="panel-title">@yield('title')</h3>
                </div>
                <div class="panel-body">
                    @include('flash::message')
                    @include('admin.template.partials.errors')
                    @yield('content')
                </div>
            </div>
        </section>

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
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.js') }}"></script>
    <script src="{{ asset('plugins/chosen/chosen.jquery.js') }}"></script>
    <script src="{{ asset('plugins/trumbowyg/trumbowyg.js') }}"></script>
    <script src="{{ asset('plugins/fileinput/js/fileinput.js') }}"></script>

    @yield('js')
</body>
</html>