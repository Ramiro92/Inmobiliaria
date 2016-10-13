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
	<title>Usuarios</title>
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


<header>
		<div class="container">
			<h1>Administracion de Usuarios Registrados</h1>
		</div>
</header>
<div class="container well well-small">
		<div class="main row">
		<div class="col-md-12">
<?php

				require("conexion.php");
				$sql=("SELECT * FROM inquilino");
				$query=mysql_query($sql);
					echo "<div class='row'>";				
				//	echo "<div class='col-md-1'><strong>Id</strong></div>";
					echo "<div class='col-md-1'><strong>Nombre</strong></div>";
					echo "<div class='col-md-1'><strong>Apellido</strong></div>";
					echo "<div class='col-md-1'><strong>Direccion</strong></div>";
				//	echo "<div class='col-md-1'><strong>Edad</strong></div>";
					echo "<div class='col-md-1'><strong>DUI</strong></div>";
				//	echo "<div class='col-md-1'><strong>NIT</strong></div>";
					echo "<div class='col-md-1'><strong>Sexo</strong></div>";
					echo "<div class='col-md-2'><strong>Nº Cuenta</strong></div>";
				//	echo "<div class='col-md-1'><strong>Fecha de Nacimiento</strong></div>";
					echo "<div class='col-md-1'><strong>Contraseña Usuario</strong></div>";
					echo "<div class='col-md-1'><strong>Contraseña Administrador</strong></div>";
					echo "<div class='col-md-1'><strong>Correo</strong></div>";
					echo "<div class='col-md-1'><strong>Editar</strong></div>";
					echo "<div class='col-md-1'><strong>Borrar</strong></div>";
					echo "</div>";
			    
			?>			  
			<?php 
				 while($arreglo=mysql_fetch_array($query)){
				  	echo "<div class='row'>";
				//ID    	echo "<div class='col-md-1'>$arreglo[0]</div>";
				    	echo "<div class='col-md-1'>$arreglo[1]</div>";
				    	echo "<div class='col-md-1'>$arreglo[2]</div>";
				    	echo "<div class='col-md-1'>$arreglo[3]</div>";
				//EDAD    	echo "<div class='col-md-1'>$arreglo[4]</div>";
				    	echo "<div class='col-md-1'>$arreglo[5]</div>";
				//NIT    	echo "<div class='col-md-1'>$arreglo[6]</div>";
				    	echo "<div class='col-md-1'>$arreglo[7]</div>";
				    	echo "<div class='col-md-2'>$arreglo[8]</div>";
				//FECHA DE NACIMIENTO    	echo "<div class='col-md-1'>$arreglo[9]</div>";
				    	echo "<div class='col-md-1'>$arreglo[10]</div>";
				    	echo "<div class='col-md-1'>$arreglo[11]</div>";
				    	echo "<div class='col-md-1'>$arreglo[12]</div>";
				    	echo "<div class='col-md-1'><a href='actualizar.php?id=$arreglo[0]'><button class='btn btn-post'>Editar</button></div>";
						echo "<div class='col-md-1'><a href='admin.php?id=$arreglo[0]&idborrar=2'><button class='btn btn-danger'/>Borrar</button></a></div>";
					echo "</div>";	
				}

				echo "</div>";
					extract($_GET);
					if(@$idborrar==2){		
						$sqlborrar="DELETE FROM inquilino WHERE idInquilino=$id";
						$resborrar=mysql_query($sqlborrar);
						echo '<script>alert("REGISTRO ELIMINADO")</script> ';
						//header('Location: proyectos.php');
						echo "<script>location.href='admin.php'</script>";
					}
			?>
				</div>
</div>
	<script src="Inmobiliaria/js/"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>				  
</div>	
		
		


		<!--EMPIEZA DESLIZABLE-->
		
		 <!--TERMINA DESLIZABLE-->



		
		


		


		

<!--///////////////////////////////////////////////////Termina cuerpo del documento interno////////////////////////////////////////////-->


	

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