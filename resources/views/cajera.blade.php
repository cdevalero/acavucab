<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>ACAVUCAB Cajera</title>

  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
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
          @if (Auth::user())
            @if (Auth::user()->permiso('cliente'))
            <li class="nav-item">
              <a class="nav-link fa fa-cog" href="configuracion"></a>
            @endif
          @endif
        </ul>
        <form class="form-inline my-2 my-md-0">
          <input class="form-control" type="text" placeholder="Search">
        </form>
      </div>
    </nav>

  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <div class="col-lg-3">
        <div>
            <hr>
            <h4 style="text-align:center; background-color:black; color:white; margin-bottom:0; padding:1px; border-radius:10px"> <b> Productos seleccionados </b> </h4>
            <ul class="list-group btn" id="listL">
              <li class="list-group-item" data-value="Cerveza1">Cerveza1 - Precio</li>
              <li class="list-group-item" data-value="Cerveza2">Cerveza2 - Precio</li>
              <li class="list-group-item" data-value="Cerveza3">Evento3 - Precio</li>
            </ul>
            <div class="boxed">
                <span><font color="green">Total: </font></span>
                <strong><font color="green"><b>$$$$$ Bs</b></font></strong>
            </div>
            <hr>
        </div>
      </div>
      <!-- /.col-lg-3 -->

      <div class="col-lg-9">

        <div class="card mt-4" style="margin-bottom: 75px; margin-right:40px;">
          <img class="card-img-top img-fluid" src="http://placehold.it/700x400" alt="">
          <div class="card-body">
          <h4 style="text-align:center; background-color:black; color:white; margin-bottom:0; padding:1px; border-radius:10px"> <b> Lista de productos </b> </h4>
            <ul class="list-group btn" id="listPR">
              <li class="list-group-item" data-value="Cerveza1 - Precio">Cerveza1 - Precio</li>
              <li class="list-group-item" data-value="Evento2 - Precio">Evento2 - Precio</li>
              <li class="list-group-item" data-value="Cerveza3 - Precio">Cerveza3 - Precio</li>
            </ul>
            <br>
            <hr>
            <div class="container">
                <button class="btn btn-lg btn-primary btn-block" type="button" style="background-color:#ffff66; border-color:#000000; margin-left:15px;"><a href="{{ route('lugar.create') }}" style="color:#000000"><b>Pagar</b></a></button>
            </div>
        </div>
        <!-- /.card -->

      </div>
      <!-- /.col-lg-9 -->

    </div>

  </div>
  <!-- /.container -->
  </div>

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
  <script>
    document.getElementById("listL").addEventListener("click",function(e) {
        this.removeChild(e.target);
    })

        document.getElementById("listPR").addEventListener("click",function(e) {
          var ul = document.getElementById("listL");
          var li = document.createElement("li");
          li.className = "list-group-item";
          li.appendChild(document.createTextNode(e.target.dataset.value));
          ul.appendChild(li);
        })

   </script>

</body>

</html>