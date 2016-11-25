<!DOCTYPE html>
<?php
session_start();
if (@!$_SESSION['nombre']) {
	header("Location:index.php");
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8"/>
	<title>Quienes Somos</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<!--<link rel="stylesheet" type="text/css" href="./css1/estiloss.css">-->

	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
			<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->

	<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
	<script type="text/javascript"  href="./js1/scripts.js"></script>
</head>
<body><div class="container-fluid">
<header class="header">
<div class="row">
	<?php
	//include("include/cabecera.php");
	?>
</div>
	<header>
	<?php
	include("menuUsu.php");
	?>
	<div class="row">
	
	
		
	<div class="span12">

		<div class="caption">
	</header>
			<div class="row-fluid">
		<header>
		<div class="container">
			<h1>Quienes Somos</h1>
		</div>
		<div class="col-md-offset-2"><img src="imagenes/gp.jpg" alt=""></div>
		<br>
		<div class="col-md-6">
			Creamos experiencias memorables positivas, excediendo las expectativas tanto en el resultado de nuestros servicios como en las interacciones personales. La integridad, ética y la empatía guían cada una de nuestras acciones y definen nuestro servicio con clientes y colegas.
			<p></p>
		
		Estamos orgullosos de desarrollar y compartir nuestra especialización con el objetivo de lograr el éxito de nuestros clientes y de nuestra gente. La pasión por incrementar constantemente nuestro conocimiento nos permite tener un enfoque fresco e ingenioso en todo lo que hacemos.
		</div>

</body>
</html>