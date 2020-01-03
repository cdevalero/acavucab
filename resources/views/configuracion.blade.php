<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>ACAVUCAB Configurar</title>

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

    <div class="sidebar" style="z-index:10;">
        @if (Auth::user())
          @if (Auth::user()->permiso('afiliar_proveedor_configuracion'))
            <a href="#afiliar"  onclick="changePart('#afiliar');">Afiliar como proveedor</a>
          @endif
        @endif

        <a href="#presupuesto"  onclick="changePart('#presupuesto');">Solicitar presupuesto</a>
        <a href="#compra"  onclick="changePart('#compra');">Comprar productos</a>

        @if (Auth::user())
          @if (Auth::user()->permiso('despacho_productos_configuracion'))
            <a href="#despacho"  onclick="changePart('#despacho');">Despacho de producto</a>
          @endif
        @endif
        

        <a href="#facturar"  onclick="changePart('#facturar');">Facturación</a>
        <a href="#evento" onclick="changePart('#evento');">Organizar eventos</a>
        <a href="#cambioClave"  onclick="changePart('#cambioClave');">Cambiar clave</a>
        <a href="#agregarTarjeta"  onclick="changePart('#agregarTarjeta');">Agregar tarjeta</a>
        <a href="#editCatos"  onclick="changePart('#editDatos');">Editar datos</a>

        @if (Auth::user())
          @if (Auth::user()->permiso('afiliado'))
            <a href="#verCarnet"  onclick="changePart('#verCarnet');">Ver carnet</a> 
          @endif
        @endif

        @if (Auth::user())
          @if (Auth::user()->permiso('manejar_productos_configuracion'))
            <a href="#adminProd" onclick="changePart('#adminProd');">Manejar productos</a>
          @endif
        @endif

        @if (Auth::user())
          @if (Auth::user()->permiso('manejar_empleados_configuracion'))
            <a href="#adminEmp" onclick="changePart('#adminEmp');">Manejar empleados</a>
          @endif
        @endif

        @if (Auth::user())
          @if (Auth::user()->permiso('manejar_clientes_configuracion'))
            <a href="#adminCli" onclick="changePart('#adminCli');">Manejar clientes</a>
          @endif
        @endif

        @if (Auth::user())
          @if (Auth::user()->permiso('manejar_miembros_configuracion'))
            <a href="#adminMiem" onclick="changePart('#adminMiem');">Manejar miembros</a>
          @endif
        @endif

        @if (Auth::user())
          @if (Auth::user()->permiso('presupuestoCRUD'))
            <a href="{{ route('presupuesto.index') }}">Manejar presupuesto</a>
          @endif
        @endif
    </div>

<div class="content" style="margin-top:10px;">
        <h2 style="text-align:center;"><b> CONFIGURACIÓN </b></h2>
        <hr>

                        <!-- =============================== AFILIACIÓN =============================== -->
    <div id="afiliar" class="content" style="display:none;">
        <h2><b>AFILIARSE COMO PROVEEDOR</b></h2>
        <p>   Para afiliarse, debe indicar qué cerveza puede fabricar.</p>
        <div>
        <form action="afiliacionmanual" method="POST">
        @csrf
          <p style="margin-top:15px; margin-bottom:5px;"><b>Cerveza que fabrica</b></p>
          <input type="text" id="nombreCerveza" class="form-control" name="cerveza" placeholder="Nombre de la cerveza" maxlength="20" required>
          <p style="margin-top:15px; margin-bottom:5px;"><b>Breve descripción</b></p>
          <input type="text" id="descCerveza" class="form-control" name="descripcion" placeholder="Descripción" required>
          <p style="margin-top:15px; margin-bottom:5px;"><b>Precio</b></p>
          <input type="text" id="precioCerveza" class="form-control" name="precio" placeholder="0.00" pattern="^\d{1,15}(\.\d{0,2})?$" required>
        </div>
        <div class="container" style="text-align:center; margin-top:30px; margin-left:500px;">
            <button class="btn btn-lg btn-primary btn-block" type="submit" style="max-width:100px;">Afiliarse</button>
          </div>
        </form>
    </div>
                        <!-- =============================== PRESUPUESTO =============================== -->
    <div id="presupuesto" class="content" style="display:none;">
        <h2><b>PRESUPUESTO</b></h2>
        <p>   Solicite el presupuesto de una lista de productos.</p>
        <br>
        <div class="container">
          <h3 style="text-align:center; background-color:black; color:white; margin-bottom:0; padding:5px; border-radius:10px"> <b> Lista de productos </b> </h3>
          <ul class="list-group btn" id="listO">
            <li class="list-group-item" data-value="Cerveza1 - Precio">Cerveza1 - Precio</li>
            <li class="list-group-item" data-value="Cerveza2 - Preci">Cerveza2 - Precio</li>
            <li class="list-group-item" data-value="Evento1 - Precio">Evento1 - Precio</li>
            <li class="list-group-item" data-value="Evento2 - Precio">Evento2 - Precio</li>
            <li class="list-group-item" data-value="Evento3 - Precio">Evento3 - Precio</li>
          </ul>

          <br>
          <hr>
          <br>

          <h3 style="text-align:center; background-color:black; color:white; margin-bottom:0; padding:5px; border-radius:10px"> <b> Lista de productos seleccionados </b> </h3>
          <ul class="list-group btn" id="listS">
            <li class="list-group-item" data-value="Cerveza1 - Precio">Cerveza1 - Precio</li>
            <li class="list-group-item" data-value="Evento3 - Precio">Evento3 - Precio</li>
            <li class="list-group-item" data-value="Cerveza2 - Precio">Cerveza2 - Precio</li>
          </ul>
        </div>
        <div class="container" style="text-align:center; margin-top:30px;">
            <button class="btn btn-lg btn-primary" type="submit" style="max-width:250px;">Solicitar presupuesto</button>
        </div>
    </div>

                                  <!-- =============================== COMPRAR =============================== -->
    <div id="compra" class="content" style="display:none;">
        <h2><b>COMPRA A PROVEEDORES</b></h2>
        <div>
        <form action="" method="POST">
          <p> Seleccione la cerveza a comprar. </p>
          <select class="form-control" onchange="addSelect(value, 'listC');" required>     
            <option value="Seleccione la cerveza...">Seleccione la cerveza...</option>
			      <option value="Cerveza 1 - Precio">Cerveza 1 - Precio</option>
			      <option value="Cerveza 2 - Precio">Cerveza 2 - Precio</option>
          </select>

          <br>
          <hr>
          <br>

          <h3 style="text-align:center; background-color:black; color:white; margin-bottom:0; padding:5px; border-radius:10px"> <b> Lista de productos seleccionados </b> </h3>
          <ul class="list-group btn" id="listC">
          </ul>
          <div class="container" style="text-align:center; margin-top:30px;">
            <button class="btn btn-lg btn-primary" type="submit" style="max-width:250px;">Comprar</button>
          </div>
        </form>
        </div>
    </div>
                                  <!-- =============================== DESPACHO =============================== -->
    <div id="despacho" class="content" style="display:none;">
        <h2><b>DESPACHO DE PRODUCTO</b></h2>
          <div>
            <h3 style="text-align:center; background-color:black; color:white; margin-bottom:0; padding:5px; border-radius:10px"> <b> Lista de zonas </b> </h3>
            <ul class="list-group btn" id="listZ">
              <li class="list-group-item" data-value="Zona1">Zona1</li>
              <li class="list-group-item" data-value="Zona2">Zona2</li>
              <li class="list-group-item" data-value="Zona3">Zona3</li>
            </ul>
            <hr>
            <h3 style="text-align:center; background-color:black; color:white; margin-bottom:0; padding:5px; border-radius:10px"> <b> Lista de anaqueles </b> </h3>
            <ul class="list-group btn" id="listA">
              <li class="list-group-item" data-value="Anaquel1">Anaquel1</li>
              <li class="list-group-item" data-value="Anaquel2">Anaquel2</li>
              <li class="list-group-item" data-value="Anaquel3">Anaquel3</li>
            </ul>
            <hr>
            <h3 style="text-align:center; background-color:black; color:white; margin-bottom:0; padding:5px; border-radius:10px"> <b> Lista de cervezas </b> </h3>
            <ul class="list-group btn" id="listP">
              <li class="list-group-item" data-value="Cerveza1">Cerveza1</li>
              <li class="list-group-item" data-value="Cerveza2">Cerveza2</li>
              <li class="list-group-item" data-value="Cerveza3">Cerveza3</li>
            </ul>
            <br>
            <hr>
            <br>
            <form action="" method="POST" style="margin-top:20px;">
            <input id="zona" class="form-control" placeholder="Zona" type="text" required>
            <input id="anaquel" class="form-control" placeholder="Anaquel" type="text" required>
            <input id="cerv" class="form-control" placeholder="Cerveza" type="text" required>
            <div class="container" style="text-align:center; margin-top:30px;">
              <button class="btn btn-lg btn-primary" type="reset" style="max-width:250px; background-color:red; border-color:red;">Limpiar</button>
              <button class="btn btn-lg btn-primary" type="submit" style="max-width:250px; inline-block;">Reposicionar</button>
            </div>
          </form>

          </div>
          
    </div>

                                  <!-- =============================== EVENTO =============================== -->
    <div id="evento" class="content" style="display:none;">
        <h2><b>ORGANIZAR EVENTO</b></h2>
        <form action="" method="POST">
            <p style="margin-bottom:10px; text-align:left;"><b>Nombre del evento</b></p>
            <div class="form-group input-group">
    	        <div class="input-group-prepend">
		            <span class="input-group-text"> <i class="fa fa-book"></i> </span>
		          </div>
              <input name="" class="form-control" placeholder="Nombre del evento" type="text" maxlength="30" required>
            </div>

            <p style="margin-bottom:10px; text-align:left;"><b>Dirección del evento</b></p>
            <div class="form-group input-group">
    	        <div class="input-group-prepend">
		            <span class="input-group-text"> <i class="fa fa-map"></i> </span>
		          </div>   
            <select class="form-control" required>        <!-- dropdown//DIRECCION MUNICIPIO -->
              <option value="Municipio...">Municipio...</option>
			        <option value="**">**AQUÍ VA LUGAR</option>
			        <option value="**">**AQUÍ VA LUGAR</option>
            </select>
        </div>

            <div class="form-group input-group">
    	        <div class="input-group-prepend">
		            <span class="input-group-text"> <i class="fa fa-map"></i> </span>
		          </div>   
            <select class="form-control" required>        <!-- dropdown//PARROQUIA -->
              <option value="Parroquia...">Parroquia...</option>
			        <option value="**">**AQUÍ VA LUGAR</option>
			        <option value="**">**AQUÍ VA LUGAR</option>
            </select>
            </div>

            <p style="margin-bottom:10px; text-align:left;"><b>Miembros proveedores</b></p>
                <div class="form-group input-group ">
    	            <div class="input-group-prepend">
		                <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		              </div>
                <div id="miembros">
                  <span><input name="" class="form-control" placeholder="Nombre del proveedor" type="text" maxlength="30" required></span>
                </div>
                <button class="btn btn-lg btn-primary" type="button" style="max-width:250px; max-height:50px; margin-left:10px; margin-bottom:10px;" onclick="add_fields()"> + Más</button>
              </div>

            <p style="margin-bottom:10px; text-align:left;"><b>Fecha de realización</b></p>
            <div class="form-group input-group">
    	        <div class="input-group-prepend">
		            <span class="input-group-text"> <i class="fa fa-calendar"></i> </span>
		          </div>
              <input name="" class="form-control" placeholder="Fecha de inicio" type="datetime-local" required>
              <input name="" class="form-control" placeholder="Fecha fin" type="datetime-local" required>
            </div>

            <p style="margin-bottom:10px; text-align:left;"><b>Precio del ticket</b></p>
            <div class="form-group input-group">
    	        <div class="input-group-prepend">
		            <span class="input-group-text"> <i class="fa fa-pencil-square"></i> </span>
		          </div>
              <input name="" class="form-control" placeholder="0.00" type="text" pattern="^\d{1,15}(\.\d{0,2})?$" required>
            </div>

            <hr>
            <p style="margin-bottom:10px; text-align:left;"><b>Cervezas disponibles en el evento</b></p>
            <select class="form-control" onchange="addSelect(value, 'listORG');" required>     
              <option value="Seleccione la cerveza...">Seleccione la cerveza...</option>
			        <option value="Cerveza 1 - Precio">Cerveza 1 - Precio</option>
			        <option value="Cerveza 2 - Precio">Cerveza 2 - Precio</option>
            </select>
            <hr>
            <h3 style="text-align:center; background-color:black; color:white; margin-bottom:0; padding:1px; border-radius:10px"> <b> Lista de cervezas </b> </h3>
            <ul class="list-group btn" id="listORG">
              <li class="list-group-item" data-value="Cerveza1">Cerveza1</li>
              <li class="list-group-item" data-value="Cerveza2">Cerveza2</li>
              <li class="list-group-item" data-value="Cerveza3">Cerveza3</li>
            </ul>

              <button class="btn btn-lg btn-primary" type="submit" style="max-width:250px; margin-top:10px; margin-bottom:80px;">Organizar evento</button>
        </form>
    </div>

                                  <!-- =============================== FACTURAR =============================== -->
    <div id="facturar" class="content" style="display:none;">
        <h2><b>FACTURAR</b></h2>
          <p>Placeholder</p>
    </div>

                                  <!-- =============================== CAMBIO DE CLAVE =============================== -->
    <div id="cambioClave" class="content" style="display:none;">
        <h2><b>CAMBIO DE CLAVE</b></h2>
        <div class="container" style="margin-top:30px; text-align:center; inline-block;">

          <form action="cambioclave" method="POST"> 
            @csrf
            <br>
            <input id="claveActual" name="claveV" class="form-control" placeholder="Clave actual" type="password" maxlength="20" required>
            <br>
            <input name="claveN" class="form-control" placeholder="Clave nueva" type="password" minlength="4" maxlength="20" required>
            <br>
            <input name="claveN2" min class="form-control" placeholder="Confirme su clave" type="password" minlength="4" maxlength="20" required>
            <button class="btn btn-lg btn-primary" type="submit" style="max-width:250px; margin-top:10px;">Cambiar clave</button>
          </form>

        </div>
    </div>

                                  <!-- =============================== AGREGAR TARJETA =============================== -->
    <div id="agregarTarjeta" class="content" style="display:none;">
        <h2><b>AGREGAR TARJETA</b></h2>
          <div class="container" style="margin-top:30px; text-align:center; inline-block;">
            <form action="" method="POST">
            <p style="margin-bottom:10px; text-align:left;"><b>Número de tarjeta</b></p>
            <div class="form-group input-group">
    	        <div class="input-group-prepend">
		            <span class="input-group-text"> <i class="fa fa-credit-card"></i> </span>
		          </div>
              <input name="" class="form-control" placeholder="Número de tarjeta" type="text" maxlength="16" required>
            </div>

            <p style="margin-bottom:10px; text-align:left;"><b>Titular de tarjeta</b></p>
            <div class="form-group input-group ">
    	        <div class="input-group-prepend">
		            <span class="input-group-text"> <i class="fa fa-credit-card-alt"></i> </span>
		          </div>
              <input name="" class="form-control" placeholder="Nombre" type="text" maxlength="30" required>
              <input name="" class="form-control" placeholder="Apellido" type="text" maxlength="30" required>
            </div>

            <p style="margin-bottom:10px; text-align:left;"><b>Vencimiento</b></p>
            <div class="form-group input-group">
    	        <div class="input-group-prepend">
		            <span class="input-group-text"> <i class="fa fa-calendar"></i> </span>
		          </div>
              <input name="" class="form-control" placeholder="Fecha de vencimiento" type="datetime-local" required>
            </div>

              <button class="btn btn-lg btn-primary" type="submit" style="max-width:250px; margin-top:10px;">Agregar tarjeta</button>
            </form>
          </div>
    </div>
                                    <!-- =============================== EDITAR DATOS =============================== -->
    <div id="editDatos" class="content" style="display:none;">
        <h2><b>EDITAR DATOS DE USUARIO</b></h2>
        <form action="" method="POST">
    <p><b>Nombre y Apellido:</b></p>  
	<div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		 </div>
        <input name="" class="form-control" placeholder="Nombre" type="text " maxlength="30" required>
        <input name="" class="form-control" placeholder="Apellido" type="text" maxlength="30" required>
    </div> <!-- form-group//NOMBRE Y APELLIDO -->
    <p><b>RIF:</b></p>     
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-drivers-license"></i> </span>
		 </div>
        <input name="" class="form-control" placeholder="RIF" type="text" pattern="[0-9]{30}" required>
    </div> <!-- form-group//RIF -->
    <p><b>Correo electrónico:</b></p>  
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
		 </div>
        <input name="" class="form-control" placeholder="Correo electrónico" type="email" required>
    </div> <!-- form-group//CORREO -->
    <p><b>Teléfonos:</b></p>  
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
		</div>
		<select class="custom-select" style="max-width: 100px;">      <!-- dropdown//TELEFONO -->
		    <option selected="">+58</option>
		</select>
    	<input name="" class="form-control" placeholder="Número de teléfono 1" type="text" pattern="[0-9]{10}" required>
    </div> <!-- form-group//TELEFONO1 -->
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
		</div>
		<select class="custom-select" style="max-width: 100px;">      <!-- dropdown//TELEFONO -->
		    <option selected="">+58</option>
		</select>
    	<input name="" class="form-control" placeholder="Número de teléfono 2" type="text" pattern="[0-9]{10}">
    </div> <!-- form-group//TELEFONO2 -->
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
		</div>
		<select class="custom-select" style="max-width: 100px;">      <!-- dropdown//TELEFONO -->
		    <option selected="">+58</option>
		</select>
    	<input name="" class="form-control" placeholder="Número de teléfono 3" type="text" pattern="[0-9]{10}">
    </div> <!-- form-group//TELEFONO3 -->

    <p><b>Tipo:</b></p>  
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-building"></i> </span>
        </div>

        <select class="form-control" onchange="display(this);" required>        <!-- dropdown//TIPO DE CLIENTE -->
            <option value="Tipo de cliente...">Tipo de cliente...</option>
			<option value="Cliente Natural">Cliente Natural</option>
			<option value="Cliente Jurídico">Cliente Jurídico</option>
        </select>
    </div> <!-- form-group end.//TIPO DE CLIENTE -->
    
    <!-- CUANDO SELECCIONA CLIENTE NATURAL -->
        <div id="Cliente Natural" style="display: none">

        <p><b>Cédula:</b></p>   
        <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-address-card"></i> </span>
        </div>
            <input name="" class="form-control" placeholder="Cédula" type="text" pattern="[0-9]{30}" required>
        </div>

        <p><b>Dirección:</b></p>   
        <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-home"></i> </span>
		</div>   
        <select class="form-control" required>        <!-- dropdown//DIRECCION MUNICIPIO -->
            <option value="Municipio...">Municipio...</option>
			<option value="**">**AQUÍ VA LUGAR</option>
			<option value="**">**AQUÍ VA LUGAR</option>
        </select>
        </div>

        <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-home"></i> </span>
		</div>   
        <select class="form-control" required>        <!-- dropdown//PARROQUIA -->
            <option value="Parroquia...">Parroquia...</option>
			<option value="**">**AQUÍ VA LUGAR</option>
			<option value="**">**AQUÍ VA LUGAR</option>
        </select>
        </div>

        </div>

        <!-- CUANDO SELECCIONA CLIENTE JURIDICO -->
        <div id="Cliente Jurídico" style="display: none">   
        <p><b>Denominación comercial:</b></p> 
        <div class="form-group input-group">
    	    <div class="input-group-prepend">
		        <span class="input-group-text"> <i class="fa fa-briefcase"></i> </span>
		    </div>
    	<input name="" class="form-control" placeholder="Denominación comercial" type="text" maxlength="20" required>
        </div> <!-- form-group//DENOMINACION COMERCIAL -->

        <p><b>Razón social:</b></p> 
        <div class="form-group input-group">
    	    <div class="input-group-prepend">
		        <span class="input-group-text"> <i class="fa fa-suitcase"></i> </span>
		    </div>
    	<input name="" class="form-control" placeholder="Razón social" type="text" maxlength="20" required>
        </div> <!-- form-group//RAZON SOCIAL -->

        <p><b>Capital disponible:</b></p> 
        <div class="form-group input-group">
    	    <div class="input-group-prepend">
		        <span class="input-group-text"> <i class="fa fa-cubes"></i> </span>
		    </div>
    	<input name="" class="form-control" placeholder="Capital disponible" type="number" required>
        </div> <!-- form-group//CAPITAL DISPONIBLE -->

        <p><b>Página web:</b></p> 
        <div class="form-group input-group">
    	    <div class="input-group-prepend">
		        <span class="input-group-text"> <i class="fa fa-archive"></i> </span>
		    </div>
    	<input name="" class="form-control" placeholder="Página web" type="url">
        </div> <!-- form-group//PAGINA WEB -->

        <p><b>Personas de contacto:</b></p>
        <div class="form-group input-group">
    	        <div class="input-group-prepend">
		            <span class="input-group-text"> <i class="fa fa-address-book"></i> </span>
		        </div>
    	    <input name="" class="form-control" placeholder="Nombre (Persona de contacto 1)" type="text" maxlength="20" required>
            <input name="" class="form-control" placeholder="Apellido (Persona de contacto 1)" type="text" maxlength="20" required>
            </div> <!-- form-group//PERSONA DE CONTACTO 1 -->
            <div class="form-group input-group">
    	        <div class="input-group-prepend">
		            <span class="input-group-text"> <i class="fa fa-address-book"></i> </span>
		        </div>
    	    <input name="" class="form-control" placeholder="Nombre (Persona de contacto 2)" type="text" maxlength="20">
            <input name="" class="form-control" placeholder="Apellido (Persona de contacto 1)" type="text" maxlength="20">
            </div> <!-- form-group//PERSONA DE CONTACTO 2 -->
            <div class="form-group input-group">
    	        <div class="input-group-prepend">
		            <span class="input-group-text"> <i class="fa fa-address-book"></i> </span>
		        </div>
                <input name="" class="form-control" placeholder="Nombre (Persona de contacto 3)" type="text" maxlength="20">
                <input name="" class="form-control" placeholder="Apellido (Persona de contacto 3)" type="text" maxlength="20">
            </div> <!-- form-group//PERSONA DE CONTACTO 3 -->    

        <p><b>Dirección Principal:</b></p>
        <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-circle"></i> </span>
		</div>               
        <select class="form-control" required>        <!-- dropdown//DIRECCION MUNICIPIO -->
            <option value="Municipio...">Municipio...</option>
			<option value="**">**AQUÍ VA LUGAR</option>
			<option value="**">**AQUÍ VA LUGAR</option>
        </select>
        </div>

        <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-circle"></i> </span>
		</div>   
        <select class="form-control" required>        <!-- dropdown//PARROQUIA -->
            <option value="Parroquia...">Parroquia...</option>
			<option value="**">**AQUÍ VA LUGAR</option>
			<option value="**">**AQUÍ VA LUGAR</option>
        </select>
        </div>

        <p><b>Dirección Fiscal:</b></p>
        <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-circle"></i> </span>
		</div>               
        <select class="form-control" onchange="display(this);" required>        <!-- dropdown//DIRECCION MUNICIPIO -->
            <option value="Municipio...">Municipio...</option>
			<option value="**">**AQUÍ VA LUGAR</option>
			<option value="**">**AQUÍ VA LUGAR</option>
        </select>
        </div>

        <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-circle"></i> </span>
		</div>   
        <select class="form-control" onchange="display(this);" required>        <!-- dropdown//PARROQUIA -->
            <option value="Parroquia...">Parroquia...</option>
			<option value="**">**AQUÍ VA LUGAR</option>
			<option value="**">**AQUÍ VA LUGAR</option>
        </select>
        </div>
        </div>
    </div>

                                      <!-- =============================== VER CARNET =============================== -->
    <div id="verCarnet" class="content" style="display:none;">
        <h2><b>CARNET</b></h2>
        <br>
            @if (Auth::user()->cliente())
              <h6>Cod. Carnet: {{Auth::user()->codigo()}}</h6>
              <h4>{{Auth::user()->nombre()}}</h4>
              <h6>{{Auth::user()->numero()}}</h6>
              {!!QrCode::size(300)->generate(Auth::user()->numero()) !!}
            @endif 
    </div>
                                      <!-- =============================== MANEJAR PRODUCTOS =============================== -->
    <div id="adminProd" class="content" style="display:none;">
        <h2><b>MANEJAR PRODUCTOS</b></h2>
        <div class="boxed text-center">
          @if (Auth::user())
            @if (Auth::user()->permiso('cervezaCRUD'))
              <p><a href="{{ route('cerveza.index') }}" class="btn btn-lg btn-primary" type="submit" style="max-width:250px; margin-top:10px; background-color:black;">Administrar cervezas</a></p>
            @endif
          @endif
          @if (Auth::user())
            @if (Auth::user()->permiso('tipocervezaCRUD'))
              <p><a href="{{ route('tipocerveza.index') }}" class="btn btn-lg btn-primary" type="submit" style="max-width:250px; margin-top:10px; background-color:black;">Administrar tipos de cervezas</a></p>
            @endif
          @endif

          @if (Auth::user())
            @if (Auth::user()->permiso('caracteristicasCRUD'))
              <p><a href="{{ route('caracteristicas.index') }}" class="btn btn-lg btn-primary" type="submit" style="max-width:250px; margin-top:10px; background-color:black;">Administrar características de cervezas</a></p>
            @endif
          @endif
          
          @if (Auth::user())
            @if (Auth::user()->permiso('almacenCRUD'))
              <p><a href="{{ route('almacen.index') }}" class="btn btn-lg btn-primary" type="submit" style="max-width:250px; margin-top:10px; background-color:black;">Administrar almacén</a></p>
            @endif
          @endif

          @if (Auth::user())
            @if (Auth::user()->permiso('anaquelCRUD'))
              <p><a href="{{ route('anaquel.index') }}" class="btn btn-lg btn-primary" type="submit" style="max-width:250px; margin-top:10px; background-color:black;">Administrar anaqueles</a></p>
            @endif
          @endif

          @if (Auth::user())
            @if (Auth::user()->permiso('pasilloCRUD'))
              <p><a href="{{ route('pasillo.index') }}" class="btn btn-lg btn-primary" type="submit" style="max-width:250px; margin-top:10px; background-color:black;">Administrar pasillos</a></p>
            @endif
          @endif

          @if (Auth::user())
            @if (Auth::user()->permiso('ingredienteCRUD'))
              <p><a href="{{ route('ingrediente.index') }}" class="btn btn-lg btn-primary" type="submit" style="max-width:250px; margin-top:10px; background-color:black;">Administrar ingredientes</a></p>
            @endif
          @endif

          @if (Auth::user())
            @if (Auth::user()->permiso('pasopreparacionCRUD'))
            <p><a href="{{ route('pasopreparacion.index') }}" class="btn btn-lg btn-primary" type="submit" style="max-width:250px; margin-top:10px; background-color:black;">Administrar preparación</a></p>
            @endif
          @endif

        </div>
    </div>
                                      <!-- =============================== MANEJAR EMPLEADOS =============================== -->
    <div id="adminEmp" class="content" style="display:none;">
        <h2><b>MANEJAR EMPLEADOS</b></h2>
        <div class="boxed text-center">

        @if (Auth::user())
            @if (Auth::user()->permiso('empleadoCRUD'))
              <p><a href="{{ route('empleado.index') }}" class="btn btn-lg btn-primary" type="submit" style="max-width:250px; margin-top:10px; background-color:black;">Administrar empleados</a></p>
            @endif
        @endif
        @if (Auth::user())
            @if (Auth::user()->permiso('horarioCRUD'))
              <p><a href="{{ route('horario.index') }}" class="btn btn-lg btn-primary" type="submit" style="max-width:250px; margin-top:10px; background-color:black;">Administrar horarios</a></p>
            @endif
        @endif
        @if (Auth::user())
            @if (Auth::user()->permiso('empleado_horarioCRUD'))
              <p><a href="{{ route('empleado_horario.index') }}" class="btn btn-lg btn-primary" type="submit" style="max-width:250px; margin-top:10px; background-color:black;">Administrar horarios de empleados</a></p>
            @endif
        @endif
        @if (Auth::user())
            @if (Auth::user()->permiso('beneficioCRUD'))
              <p><a href="{{ route('beneficio.index') }}" class="btn btn-lg btn-primary" type="submit" style="max-width:250px; margin-top:10px; background-color:black;">Administrar beneficios</a></p>
            @endif
        @endif
        @if (Auth::user())
            @if (Auth::user()->permiso('faltaCRUD'))
              <p><a href="{{ route('falta.index') }}" class="btn btn-lg btn-primary" type="submit" style="max-width:250px; margin-top:10px; background-color:black;">Administrar faltas</a></p>
            @endif
        @endif

        </div>
    </div>
                                      <!-- =============================== MANEJAR CLIENTES =============================== -->
    <div id="adminCli" class="content" style="display:none;">
        <h2><b>MANEJAR CLIENTES</b></h2>
        <div class="boxed text-center">

          @if (Auth::user())
              @if (Auth::user()->permiso('clientenaturalCRUD'))
                <p><a href="{{ route('clientenatural.index') }}" class="btn btn-lg btn-primary" type="submit" style="max-width:250px; margin-top:10px; background-color:black;">Administrar clientes naturales</a></p>
              @endif
          @endif
          @if (Auth::user())
              @if (Auth::user()->permiso('clinetejuridicoCRUD'))
                <p><a href="{{ route('clientejuridico.index') }}" class="btn btn-lg btn-primary" type="submit" style="max-width:250px; margin-top:10px; background-color:black;">Administrar clientes jurídicos</a></p>
              @endif
          @endif
          @if (Auth::user())
              @if (Auth::user()->permiso('usuarioCRUD'))
                <p><a href="{{ route('usuario.index') }}" class="btn btn-lg btn-primary" type="submit" style="max-width:250px; margin-top:10px; background-color:black;">Administrar usuarios</a></p>
              @endif
          @endif
          @if (Auth::user())
              @if (Auth::user()->permiso('presupuestoCRUD'))
                <p><a href="{{ route('presupuesto.index') }}" class="btn btn-lg btn-primary" type="submit" style="max-width:250px; margin-top:10px; background-color:black;">Administrar presupuesto</a></p>
              @endif
          @endif
        </div>
    </div>

                                      <!-- =============================== MANEJAR MIEMBROS =============================== -->
    <div id="adminMiem" class="content" style="display:none;">
        <h2><b>MANEJAR MIEMBROS</b></h2>
        <div class="boxed text-center">

          @if (Auth::user())
              @if (Auth::user()->permiso('proveedorCRUD'))
              <p><a href="{{ route('proveedor.index') }}" class="btn btn-lg btn-primary" type="submit" style="max-width:250px; margin-top:10px; background-color:black;">Administrar miembros proveedores</a></p>
              @endif
          @endif
          @if (Auth::user())
              @if (Auth::user()->permiso('personacontactoCRUD'))
              <p><a href="{{ route('personacontacto.index') }}" class="btn btn-lg btn-primary" type="submit" style="max-width:250px; margin-top:10px; background-color:black;">Administrar personas de contacto</a></p>
              @endif
          @endif
          @if (Auth::user())
              @if (Auth::user()->permiso('afiliacionproveedorCRUD'))
              <p><a href="{{ route('afiliacionproveedor.index') }}" class="btn btn-lg btn-primary" type="submit" style="max-width:250px; margin-top:10px; background-color:black;">Administrar afiliaciones</a></p>
              @endif
          @endif
          @if (Auth::user())
              @if (Auth::user()->permiso('proveedor_tipocervezaCRUD'))
              <p><a href="{{ route('proveedor_tipocerveza.index') }}" class="btn btn-lg btn-primary" type="submit" style="max-width:250px; margin-top:10px; background-color:black;">Administrar cervezas producidas por proveedores</a></p>
              @endif
          @endif
        </div>
    </div>

    <div class="push"></div>
</div>

    <!-- Footer -->
  <footer class="py-5 bg-dark" style="z-index:1000;">
    <div class="container">
      <p class="m-0 text-center text-white">&copy; ACAVUCAB 2020</p>
    </div>
    <!-- /.container -->
  </footer>

    <script>
        function changePart(x) {
            document.getElementById("afiliar").style.display = 'none';
            document.getElementById("presupuesto").style.display = 'none';
            document.getElementById("compra").style.display = 'none';
            document.getElementById("evento").style.display = 'none';
            document.getElementById("despacho").style.display = 'none';
            document.getElementById("facturar").style.display = 'none';
            document.getElementById("cambioClave").style.display = 'none';
            document.getElementById("agregarTarjeta").style.display = 'none';
            document.getElementById("editDatos").style.display = 'none';
            document.getElementById("verCarnet").style.display = 'none';
            document.getElementById("adminProd").style.display = 'none';
            document.getElementById("adminEmp").style.display = 'none';
            document.getElementById("adminCli").style.display = 'none';
            document.getElementById("adminMiem").style.display = 'none';

            if(x.match("#afiliar")){
                document.getElementById("afiliar").style.display = 'block';
            }
            if(x.match("#presupuesto")){
                document.getElementById("presupuesto").style.display = 'block';
            }
            if(x.match("#compra")){
                document.getElementById("compra").style.display = 'block';
            }
            if(x.match("#evento")){
                document.getElementById("evento").style.display = 'block';
            }
            if(x.match("#despacho")){
                document.getElementById("despacho").style.display = 'block';
            }
            if(x.match("#facturar")){
                document.getElementById("facturar").style.display = 'block';
            }
            if(x.match("#cambioClave")){
                document.getElementById("cambioClave").style.display = 'block';
            }
            if(x.match("#agregarTarjeta")){
                document.getElementById("agregarTarjeta").style.display = 'block';
            }
            if(x.match("#editDatos")){
                document.getElementById("editDatos").style.display = 'block';
            }
            if(x.match("#verCarnet")){
                document.getElementById("verCarnet").style.display = 'block';
            }
            if(x.match("#adminProd")){
                document.getElementById("adminProd").style.display = 'block';
            }
            if(x.match("#adminEmp")){
                document.getElementById("adminEmp").style.display = 'block';
            }
            if(x.match("#adminCli")){
                document.getElementById("adminCli").style.display = 'block';
            }
            if(x.match("#adminMiem")){
                document.getElementById("adminMiem").style.display = 'block';
            }
        }

        function clave(id1, id2){
          document.getElementById(id1).style.display = 'block';
          document.getElementById(id2).disabled = true;
        }

        function addSelect(obj, id) {
          var ul = document.getElementById(id);
          var li = document.createElement("li");
          li.className = "list-group-item";
          li.appendChild(document.createTextNode(obj));
          ul.appendChild(li);
        }

        document.getElementById("listO").addEventListener("click",function(e) {
          var ul = document.getElementById("listS");
          var li = document.createElement("li");
          li.className = "list-group-item";
          li.appendChild(document.createTextNode(e.target.dataset.value));
          ul.appendChild(li);
        })

        document.getElementById("listS").addEventListener("click",function(e) {
          this.removeChild(e.target);
        })

        document.getElementById("listC").addEventListener("click",function(e) {
          this.removeChild(e.target);
        })

        document.getElementById("listZ").addEventListener("click",function(e) {
          document.getElementById("zona").value = e.target.dataset.value;
        })

        document.getElementById("listA").addEventListener("click",function(e) {
          document.getElementById("anaquel").value = e.target.dataset.value;
        })

        document.getElementById("listP").addEventListener("click",function(e) {
          document.getElementById("cerv").value = e.target.dataset.value;
        })

        document.getElementById("listORG").addEventListener("click",function(e) {
          this.removeChild(e.target);
        })

        function add_fields() {
          var d = document.getElementById("miembros");
  
          d.innerHTML += "<br /><span><input name='' type='text' class='form-control' placeholder='Nombre del proveedor' style='margin-top:1px;' required /></span>";
        }

        function display(obj) {
          txt = obj.options[obj.selectedIndex].value;
          document.getElementById("Cliente Natural").style.display = 'none';
          document.getElementById("Cliente Jurídico").style.display = 'none';
          if ( txt.match("Cliente Natural") ) {
            document.getElementById("Cliente Natural").style.display = 'block';
          }
          if ( txt.match("Cliente Jurídico") ) {
            document.getElementById("Cliente Jurídico").style.display = 'block';
          }
        }
        

    </script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>