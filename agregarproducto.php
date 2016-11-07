<!DOCTYPE html>
<?php
session_start();
	include "conexion.php";
	if(isset($_SESSION['Usuario'])){

	}else{
		//header("Location: ./index.php?Error=Acceso denegado");
	}
?>
<html lang="es">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Administrador</title>
	<link rel="stylesheet" type="text/css" href="..css/bootstrap.min.css">
			<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->

    <link type="text/css" href="..css/estilos.css" rel="stylesheet"/>


  </head>
<body >
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
<div class="row">
	
	
		
	<div class="span12">

		<div class="caption">
		
<!--///////////////////////////////////////////////////Empieza cuerpo del documento interno////////////////////////////////////////////-->

		<div class="row-fluid">
		<header>
		<div class="container">
			<h1>Administracion de Inmuebles Registrados</h1>
		</div>
	</header>
	<div class="container">
        <form action="" method="POST" enctype="multipart/form-data">
            <fieldset>
    <legend  style="font-size: 18pt"><b>Agregar Producto</b></legend>
    <div class="col-md-2">
      <label style="font-size: 14pt"><b>Nombre</b></label>
      <input type="text" name="nombre" class="form-control" placeholder="Ingresa el Nombre" />
    </div>
    <div class="col-md-2">
      <label style="font-size: 14pt; "><b>Descripcion</b></label>
      <input type="text" name="descripcion" class="form-control"  required placeholder="Ingresa la descripcion"/>
    </div>
    <div class="col-md-4">
      <label style="font-size: 14pt"><b>Imagen</b></label>
      <input type="file" name="file" class="form-control" placeholder="Subir Imagen" />
    </div>
    <div class="col-md-4">
        <label style="font-size: 14pt; "><b>Ingresa el precio</b></label>
        <div class="input-group">
      <div class="input-group-addon">$</div>
        <input type="text" name="precio" class="form-control"  required placeholder="Ingresa el precio"/>
        <span class="input-group-addon">.00</span>
    </div>
    </div>
    <div class="col-md-3">
      <br>
      <button  class="btn btn-success" type="submit" name="submit" value="Guardar" >Guardar <span class="glyphicon glyphicon-ok-circle"></button>
      <button  class="btn btn-danger" type="submit" name="cancelar" value="Cancelar" onclick = "location='admin.php'"/>Cancelar <span class="glyphicon glyphicon-ban-circle"></span></button>
    </div>
    </div>
    </div>
    </div>
  </fieldset>
        </form>	
         <?php
    if(isset($_POST['submit'])){
      require("altaproducto.php");
    }
  ?>
	
		<script src="../js/jquery.js"></script>
	<script src="../js/bootstrap.min.js"></script>
</body>
</html>