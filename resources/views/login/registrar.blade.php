<!doctype html>
<html lang="en">
<head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
    <link href="css/registrar.css" rel="stylesheet">
    <title>ACAVUCAB Register</title>
</head>

<body>
<div class="container">

<div class="card">
<article class="card-body mx-auto" style="max-width: 400px;">
	<h4 class="card-title mt-3 text-center" style="color: #f5f5f5"><b>Crear Cuenta</b></h4>
    
	<form action="" method="POST">
    <p><b><font color="white">Nombre y Apellido:</font></b></p>  
	<div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		 </div>
        <input name="" class="form-control" placeholder="Nombre" type="text " maxlength="30" required>
        <input name="" class="form-control" placeholder="Apellido" type="text" maxlength="30" required>
    </div> <!-- form-group//NOMBRE Y APELLIDO -->
    <p><b><font color="white">RIF:</font></b></p>     
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-drivers-license"></i> </span>
		 </div>
        <input name="" class="form-control" placeholder="RIF" type="text" pattern="[0-9]{30}$" required>
    </div> <!-- form-group//RIF -->
    <p><b><font color="white">Correo electrónico:</font></b></p>  
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
		 </div>
        <input name="" class="form-control" placeholder="Correo electrónico" type="email" required>
    </div> <!-- form-group//CORREO -->
    <p><b><font color="white">Teléfonos:</font></b></p>  
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
		</div>
		<select class="custom-select" style="max-width: 100px;">      <!-- dropdown//TELEFONO -->
		    <option selected="">+58</option>
		</select>
    	<input name="" class="form-control" placeholder="Número de teléfono 1" type="text" pattern="[0-9]{10}$" required>
    </div> <!-- form-group//TELEFONO1 -->
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
		</div>
		<select class="custom-select" style="max-width: 100px;">      <!-- dropdown//TELEFONO -->
		    <option selected="">+58</option>
		</select>
    	<input name="" class="form-control" placeholder="Número de teléfono 2" type="text" pattern="[0-9]{10}$">
    </div> <!-- form-group//TELEFONO2 -->
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
		</div>
		<select class="custom-select" style="max-width: 100px;">      <!-- dropdown//TELEFONO -->
		    <option selected="">+58</option>
		</select>
    	<input name="" class="form-control" placeholder="Número de teléfono 3" type="text" pattern="[0-9]{10}$">
    </div> <!-- form-group//TELEFONO3 -->

    <p><b><font color="white">Tipo:</font></b></p>  
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

        <p><b><font color="white">Cédula:</font></b></p>   
        <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-address-card"></i> </span>
        </div>
            <input name="" class="form-control" placeholder="Cédula" type="text" pattern="[0-9]{30}$" required>
        </div>

        <p><b><font color="white">Dirección:</font></b></p>   
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
        <p><b><font color="white">Denominación comercial:</font></b></p> 
        <div class="form-group input-group">
    	    <div class="input-group-prepend">
		        <span class="input-group-text"> <i class="fa fa-briefcase"></i> </span>
		    </div>
    	<input name="" class="form-control" placeholder="Denominación comercial" type="text" maxlength="20" required>
        </div> <!-- form-group//DENOMINACION COMERCIAL -->

        <p><b><font color="white">Razón social:</font></b></p> 
        <div class="form-group input-group">
    	    <div class="input-group-prepend">
		        <span class="input-group-text"> <i class="fa fa-suitcase"></i> </span>
		    </div>
    	<input name="" class="form-control" placeholder="Razón social" type="text" maxlength="20" required>
        </div> <!-- form-group//RAZON SOCIAL -->

        <p><b><font color="white">Capital disponible:</font></b></p> 
        <div class="form-group input-group">
    	    <div class="input-group-prepend">
		        <span class="input-group-text"> <i class="fa fa-cubes"></i> </span>
		    </div>
    	<input name="" class="form-control" placeholder="Capital disponible" type="number" required>
        </div> <!-- form-group//CAPITAL DISPONIBLE -->

        <p><b><font color="white">Página web:</font></b></p> 
        <div class="form-group input-group">
    	    <div class="input-group-prepend">
		        <span class="input-group-text"> <i class="fa fa-archive"></i> </span>
		    </div>
    	<input name="" class="form-control" placeholder="Página web" type="url">
        </div> <!-- form-group//PAGINA WEB -->

        <p><b><font color="white">Personas de contacto:</font></b></p>
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

        <p><b><font color="white">Dirección Principal:</font></b></p>
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

        <p><b><font color="white">Dirección Fiscal:</font></b></p>
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

    <!-- form-group//CLIENTES -->
    <p><b><font color="white">Clave:</font></b></p>  
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
		</div>
        <input class="form-control" placeholder="Escriba su clave" type="password" maxlength="20" required>
    </div> <!-- form-group/CLAVE/ -->
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
		</div>
        <input class="form-control" placeholder="Confirmar clave" type="password" maxlength="20" required>
    </div> <!-- form-group//CONFIRMACION CLAVE -->                                      
    <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block"> Registrarse  </button>
    </div> <!-- form-group//REGISTRARSE -->      
    <p class="text-center" style="color: #f5f5f5">¿Ya se encuentra registrado? <a href="/">Iniciar sesión</a> </p>                                                                 
</form>
</article>
</div> <!-- card.// -->
</div> 
<!--container end.//-->
<script type="text/javascript">
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
</body>
</html>
