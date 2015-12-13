
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/">
        <img src="{{ asset('images/logo.png') }}" alt="SanDroid">
      </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      @if(Auth::user())
        <ul class="nav navbar-nav">
          <li><a href="#">Inicio</a></li>
          <li><a href="{{ route('admin.users.index') }}">Usuarios</a></li>
          <li><a href="{{ route('admin.categories.index') }}">Categorías</a></li>
          <li><a href="{{ route('admin.articles.index') }}">Artículos</a></li>
          <li><a href="{{ route('admin.images.index') }}">Imágenes</a></li>
          <li><a href="{{ route('admin.tags.index') }}">Tags</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="{{ route('front.index') }}" target="_blank">Página principal</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }}<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="{{ route('admin.auth.logout') }}">Salir</a></li>
            </ul>
          </li>
        </ul>
      @else
        <ul class="nav navbar-nav navbar-right">
          <li><a href="{{ route('admin.auth.login') }}">Iniciar sesión</a></li>
        </ul>
      @endif
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>