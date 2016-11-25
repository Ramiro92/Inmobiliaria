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
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
			<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->

    <link type="text/css" href="css/estilos.css" rel="stylesheet"/>

	<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
	<script type="text/javascript"  href="./js1/scripts.js"></script>
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
	</header>

	<!-- Aqui esta su menu-->
	<section>
<!-- 	<nav class="menu2">
	  <menu>
	    <li><a href="./">Inicio</a></li>
	    <li><a href="#" class="selected">Admin</a></li>
	    <li><a href="./admin/agregarproducto.php" >Agregar</a></li>
	    <li><a href="./admin/modificar.php" >Modificar</a></li>
	    <li><a href="./login/cerrar.php">Salir</a></li>
	   <li> <a href="comprastotales.php">Descargar</a ></li>
	  </menu>
	</nav> -->
<!--Fin-->
	<center><h1>Últimas Compras</h1></center>
	<table border="0px" width="100%">	
				
				<?php
				echo "<div class='container well well-small'>";
				echo "<div class='row'>";				
						echo "<div class='col-md-3'><strong>Imagen</strong></div>";
						echo "<div class='col-md-3'><strong>Nombre</strong></div>";
						echo "<div class='col-md-2'><strong>Precio</strong></div>";
						echo "<div class='col-md-2'><strong>Cantitad</strong></div>";
						echo "<div class='col-md-2'><strong>Subtotal</strong></div>";
					echo "</div>";
					
					echo "<br>";
					?>



 


		<?php
			$re=mysql_query("select * from compras");
			//$numeroventa=0;
			while ($f=mysql_fetch_array($re)) {
					//if($numeroventa	!=$f['numeroventa'])
				{
						//echo '<tr><td>Compra Número: '.$f['numeroventa'].' </td></tr>';
					}
					//$numeroventa=$f['numeroventa'];
					echo "<div class='container'";
					echo '<div class=row>
						<div class="col-md-3"><img src="./productos/'.$f['imagen'].'" width="100px" heigth="100px" /></div>
						<div class="col-md-3">'.$f['nombre'].'</div>
						<div class="col-md-2">'.$f['precio'].'</div>
						<div class="col-md-2">'.$f['cantidad'].'</div>
						<div class="col-md-2">'.$f['subtotal'].'</div>
						</div>
					</div>';
			}
		?>
	</table>
	</section>
</body>
</html>