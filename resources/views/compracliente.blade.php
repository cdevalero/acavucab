<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>ACAVUCAB Compra de Cliente</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="compraCl.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>

  <body>

  <!-- Navigation -->
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

    <div class="row">
        <div class="boxed" style="margin-left:50px; margin-top:25px;">
          <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted">Carro de compras</span>
          </h4>
          <ul class="list-group mb-3">
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Producto 1</h6>
              </div>
              <span class="text-muted">120,000.00 Bs</span>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Producto 2</h6>
              </div>
              <span class="text-muted">80,000.00 Bs</span>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Producto 3</h6>
              </div>
              <span class="text-muted">50,000.00 Bs</span>
            </li>
            <li class="list-group-item d-flex justify-content-between">
              <span><font color="green">Total </font></span>
              <strong><font color="green"><b>250,000.00 Bs</b></font></strong>
            </li>
          </ul>

        </div>
        <div class="col-md-8 order-md-1" style="margin-left:20px">
          <h4 class="mb-3" style="text-align:center; margin-top:25px">Pago</h4>
          <hr>
          <form class="needs-validation" novalidate>

            <h4 class="mb-3" style="text-align:center;">Método de pago</h4>

            <div class="d-block my-3" style="text-align:center;">
            <div class="form-group input-group">
    	        <div class="input-group-prepend">
		            <span class="input-group-text"> <i class="fa fa-credit-card"></i> </span>
              </div>
              <select class="form-control" onchange="show(this);" required>        <!-- dropdown//TIPO DE CLIENTE -->
                <option value="0">Seleccione su método de pago...</option>
			          <option value="credit">Tarjeta de crédito</option>
			          <option value="debit">Tarjeta de débito</option>
                <option value="cheque">Cheque</option>
                <option value="punto">Punto</option>
                <option value="divisa">Divisa</option>
                <option value="transferencia">Transferencia</option>
              </select>
            </div>
            </div> 

            <div id="credit" style="display: none">
            <hr>
                <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="cc-name">Titular de la tarjeta</label>
                    <input type="text" class="form-control" id="cc-name" placeholder="" required>
                    <div class="invalid-feedback">
                        Titular de la tarjeta requerida
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="cc-number">Número de tarjeta de crédito</label>
                    <input type="text" class="form-control" id="cc-number" placeholder="" required>
                    <div class="invalid-feedback">
                        Número de tarjeta de crédito requerido
                    </div>
                </div>
                </div>
                <div class="row">
                    <div class="col-md-3 mb-3">
                        <label for="cc-expiration">Vencimiento</label>
                        <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
                    <div class="invalid-feedback">
                        Fecha de vencimiento requerido
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <label for="cc-cvv">Código de seguridad</label>
                    <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
                    <div class="invalid-feedback">
                        Código de seguridad requerido
                    </div>
                </div>
                </div>
            </div>

            <div id="debit" style="display: none">
            <hr>
                <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="cc-name">Titular de la tarjeta</label>
                    <input type="text" class="form-control" id="cc-name" placeholder="" required>
                    <div class="invalid-feedback">
                        Titular de la tarjeta requerida
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="cc-number">Número de tarjeta de débito</label>
                    <input type="text" class="form-control" id="cc-number" placeholder="" required>
                    <div class="invalid-feedback">
                        Número de tarjeta de débito requerido
                    </div>
                </div>
                </div>
                <div class="row">
                    <div class="col-md-3 mb-3">
                        <label for="cc-expiration">Vencimiento</label>
                        <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
                    <div class="invalid-feedback">
                        Fecha de vencimiento requerido
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <label for="cc-cvv">Código de seguridad</label>
                    <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
                    <div class="invalid-feedback">
                        Código de seguridad requerido
                    </div>
                </div>
                </div>
            </div>

            <div id="cheque" style="display: none">
            <hr>
              <p>DATOS DE CHEQUE</p>
            </div>

            <div id="punto" style="display: none">
            <hr>
              <p>DATOS DE PUNTO</p>
            </div>

            <div id="divisa" style="display: none">
            <hr>
              <p>DATOS DE DIVISA</p>
            </div>

            <div id="transf" style="display: none">
            <hr>
              <p>DATOS DE TRANSFERENCIA</p>
            </div>

            <hr class="mb-4">
            <button class="btn btn-primary btn-lg btn-block" type="submit" style="background-color:#ffff66; border-color:#000000; width=120px;"><font color="black">Realizar pago</font></button>
          </form>
        </div>
      </div>

    <footer class="py-5 bg-dark" style="margin-top:75px;">
        <div class="container">
            <p class="m-0 text-center text-white">&copy; ACAVUCAB 2019</p>
        </div>
    </footer>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../../../assets/js/vendor/popper.min.js"></script>
    <script src="../../../../dist/js/bootstrap.min.js"></script>
    <script src="../../../../assets/js/vendor/holder.min.js"></script>
    <script>
      // Example starter JavaScript for disabling form submissions if there are invalid fields
      (function() {
        'use strict';

        window.addEventListener('load', function() {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName('needs-validation');

          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();

      function show(obj) {
            txt = obj.options[obj.selectedIndex].value;
            document.getElementById("credit").style.display = 'none';
            document.getElementById("debit").style.display = 'none';
            document.getElementById("cheque").style.display = 'none';
            document.getElementById("punto").style.display = 'none';
            document.getElementById("divisa").style.display = 'none';
            document.getElementById("transf").style.display = 'none';

            if(txt.match("credit")){
                document.getElementById("credit").style.display = 'block';
            }
            if(txt.match("debit")){
                document.getElementById("debit").style.display = 'block';
            }
            if(txt.match("cheque")){
                document.getElementById("cheque").style.display = 'block';
            }
            if(txt.match("punto")){
                document.getElementById("punto").style.display = 'block';
            }
            if(txt.match("divisa")){
                document.getElementById("divisa").style.display = 'block';
            }
            if(txt.match("transf")){
                document.getElementById("transf").style.display = 'block';
            }
    }
    </script>
  </body>
</html>
