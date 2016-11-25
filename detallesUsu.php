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
	<title>Carrito de Compras</title>
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
			<h1>Administracion de Inmuebles Registrados</h1>
		</div>
	<section>
		
	<?php
		include 'conexion.php';
		$re=mysql_query("select * from productos where id=".$_GET['id'])or die(mysql_error());
		while ($f=mysql_fetch_array($re)) {
		?>
			
<section class="main container">
		<div class="row">
			<section class="posts col-md-8">
				<div class="col-md-offset-5">
				<article class="post clearfix">
				<img class="img-responsive img-circle" src="./productos/<?php echo $f['imagen'];?>"><br>
				<h1>Nombre: <?php echo $f['nombre'];?></h1>
				<h2>Descripcion: <?php echo $f['descripcion'];?></h2>
				<h3>Precio: $<?php echo $f['precio'];?></h3><br>
				<div class="contenedor-botones">
						<a href="./carritodecomprasUsu.php?id=<?php  echo $f['id'];?>" class="btn btn-primary" data-toggle='popover' data-placement='left' data-trigger='hover' data-content='añadir al carrito'>Añadir al carrito de compras <span class="glyphicon glyphicon-plus"></span></a>
						<a href="./index3Usu.php" class="btn btn-danger" data-toggle='popover' data-placement='right' data-trigger='hover' data-content='Cancelar'>Cancelar <span class="glyphicon glyphicon-ban-circle"></span></a>
					</div>
					<br>
				</article>
				</div>
			</section>

	<?php
		}
	?>
			
	</section>
<script>
$(document).ready(function(){
    $('[data-toggle="popover"]').popover();
});
</script>	
</body>
</html>