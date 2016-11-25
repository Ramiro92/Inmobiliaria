<!DOCTYPE html>
<html lang="es">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Registro</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head> 
<body>
  <header>
    <div class="container">
    <form action="" method="post"  >
  <fieldset>
    <legend  style="font-size: 18pt"><b>Registro</b></legend>
    <div class="row">
    <div class="col-md-6">
      <label style="font-size: 14pt"><b>Ingresa tu nombre</b></label>
      <input type="text" name="nombre" class="form-control" required placeholder="Ingresa tu nombre" />
    </div>
    <div class="col-md-6">
      <label style="font-size: 14pt; "><b>Ingresa tu Apellido</b></label>
      <input type="text" name="apellido" class="form-control"  required placeholder="Ingresa tu Apellido"/>
    </div>
        <div class="col-md-4">
      <label style="font-size: 14pt"><b>Ingresa tu edad</b></label>
      <input type="number" name="edad" min="18" max="99" class="form-control" required placeholder="Ingresa tu Edad" />
    </div>
    <div class="col-md-4">
      <label style="font-size: 14pt" ><b>Sexo</b></label>
      <select name="sexo" class="form-control" required placeholder="sexo">
        <option value="Masculino">Masculino</option>
        <option value="Femenino">Femenino</option>
      </select>
    </div>
    <div class="col-md-4">
      <label style="font-size: 14pt"><b>Fecha de nacimiento</b></label>
      <input type="date" name="fecha_nacimiento"  min="1980-01-01" max="2016-12-31" class="form-control" required placeholder="Fecha de nacimiento" />
    </div>
    <div class="col-md-7">
      <label style="font-size: 14pt; "><b>Ingresa tu Direccion</b></label>
      <input type="text" name="direccion" class="form-control" required placeholder="Ingresa tu Direccion" />
    </div>
    <div class="col-md-5">
      <label style="font-size: 14pt"><b>Ingresa tu Correo</b></label>
      <input type="email" name="email" class="form-control" required placeholder="Ingresa tu correo" />
    </div>
    <div class="col-md-6">
      <label style="font-size: 14pt"><b>Ingresa tu DUI</b></label>
      <input type="text" name="DUI" class="form-control" maxlength="10" required placeholder="Ingresa tu DUI" />
    </div>
    <div class="col-md-6">
      <label style="font-size: 14pt"><b>Ingresa tu NIT</b></label>
      <input type="text" name="NIT" class="form-control" maxlength="17" required placeholder="Ingresa tu NIT" />
    </div>
    <div class="col-md-12">
      <label style="font-size: 14pt"><b>Ingresa tu numero de cuenta</b></label>
      <input type="text" name="numero_cuenta" class="form-control"  maxlength="11" required placeholder="Ingresa tu numero de cuenta" />
    </div>
    <div class="col-md-6">
      <label style="font-size: 14pt"><b>Ingresa Tu Contraseña</b></label>
      <input type="password" name="pass" class="form-control" required placeholder="Ingresa tu Contraseña" />
    </div>
    <div class="col-md-6">
      <label style="font-size: 14pt"><b>Repite tu contraseña</b></label>
      <input type="password" name="rpass" class="form-control" required placeholder="Repite tu contraseña" />
    </div>
    <div class="col-md-9">
      <br>
      <button  class="btn btn-success" type="submit" name="submit" value="Registrarse" data-toggle="popover" data-placement="left" data-trigger="hover" data-content="Registrarse">Registrarse <span class="glyphicon glyphicon-ok-circle"></span></button>
      <button  class="btn btn-danger" type="submit" name="cancelar" value="Cancelar" onclick = "location='index.php'" data-toggle="popover" data-trigger="hover" data-content="Cancelar">Cancelar <span class="glyphicon glyphicon-ban-circle"></span></button>
      <!-- <input type="button" class="bton bton-danger" onclick="location='index.php'"> -->
    </div>
    </div>
    </div>
    </div>
  </fieldset>
</form>
</div>
<?php
    if(isset($_POST['submit'])){
      require("registro.php");
    }
  ?> 


<!--Fin formulario registro -->

    </td>
    </tr>
    </table>
    </div></center></div></center>
</header>
<script>
$(document).ready(function(){
    $('[data-toggle="popover"]').popover();
});
</script>
</body>
</html>    