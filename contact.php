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
			<h1>Contactenos</h1>
		</div>
		<div class="col-md-offset-2"><img src="imagenes/gp.jpg" alt=""></div>
		<br>
		<div class="col-md-3">
			<b>Telefonos:</b>
			<p></p> 
			+503 2382-4488
			+503 7532-0829
		</div>
		<div class="col-md-2">
			<b>Correo:</b>
			<p></p>
			info@inmobiliariarm.com
		</div>
		<div class="col-md-4">
			<b>Direccion:</b>
			<p></p>
			Barrio Santa Barbara, 10a Calle Oriente. Col Buenos Aires #2.
		</div>
		<div class="col-md-6">
			<div class="agent_contanct_form">
			<h4 id="show_contact">Contáctenos</h4>
			<div class="alert-box error">
			<div class="alert-message" id="alert-agent-contact"></div>
			</div> 
			<input name="contact_name" id="agent_contact_name" type="text" placeholder="Su nombre" aria-required="true" class="form-control">
			<input type="text" name="email" class="form-control" id="agent_user_email" aria-required="true" placeholder="Su email">
			<input type="text" name="phone" class="form-control" id="agent_phone" placeholder="Su Teléfono">
			<textarea id="agent_comment" name="comment" class="form-control" cols="45" rows="8" aria-required="true" placeholder="Su mensaje"></textarea>	
			<input type="submit" class="btn  btn-info" id="agent_submit" value="Enviar mensaje">
			<input name="prop_id" type="hidden" id="agent_property_id" value="0">
			<input name="prop_id" type="hidden" id="agent_id" value="0">
			<input type="hidden" name="contact_ajax_nonce" id="agent_property_ajax_nonce" value="7020c8c3d0">
			</div>
			<br>
		</div>
</body>
</html>