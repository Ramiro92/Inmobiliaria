<!DOCTYPE html>
<?php
session_start();
if (@!$_SESSION['nombre']) {
	header("Location:index.php");
}
?>		
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Actualizar Usuarios</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
			<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->

    <link type="text/css" href="css/estilos.css" rel="stylesheet"/>
  </head>
<body>
<div class="container-fluid">
<header class="header">
<div class="row">
	<?php
	//include("include/cabecera.php");
	?>
</div>
</header>

  <!-- Navbar
    ================================================== -->
<?php
include("menu.php");
?>
<!-- ======================================================================================================================== -->


		
		
<!--///////////////////////////////////////////////////Empieza cuerpo del documento interno////////////////////////////////////////////-->
		
		<div class="container">
			<h1>Administracion de Inmuebles Registrados</h1>
		</div>

		<div class="row-fluid">
		<?php
		extract($_GET);
		require("conexion.php");

		$sql="SELECT * FROM inquilino WHERE idInquilino=$id";
		$ressql=mysql_query($sql);
		while ($row=mysql_fetch_row ($ressql)){
		    	$idInquilino=$row[0];
		    	$nombre=$row[1];
		    	$apellido=$row[2];
		    	$direccion=$row[3];
		    	$edad=$row[4];
		    	$DUI=$row[5];
		    	$NIT=$row[6];
		    	$sexo=$row[7];
		    	$numero_cuenta=$row[8];
		    	$fecha_nacimiento=$row[9];
		    	$pass=$row[10];
		    	$passadmin=$row[11];
		    	$email=$row[12];
		    }
		?>

 <div class="container">
    <form action="ejecutaactualizar.php" method="post"  >
  <fieldset>
    <legend  style="font-size: 18pt"><b>Edicion Usuarios</b></legend>
    <div class="row">
    <div class="col-md-6">
      <label style="font-size: 14pt"><b>Nombre</b></label>
      <input type="text" name="nombre" class="form-control" placeholder="Ingresa tu nombre" value="<?php echo $nombre?>" />
    </div>
    <div class="col-md-6">
      <label style="font-size: 14pt; "><b>Apellido</b></label>
      <input type="text" name="apellido" class="form-control"  required placeholder="Ingresa tu Apellido" value="<?php echo $apellido?>"/>
    </div>
        <div class="col-md-4">
      <label style="font-size: 14pt"><b>Edad</b></label>
      <input type="number" name="edad" min="18" max="99" class="form-control" required placeholder="Ingresa tu Edad" value="<?php echo $edad?>" />
    </div>
    <div class="col-md-4">
      <label style="font-size: 14pt"><b>Sexo</b></label>
      <select name="sexo" class="form-control" value="<?php echo $sexo?>">
        <option value="Masculino">Masculino</option>
        <option value="Femenino">Femenino</option>
      </select>
    </div>
    <div class="col-md-4">
      <label style="font-size: 14pt"><b>Fecha de nacimiento</b></label>
      <input type="date" name="fecha_nacimiento"  min="1980-01-01" max="2016-12-31" class="form-control" required placeholder="Fecha de nacimiento" value="<?php echo $fecha_nacimiento?>" />
    </div>
    <div class="col-md-7">
      <label style="font-size: 14pt; "><b>Direccion</b></label>
      <input type="text" name="direccion" class="form-control"  placeholder="Ingresa tu Direccion" value="<?php echo $direccion?>" />
    </div>
    <div class="col-md-5">
      <label style="font-size: 14pt"><b>Correo</b></label>
      <input type="email" name="email" class="form-control" required placeholder="Ingresa tu correo" value="<?php echo $email?>" />
    </div>
    <div class="col-md-6">
      <label style="font-size: 14pt"><b>DUI</b></label>
      <input type="text" name="DUI" class="form-control" maxlength="10" required placeholder="Ingresa tu DUI" value="<?php echo $DUI?>" />
    </div>
    <div class="col-md-6">
      <label style="font-size: 14pt"><b>NIT</b></label>
      <input type="text" name="NIT" class="form-control" maxlength="17" required placeholder="Ingresa tu NIT" value="<?php echo $NIT?>"/>
    </div>
    <div class="col-md-12">
      <label style="font-size: 14pt"><b>Numero de cuenta</b></label>
      <input type="text" name="numero_cuenta" class="form-control"  maxlength="11" required placeholder="Ingresa tu numero de cuenta" value="<?php echo $numero_cuenta?>" />
    </div>
    <div class="col-md-6">
      <label style="font-size: 14pt"><b>Contraseña</b></label>
      <input type="text" name="pass" class="form-control" required placeholder="Ingresa tu Contraseña" value="<?php echo $pass?>"/>
    </div>
    <div class="col-md-6">
      <label style="font-size: 14pt"><b>Contraseña Administrador</b></label>
      <input type="text" name="passadmin" class="form-control" required placeholder="Repite tu contraseña" value="<?php echo $passadmin?>"/>
    </div>
    <div class="col-md-9">
      <br>
      <button  class="btn btn-success" type="submit" name="submit" value="Actualizar">Actualizar <span class="glyphicon glyphicon-ok-circle"></span></button>
      <button  class="btn btn-danger" type="submit" name="cancelar" value="Cancelar" onclick = "location='listadoInmuebles.php'"/>Cancelar <span class="glyphicon glyphicon-ban-circle"></span></button>
      <!-- <input type="button" class="bton bton-danger" onclick="location='index.php'"> -->
    </div>
    </div>
    </div>
    </div>
  </fieldset>
</form>
</div>

				  

		


		<!--EMPIEZA DESLIZABLE-->
		
		 <!--TERMINA DESLIZABLE-->
		</div>



		

<!--///////////////////////////////////////////////////Termina cuerpo del documento interno////////////////////////////////////////////-->


<!-- Footer
      ================================================== -->

</div><!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="bootstrap/js/jquery-1.8.3.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
	</style>
  </body>
</html>


