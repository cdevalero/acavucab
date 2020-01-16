
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
          <?php $total_cantidad = 0 ?>
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

<div>
  <div class="txt-heading">Carro de Compras</div>

  </div>
<hr>

     <table id="cart" class="table table-hover table-condensed">
        <thead>
        <tr>
            <th style="width:50%">Producto</th>
            <th style="width:10%">Precio</th>
            <th style="width:8%">Cantidad</th>
            <th style="width:22%" class="text-center">Subtotal</th>
            <th style="width:10%"></th>
        </tr>
        </thead>
        <tbody>
 
        <?php $total = 0 ?>
 
        @if(session('cart'))
            @foreach(session('cart') as $id => $details)
 
                <?php $total += $details['price'] * $details['quantity'] ?>
                
                <?php $total_cantidad += $details['quantity'] ?>
 
                <tr>
                    <td data-th="Producto">
                        <div class="row">
                            <div class="col-sm-9">
                                <h4 class="nomargin">{{ $details['name'] }}</h4>
                            </div>
                        </div>
                    </td>
                    <td data-th="Precio">${{ $details['price'] }}</td>
                    <td data-th="Cantidad">
                        <input type="number" value="{{ $details['quantity'] }}" class="form-control quantity" />
                    </td>
                    <td data-th="Subtotal" class="text-center">${{ $details['price'] * $details['quantity'] }}</td>
                    <td class="actions" data-th="">
                        <button class="btn btn-info btn-sm update-cart" data-id="{{ $id }}"><i class="fa fa-refresh"></i></button>
                        <button class="btn btn-danger btn-sm remove-from-cart" data-id="{{ $id }}"><i class="fa fa-trash-o"></i></button>
                    </td>
                </tr>
            @endforeach
        @endif
 
        </tbody>
        <tfoot>
        <tr class="visible-xs">
            <td class="text-center"><strong>Total {{ $total }}</strong></td>
        </tr>
        <tr>
            <td><a href="{{ url('/') }}" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continuar comprando</a></td>
            <td colspan="2" class="hidden-xs"></td>
            <td class="hidden-xs text-center"><strong>Total ${{ $total }}</strong></td>
        </tr>
        </tfoot>
    </table>

        </div>
        <hr>
        <div>
          <h4 class="mb-3" style="text-align:center; margin-top:25px">Pago</h4>
          <hr>
          <form class="needs-validation" novalidate>

            <h4 class="mb-3" style="text-align:center;">Método de pago</h4>

            <div class="d-block my-3" style="text-align:center;">
            <div class="form-group input-group">
    	        <div class="input-group-prepend">
		            <span class="input-group-text"> <i class="fa fa-credit-card"></i> </span>
              </div>
              <select class="form-control" onchange="show(this);" required>        <!-- dropdown//TIPO DE PAGO -->
                <option value="0">Seleccione su método de pago...</option>
			          <option value="credit">Tarjeta de crédito</option>
			          <option value="debit">Tarjeta de débito</option>
                <option value="punto">Punto</option>
                <option value="transferencia">Transferencia</option>
              </select>
            </div>
            </div> 

<!-- TARJETA DE CREDITO -->

            <div id="credit" style="display: none">
            <hr>
            <form class="needs-validation" novalidate method="POST" action="insertVenta">
            @csrf
                <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="nameC">Titular de la tarjeta</label>
                    <input type="text" class="form-control" id="nameC" placeholder="" required>
                    <div class="invalid-feedback">
                        Titular de la tarjeta requerida
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="numberC">Número de tarjeta de crédito</label>
                    <input type="text" class="form-control" name="numberC" id="numberCr" placeholder="" required>
                    <div class="invalid-feedback">
                        Número de tarjeta de crédito requerido
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="bankC">Banco</label>
                    <select class="form-control" id="bankC" name="selectB" required>        <!-- dropdown//TIPO DE PAGO -->
                    @foreach ($banco as $b)
                      <option value="{{$b->codigo_banco}}">{{$b->nombre}}</option>
                    @endforeach
                    </select>
                </div>
                </div>
                <div class="row">
                    <div class="col-md-3 mb-3">
                        <label for="expirationC">Vencimiento</label>
                        <input type="text" class="form-control" id="expirationC" placeholder="" required>
                    <div class="invalid-feedback">
                        Fecha de vencimiento requerido
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <label for="cvvC">Código de seguridad</label>
                    <input type="text" class="form-control" id="cvvC" placeholder="" required>
                    <div class="invalid-feedback">
                        Código de seguridad requerido
                    </div>
                </div>
                </div>

                <input type="hidden" name="cantidadTotal" value={{$total_cantidad}}>
                <input type="hidden" name="precioTotal" value={{$total}}>

                <!-- BOTON DE PAGO -->
                <hr class="mb-4">
            <button class="btn btn-primary btn-lg btn-block" name="creditPago" type="submit" style="background-color:#ffff66; border-color:#000000; width=120px;"><font color="black">Realizar pago</font></button>
            </form>
            </div>

<!-- TARJETA DE DEBITO -->

            <div id="debit" style="display: none">
            <hr>
            <form class="needs-validation" novalidate method="POST" action="insertVenta">
            @csrf
                <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="nameD">Titular de la tarjeta</label>
                    <input type="text" class="form-control" id="nameD" placeholder="" required>
                    <div class="invalid-feedback">
                        Titular de la tarjeta requerida
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="numberD">Número de tarjeta de débito</label>
                    <input type="text" class="form-control" name="numberD" id="numberDe" placeholder="" required>
                    <div class="invalid-feedback">
                        Número de tarjeta de débito requerido
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                <label for="bankD">Banco</label>
                    <select class="form-control" id="bankD" name="selectB" required>        <!-- dropdown//TIPO DE PAGO -->
                    @foreach ($banco as $b)
                      <option value="{{$b->codigo_banco}}">{{$b->nombre}}</option>
                    @endforeach
                    </select>
                </div>
                </div>
                <div class="row">
                    <div class="col-md-3 mb-3">
                        <label for="expirationD">Vencimiento</label>
                        <input type="text" class="form-control" id="expirationD" placeholder="" required>
                    <div class="invalid-feedback">
                        Fecha de vencimiento requerido
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <label for="cvvD">Código de seguridad</label>
                    <input type="text" class="form-control" id="cvvD" placeholder="" required>
                    <div class="invalid-feedback">
                        Código de seguridad requerido
                    </div>
                </div>
                </div>

                <input type="hidden" name="cantidadTotal" value={{$total_cantidad}}>
                <input type="hidden" name="precioTotal" value={{$total}}>

                <!-- BOTON DE PAGO -->
                <hr class="mb-4">
            <button class="btn btn-primary btn-lg btn-block" name="debitPago" type="submit" style="background-color:#ffff66; border-color:#000000; width=120px;"><font color="black">Realizar pago</font></button>
            </form>
            </div>

<!-- PUNTO -->

            <div id="punto" style="display: none">
            <hr>
            <form class="needs-validation" novalidate method="POST" action="insertVenta">
            @csrf
              <p>PAGO CON PUNTOS</p>

              <?php
                foreach ($venta as $ven){
                  if ($ven->FK_venta_empleado = 1){
                    foreach ($puntoCompra as $pc){
                      if ($pc->codigo_puntoCompra == $ven->FK_venta_puntoCompra){
                          $puntos = 0;
                          $puntos += $pc->cantidad;
                      }
                    }
                  }
                }

                foreach ($puntoValor as $pv){
                  if ($pv->fecha = date('d/m/Y')){
                      $divide = $pv->valor;
                  }
              }

              $totalpuntos = $total_cantidad / $divide;
              ?>

              <p>Usted tiene <?php echo $puntos; ?> puntos</p>
              <p>Puntos a pagar:  <?php echo $totalpuntos; ?> puntos</p>
              <input type="hidden" name="puntosT" value={{$totalpuntos}}>
              
              <input type="hidden" name="cantidadTotal" value={{$total_cantidad}}>
              <input type="hidden" name="precioTotal" value={{$total}}>

          <!-- BOTON DE PAGO -->
              <hr class="mb-4">
            <button class="btn btn-primary btn-lg btn-block" name="puntoPago" type="submit" style="background-color:#ffff66; border-color:#000000; width=120px;" <?php if ($puntos < $totalpuntos){ ?> disabled <?php   } ?>><font color="black">Realizar pago</font></button>
            </form>
            </div>

<!-- TRANSFERENCIA -->

            <div id="transf" style="display: none">
            <hr>
            <form class="needs-validation" novalidate method="POST" action="insertVenta">
            @csrf
              <p> TRANSFERENCIA </p>
              <hr>
              <div class="row">
                    <div class="col-md-3 mb-3">
                    <label for="bankT">Banco</label>
                    <select class="form-control" id="bankT" name="selectB" required>        <!-- dropdown//TIPO DE PAGO -->
                    @foreach ($banco as $b)
                      <option value="{{$b->codigo_banco}}">{{$b->nombre}}</option>
                    @endforeach
                    </select>
                </div>
                <div class="col-md-3 mb-3">
                        <label for="numtransf">Número de transferencia</label>
                        <input type="text" class="form-control" name="numT" id="numtransf" placeholder="" required>
                    <div class="invalid-feedback">
                        Número de transferencia requerido
                    </div>
                </div>
              </div>

              <input type="hidden" name="cantidadTotal" value={{$total_cantidad}}>
              <input type="hidden" name="precioTotal" value={{$total}}>

          <!-- BOTON DE PAGO -->
              <hr class="mb-4">
            <button class="btn btn-primary btn-lg btn-block" name="transfPago" type="submit" style="background-color:#ffff66; border-color:#000000; width=120px;"><font color="black">Realizar pago</font></button>
            </form>
            </div>

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
            document.getElementById("punto").style.display = 'none';
            document.getElementById("transf").style.display = 'none';

            if(txt.match("credit")){
                document.getElementById("credit").style.display = 'block';
            }
            if(txt.match("debit")){
                document.getElementById("debit").style.display = 'block';
            }
            if(txt.match("punto")){
                document.getElementById("punto").style.display = 'block';
            }
            if(txt.match("transf")){
                document.getElementById("transf").style.display = 'block';
            }
    }
    </script>

<script type="text/javascript">
$(".update-cart").click(function (e) {
    e.preventDefault();

    var ele = $(this);

     $.ajax({
        url: '{{ url('update-cart') }}',
        method: "patch",
        data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id"), quantity: ele.parents("tr").find(".quantity").val()},
        success: function (response) {
            window.location.reload();
        }
     });
 });

 $(".remove-from-cart").click(function (e) {
     e.preventDefault();

     var ele = $(this);

     if(confirm("Está seguro?")) {
         $.ajax({
             url: '{{ url('remove-from-cart') }}',
             method: "DELETE",
             data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id")},
             success: function (response) {
                 window.location.reload();
             }
         });
     }
 });
 </script>
 
  </body>
</html>
