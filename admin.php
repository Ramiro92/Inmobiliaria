<!DOCTYPE html>
<?php
session_start();
if (@!$_SESSION['nombre']) {
	header("Location:index.php");
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
<div class="container well well-small">
		<div class="main row">
		<div class="col-md-12">
			
<!-- 			<?php

				require("conexion.php");
				$sql=("SELECT * FROM inmuebles");
				$query=mysql_query($sql);

				echo "<div class='row'>";				
						echo "<div class='col-md-1'>Id</div>";
						echo "<div class='col-md-1'>Codigo</div>";
						echo "<div class='col-md-1'>Numero</div>";
						echo "<div class='col-md-2'>Direccion</div>";
						echo "<div class='col-md-1'>Postal</div>";
						echo "<div class='col-md-1'>Imagen</div>";
						echo "<div class='col-md-1'>Precio</div>";
						echo "<div class='col-md-1'>Descripcion</div>";
						echo "<div class='col-md-1'>Tipo</div>";
						echo "<div class='col-md-1'>Editar</div>";
						echo "<div class='col-md-1'>Eliminar</div>";												
					echo "</div>";


			    
			?>
			  
			<?php 
				 while($arreglo=mysql_fetch_array($query)){
				  	echo "<div class='row'>";
				    	echo "<div class='col-md-1'>$arreglo[0]</div>";
				    	echo "<div class='col-md-1'>$arreglo[1]</div>";
				    	echo "<div class='col-md-1'>$arreglo[2]</div>";
				    	echo "<div class='col-md-2'>$arreglo[3]</div>";
				    	echo "<div class='col-md-1'>$arreglo[4]</div>";
				    	echo "<div class='col-md-1'>$arreglo[5]</div>";
				    	echo "<div class='col-md-1'>$arreglo[6]</div>";
				    	echo "<div class='col-md-1'>$arreglo[7]</div>";
				    	echo "<div class='col-md-1'>$arreglo[8]</div>";

				    	echo "<div class='col-md-1'><a href='actualizarInmueble.php?id=$arreglo[0]'><button class='btn btn-post'>Editar</button></div>";
						echo "<div class='col-md-1'><a href='listadoInmuebles.php?id=$arreglo[0]&idborrar=2'><button class='btn btn-danger'/>Borrar</button></a></div>";
						

						
					echo "</div>";
				}

				echo "</div>";

					extract($_GET);
					if(@$idborrar==2){
		
						$sqlborrar="DELETE FROM inmuebles WHERE idInmuebles=$id";
						$resborrar=mysql_query($sqlborrar);
						//echo '<script>alert("REGISTRO ELIMINADO")</script> ';
						//header('Location: proyectos.php');
						//echo "<script>location.href='listadoInmuebles.php'</script>";
					}

			?> -->

	</div>
</div>

	<script src="Inmobiliaria/js/"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>				  
</div>	
		<br/>
		


		<!--EMPIEZA DESLIZABLE-->
		
		 <!--TERMINA DESLIZABLE-->



		
		
		</div>

		


		

<!--///////////////////////////////////////////////////Termina cuerpo del documento interno////////////////////////////////////////////-->
</div>

	</div>

<!-- Footer
      ================================================== -->

<footer class="footer">

<p>&copy; Copyright Ramiro Amaya <br/><br/></p>
 </footer>
</div><!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="bootstrap/js/jquery-1.8.3.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
	</style>
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
  </body>
</html>