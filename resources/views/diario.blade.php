<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>ACAVUCAB Diario</title>

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
    @endif    </div>
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
          <li>
          @if (Auth::user())
            @if (Auth::user()->permiso('cliente'))
            <li class="nav-item">
              <a class="nav-link fa fa-cog" href="configuracion"></a> 
            @endif
          @endif
          </li>
        </ul>
        <form class="form-inline my-2 my-md-0">
          <input class="form-control" type="text" placeholder="Search">
        </form>
      </div>
    </nav>
    
<div class="container" style="margin-top:20px; text-center">
@if ($revista<>NULL)
<h3><b>Diario de la Cerveza     {{$revista->fecha_publicacion}} </b></h3>
@endif
<hr>
<div class="row" style="margin-left:180px;">

  <div class="col-lg-9">

    <div class="row">
    @foreach ($descuento as $d)
    @if ($revista->codigo_revista == $d->fk_rc_revista)
    @foreach ($cerveza as $p)
    @if ($p->codigo_cerveza == $d->fk_rc_cerveza)
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="card h-100">
          <a href="producto{{$p->codigo_cerveza}}">
          @foreach ($imagencerveza as $imagen)
            @if ($imagen->fk_imagencerveza_cerveza == $p->codigo_cerveza)
              <img class="card-img-top" src="{{asset('storage').'/'.$imagen->imagen}}" alt="">
            @endif
          @endforeach
          </a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="producto{{$p->codigo_cerveza}}">{{$p->nombre}}</a>
            </h4>
            <h6>normal: {{$p->precio}} Bs</h6>
            
            <h5>OFERTA: {{($p->precio)-((($p->precio)*$d->porcentaje_descuento)/100)}} Bs</h5>
          </div>
        </div>
      </div>
    @endif
    @endforeach
    @endif
    @endforeach

    </div>
    <!-- /.row -->

</div>
<!-- /.row -->

</div>
<!-- /.container -->
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