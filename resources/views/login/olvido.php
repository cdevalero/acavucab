<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>ACAVUCAB Olvido Clave</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/signin.css" rel="stylesheet">
</head>

<body class="text-center">
<form action="" method="POST">
      <div class="boxed" style="padding:60px;">
          <img class="mb-4" src="https://getbootstrap.com/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
          <h1 class="h3 mb-3 font-weight-bolder", style="color: #f5f5f5">ACAVUCAB</h1>
         <h1 class="h3 mb-3 font-weight-normal", style="color: #f5f5f5">¿Olvidó su clave?</h1>
         <p class="font-weight-normal", style="color: #f5f5f5; margin-bottom:10px; margin-top:25px;">Ingrese su correo electrónico</p>
          <input type="email" id="inputEmail" class="form-control" placeholder="Correo electrónico" required autofocus>
         <p class="font-weight-normal", style="color: #f5f5f5; margin-bottom:10px; margin-top:25px;">Ingrese su cédula o RIF</p>

        <div class="form-group input-group">
          <select style="inline-block; text-align:center">
            <option value="J">J</option>
			<option value="V">V</option>
          </select>
          <input type="text" id="inputCIRIF" class="form-control" placeholder="Cédula/RIF" pattern="[0-9]{30}$" style="inline-block;" required>
        </div>

        <div>
        <button class="btn btn-lg btn-primary btn-block" type="submit" style="margin-top:25px; margin-bottom:15px"><a href="recupera" style="color:#f5f5f5">Enviar</a></button>
      </div>
      </div>
</form>
    
</body>
</html>