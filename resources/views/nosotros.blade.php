<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>ACAVUCAB Nosotros</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/config.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<div>
    <div class="text-align: left; width: 100%">
      <h1 class="my-4 font-weight-bolder" style="margin-left:50px; margin-bottom:25px; margin-top:25px;">ACAVUCAB</h1>
    </div>
    <div class="container" style="text-align: right; margin-right:20px; width: 49.8%; margin-bottom:30px;">
    @guest
        <button>
          <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
        </button>
      @if (Route::has('register'))
        <button>
          <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
        </button>
      @endif

      @else
        <button>
          <a class="dropdown-item" href="{{ route('logout') }}"
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
          </a>

          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
          </form>
        </button>

    @endguest

    @if (Auth::user())
      @if (Auth::user()->permiso('cliente'))
        <button class="btn" style="border-radius:50%; font-size:200%;"><a href="carro" style="color:black;"><i class="fa fa-shopping-cart"></i></a></button>
      @endif
    @endif

    
    </div>
   </div>
  <!-- Navigation -->
  <nav class="navbar navbar-expand-md navbar-dark bg-dark">
      <button class="navbar-toggler" type="button" toggle="collapse" target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExample04">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="main">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="main">Productos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="eventos">Eventos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="tiendas">Tienda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="diary">Diario</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="nosotros">Nosotros</a>
          </li>
          <li class="nav-item">
            @if (Auth::user())
              @if (Auth::user()->permiso('cliente'))
                <li class="nav-item">
                  <a class="nav-link fa fa-cog" href="configuracion"></a>
                </li>
              @endif
            @endif
          </li>
          <li class="nav-item">
            @if (Auth::user())
              @if (Auth::user()->permiso('supervisor'))
                <li class="nav-item">
                  <a class="nav-link fa fa-eye" href="vistas_supervision"></a>
                </li>
              @endif
            @endif
          </li>
        </ul>
        <form class="form-inline my-2 my-md-0">
          <input class="form-control" type="text" placeholder="Search">
        </form>
      </div>
    </nav>
    
<div class="container text-center" style="margin-top:20px; margin-bottom:50px;">
<div style="display:inline-block; max-height:500px; max-width:500px; text-align:center">
    <img style="vertical-align:baseline; max-height:500px; max-width:500px;" src="http://placehold.it/700x400" alt="">
    <hr>
    <h4><b>¿Quiénes somos?</b></h4>
    <p style="white-space:pre"><h5>La asociación de cerveceros artesanales de la ucab  o ACAVUCAB es una asociacion sin fines de lucro creada para la difusion de la cultura cervecera artesanal y casera.</h5></p> 
    <p style="white-space:pre"><h5>Fundada en octubre de 2012 con 54 miembros fundares y actualmente contamos con alrededor de 30 etiquetas propias de la asociacion.</h5></p>
</div>
<hr>
<div style="display:inline-block; max-height:500px; max-width:500px; text-align:center">
    <img style="vertical-align:baseline; max-height:500px; max-width:500px;" src="http://placehold.it/700x400" alt="">
    <hr>
    <h4><b>¿Dónde nos encontramos?</b></h4>
    <p style="white-space:pre"><h5>Si deseas visitar algunos de nuestros locales para porder divertirte y relajarte un rato con nuestra fran gran variedad de cevezas puedes encontarnos en: </h5></p> 
    <p style="white-space:pre"><h5>XXXXXXXXXXXXXXXXXXXXXXXXXX</h5></p>
    <p style="white-space:pre"><h5>XXXXXXXXXXXXXXXXXXXXXXXXXX</h5></p>
    <p style="white-space:pre"><h5>XXXXXXXXXXXXXXXXXXXXXXXXXX</h5></p>
</div>
</div>

<!-- Footer -->
<footer class="py-5 bg-dark">
    <div class="container" style="width:800px;">
      <p class="m-0 text-center text-white">&copy; ACAVUCAB 2019</p>
    </div>
    <!-- /.container -->
  </footer>

  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>