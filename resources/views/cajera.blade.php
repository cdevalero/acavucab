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
      <?php $total_cantidad = 0 ?>
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

    <div>

      <div>
        <div>
            <hr>
            <div class="txt-heading">Productos seleccionados</div>

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
 
        @if(session('cajera'))
            @foreach(session('cajera') as $id => $details)
 
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
                        <button class="btn btn-info btn-sm update-caj" data-id="{{ $id }}"><i class="fa fa-refresh"></i></button>
                        <button class="btn btn-danger btn-sm remove-from-caj" data-id="{{ $id }}"><i class="fa fa-trash-o"></i></button>
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
            <td><a href="{{ url('/') }}" class="btn btn-warning"><i class="fa fa-angle-left"></i> Volver a la página principal </a></td>
            <td colspan="2" class="hidden-xs"></td>
            <td class="hidden-xs text-center"><strong>Total ${{ $total }}</strong></td>
        </tr>
        </tfoot>
    </table>

          </div>
<hr>
            <hr>
        </div>
      </div>
      <!-- /.col-lg-3 -->

      <div>


        <div class="card mt-4" style="margin-bottom: 75px; margin-right:40px;">
          
          <div class="card-body">
          <h4 style="text-align:center; background-color:black; color:white; margin-bottom:0; padding:1px; border-radius:10px"> <b> Lista de productos </b> </h4>
            <div>

            <div class="row">
            @foreach ($cerveza as $c)
              <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100">
                <a href="{{ url('add-to-caj/'.$c->codigo_cerveza) }}">
                  @foreach ($imagencerveza as $objeto)
                    @if ($objeto->fk_imagencerveza_cerveza == $c->codigo_cerveza)
                      <img class="card-img-top" src="{{asset('storage').'/'.$objeto->imagen}}" alt="">
                    @endif
                  @endforeach
                  </a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="{{ url('add-to-caj/'.$c->codigo_cerveza) }}">{{$c->nombre}}</a>
                  </h4>
                <h5>{{$c->precio}} Bs</h5>
              </div>
            </div>
          </div>
        @endforeach
        </div>

        <hr>

        <div class="row">
            @foreach ($entrada as $e)
              <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100">
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="{{ url('add-to-caje/'.$e->codigo_entrada) }}">{{$e->nombre}}</a>
                  </h4>
                <h5>{{$e->estatus}} Bs</h5>
              </div>
            </div>
          </div>
        @endforeach
        </div>

            </div>
            <br>
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
                <option value="cheque">Cheque</option>
                <option value="efectivo">Efectivo</option>
                <option value="divisa">Divisa</option>
              </select>
            </div>
            </div> 

<!-- TARJETA DE CREDITO -->

            <div id="credit" style="display: none">
            <hr>
            <form class="needs-validation" novalidate method="POST" action="insertVentaT">
            @csrf
            <p>PAGO CON TARJETA DE CRÉDITO</p>
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
                    <input type="text" class="form-control" name="numberDT" id="numberCr" placeholder="" required>
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
            <button class="btn btn-primary btn-lg btn-block" name="creditPagoT" type="submit" style="background-color:#ffff66; border-color:#000000; width=120px;"><font color="black">Realizar pago</font></button>
            </form>
            </div>

<!-- TARJETA DE DEBITO -->

            <div id="debit" style="display: none">
            <hr>
            <form class="needs-validation" novalidate method="POST" action="insertVentaT">
            @csrf
            <p>PAGO CON TARJETA DE DÉBITO</p>
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
                    <input type="text" class="form-control" name="numberDT" id="numberDe" placeholder="" required>
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
            <button class="btn btn-primary btn-lg btn-block" name="debitPagoT" type="submit" style="background-color:#ffff66; border-color:#000000; width=120px;"><font color="black">Realizar pago</font></button>
            </form>
            </div>

<!-- CHEQUE -->

            <div id="cheque" style="display: none">
            <hr>
            <form class="needs-validation" novalidate method="POST" action="insertVentaT">
            @csrf
              <p>PAGO CON CHEQUE</p>
              <div class="row">
                    <div class="col-md-3 mb-3">
                        <<label for="bankCh">Banco</label>
                    <select class="form-control" id="bankCh" name="selectB" required>        <!-- dropdown//TIPO DE PAGO -->
                    @foreach ($banco as $b)
                      <option value="{{$b->codigo_banco}}">{{$b->nombre}}</option>
                    @endforeach
                    </select>
                </div>
                <div class="col-md-3 mb-3">
                        <label for="numtransf">Número de cheque</label>
                        <input type="text" class="form-control" name="numCh" id="numero" placeholder="" required>
                    <div class="invalid-feedback">
                        Número de cheque
                    </div>
                </div>
              </div>

              <input type="hidden" name="cantidadTotal" value={{$total_cantidad}}>
              <input type="hidden" name="precioTotal" value={{$total}}>

          <!-- BOTON DE PAGO -->
              <hr class="mb-4">
            <button class="btn btn-primary btn-lg btn-block" name="chequePagoT" type="submit" style="background-color:#ffff66; border-color:#000000; width=120px;"><font color="black">Realizar pago</font></button>
            </form>
            </div>

<!-- EFECTIVO-->

            <div id="efectivo" style="display: none">
            <hr>
            <form class="needs-validation" novalidate method="POST" action="insertVentaT">
            @csrf
              <p>PAGO CON EFECTIVO</p>

              <input type="hidden" name="cantidadTotal" value={{$total_cantidad}}>
              <input type="hidden" name="precioTotal" value={{$total}}>

          <!-- BOTON DE PAGO -->
              <hr class="mb-4">
            <button class="btn btn-primary btn-lg btn-block" name="efectivoPagoT" type="submit" style="background-color:#ffff66; border-color:#000000; width=120px;"><font color="black">Realizar pago</font></button>
            </form>
            </div>

<!-- DIVISA -->

            <div id="divisa" style="display: none">
            <hr>
            <form class="needs-validation" novalidate method="POST" action="insertVentaT">
            @csrf
              <p>DATOS DE DIVISA</p>
              <div class="row">
                    <div class="col-md-3 mb-3">
                        <label for="banctransf">Tipo</label>
                        <input type="text" class="form-control" name="tipo" id="type" placeholder="" required>
                    <div class="invalid-feedback">
                        Tipo de moneda requerida
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                        <label for="numtransf">Denominación</label>
                        <input type="text" class="form-control" name="denom" id="num" placeholder="" required>
                    <div class="invalid-feedback">
                        Denominación del billete requerido
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                        <label for="numtransf">Número del billete</label>
                        <input type="text" class="form-control" name="numbill" id="numb" placeholder="" required>
                    <div class="invalid-feedback">
                        Número del billete requerido
                    </div>
                </div>
              </div>

              <input type="hidden" name="cantidadTotal" value={{$total_cantidad}}>
              <input type="hidden" name="precioTotal" value={{$total}}>

          <!-- BOTON DE PAGO -->
              <hr class="mb-4">
            <button class="btn btn-primary btn-lg btn-block" name="monedaPagoT" type="submit" style="background-color:#ffff66; border-color:#000000; width=120px;"><font color="black">Realizar pago</font></button>
            </form>
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
            document.getElementById("efectivo").style.display = 'none';
            document.getElementById("divisa").style.display = 'none';

            if(txt.match("credit")){
                document.getElementById("credit").style.display = 'block';
            }
            if(txt.match("debit")){
                document.getElementById("debit").style.display = 'block';
            }
            if(txt.match("cheque")){
                document.getElementById("cheque").style.display = 'block';
            }
            if(txt.match("efectivo")){
                document.getElementById("efectivo").style.display = 'block';
            }
            if(txt.match("divisa")){
                document.getElementById("divisa").style.display = 'block';
            }
    }

   </script>

<script type="text/javascript">
 
 $(".update-caj").click(function (e) {
    e.preventDefault();

    var ele = $(this);

     $.ajax({
        url: '{{ url('update-caj') }}',
        method: "patch",
        data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id"), quantity: ele.parents("tr").find(".quantity").val()},
        success: function (response) {
            window.location.reload();
        }
     });
 });

 $(".remove-from-caj").click(function (e) {
     e.preventDefault();

     var ele = $(this);

     if(confirm("Está seguro?")) {
         $.ajax({
             url: '{{ url('remove-from-caj') }}',
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