
<?php 
session_start();
 ?>
<DOCTYPE html>
	<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Bienvenido</title>
	<link rel="stylesheet" type="text/css" href="Inmobiliaria/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="Inmobiliaria/css/estilos.css">
	<link rel="stylesheet" type="text/css" href="Inmobiliaria/css/style.css">
	<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>		
	</head>
	<body>
		<div class="container">
			<p>Bienvenido <?php echo $_SESSION['usuarios']; ?></p>
			<a href="logout.php">Cerrar Sesion</a>
		</div>
	</body>
</html>