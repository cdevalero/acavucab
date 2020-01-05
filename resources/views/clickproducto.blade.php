<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>ACAVUCAB Click Producto</title>

  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/clickproducto.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>

  <div>
    <div class="text-align: left; width: 100%">
      <h1 class="my-4 font-weight-bolder" style="margin-left:50px; margin-bottom:25px; margin-top:25px;">ACAVUCAB</h1>
    </div>
    <div style="text-align: right; width: 100%">
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
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
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

  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <div class="col-lg-10">

        <div class="card mt-4" style="margin-bottom: 75px">
          <img class="card-img-top img-fluid" src="{{asset('storage').'/'.$imagenCerveza}}" alt="">
          <div class="card-body">
            <h3 class="card-title">{{$cerveza->nombre}}</h3>
            <h5>Precio {{$cerveza->precio}}</h5>
            @foreach ($descuento as $d)
            @if ($revista->codigo_revista == $d->fk_rc_revista)
            @if ($cerveza->codigo_cerveza == $d->fk_rc_cerveza)
              <h3> OFERTA {{($cerveza->precio)-((($cerveza->precio)*$d->porcentaje_descuento)/100)}} Bs</h3>
            @endif
            @endif
            @endforeach
            
            <p class="card-text">{{$cerveza->historia}}</p>
            <br>
            <hr>
            <div class="container">
                <button class="btn btn-lg btn-primary btn-block" type="button" style="background-color:#ffff66; border-color:#000000; margin-left:15px;"><a href="#" style="color:#000000"><b>Añadir al carro de compra</b></a></button>
            </div>
        </div>
        <!-- /.card -->

      </div>
      <!-- /.col-lg-9 -->
    </div>
    </div>

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">&copy; ACAVUCAB 2019</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="jquery/jquery.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>

</body>

</html>