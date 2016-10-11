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
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"/>

	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
			<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->

    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
  </head>
<body data-offset="40" background="images/fondotot.jpg" style="background-attachment: fixed">
<div class="container">
<header class="header">
<div class="row">
	<?php
	include("include/cabecera.php");
	?>
</div>
</header>

  <!-- Navbar
    ================================================== -->


<nav class="navbar navbar-inverse navbar-static-top" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navegacion-BP">
					<span class="sr-only">Desplegar / Ocultar Menu</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="admin.php" class="navbar-brand">ADMINISTRADOR DEL SITIO</a>
			</div>
			<!-- Inicia Menu-->
			<div class="collapse navbar-collapse" id="navegacion-BP">
				<ul class="nav navbar-nav">
					<li class="#"><a href="#">Inicio</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">Institucional</a>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">Personal <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li Class="#"><a href="#">Docente</a></li>
            				<li Class="#"><a href="#">Concejo Directivo</a></li>
            				<li class="divider"></li>
            				<li Class="#"><a href="#">Organigrama del CDE</a></li>
            				<li Class="#"><a href="#">Funciones</a></li>
  						</ul>
					</li>
					<li><a href="#">Servicios</a></li>
					<li class="dropdown">
						<a href="">Bienvenido <strong><?php echo $_SESSION['user'];?></strong> </a>
					</li>
					<li class="dropdown">
						<a href="desconectar.php"> Cerrar Cesión </a>
					</li>
				</ul>
				
				</form>
			</div>
		</div>
	</nav> 	

<!-- ======================================================================================================================== -->


		
		
<!--///////////////////////////////////////////////////Empieza cuerpo del documento interno////////////////////////////////////////////-->
		<h2> Administración de usuarios registrados</h2>	
		<div class="well well-small">

		<div class="row-fluid">
		<?php
		extract($_GET);
		require("conexion.php");

		$sql="SELECT * FROM Inmuebles WHERE id=$id";
		$ressql=mysql_query($sql);
		while ($row=mysql_fetch_row ($ressql)){
		    	$id=$row[0];
		    	$codigo=$row[1];
		    	$numero=$row[2];
		    	$direccion=$row[3];
		    	$postal=$row[4];
		    	$imagen=$row[5];
		    	$precio=$row[6];
		    	$descripcion=$row[7];
		    	$tipo=$row[8];
		    }
		?>
 <form action="ejecutaactualizarInmueble.php" method="post"  >
	  <fieldset>
		    <legend  style="font-size: 18pt"><b>Edicion de Inmuebles</b></legend>
			    <div class="form-group">
			      <label style="font-size: 14pt"><b>Id</b></label><br>
			      <input type="text" name="id" value= "<?php echo $id ?>" readonly="readonly">
			    </div>
			    <div class="form-group">
			      <label style="font-size: 14pt; "><b>Codigo</b></label> <br>
			      <input type="text" name="codigo" value="<?php echo $codigo?>"/>
			    </div>
			    <div class="form-group">
			      <label style="font-size: 14pt; "><b>Numero</b></label><br>
			      <input type="text" name="numero" value="<?php echo $numero?>"/>
			    </div>
			    <div class="form-group">
			      <label style="font-size: 14pt"><b>Direccion</b></label><br>
			      <input type="text" name="direccion" value="<?php echo $direccion?>" />
			    </div>
			    <div class="form-group">
			      <label style="font-size: 14pt; "><b>Postal</b></label><br>
			      <input type="text" name="postal" value="<?php echo $postal?>"/>
			    </div>
			    <div class="form-group">
			      <label style="font-size: 14pt"><b>Imagen</b></label><br>
			      <input type="file" name="imagen" value="<?php echo $imagen?>" />
			    </div>
			    <div class="form-group">
			      <label style="font-size: 14pt; "><b>Ingresa el precio</b></label><br>
			      <input type="text" name="precio"" value="<?php echo $precio?>" />
			    </div>
			    <div class="form-group">
			      <label style="font-size: 14pt; "><b>Ingresa la descripcion</b></label><br>
			      <input type="text" name="descripcion"  value="<?php echo $descripcion?>"  />
			    </div>
			    <div class="form-group">
			      <label style="font-size: 14pt"><b>Ingresa el tipo</b></label><br>
			      <input type="text" name="tipo"  value="<?php echo $tipo?>" />
			    </div>
				      <button  class="btn btn-success" type="submit" name="submit" value="Guardar">Guardar</button>
				      <button class="btn btn-danger" type="submit" name="cancelar"value="Cancelar" onclick = "location='admin.php'"/>Cancelar</button>
		</fieldset>
</form>

				  

		


		<!--EMPIEZA DESLIZABLE-->
		
		 <!--TERMINA DESLIZABLE-->



		
		
		</div>

		


		

<!--///////////////////////////////////////////////////Termina cuerpo del documento interno////////////////////////////////////////////-->
</div>

	</div>
</div>
<!-- Footer
      ================================================== -->
<hr class="soften"/>
<footer class="footer">

<hr class="soften"/>
<p>&copy; Copyright Ramiro Amaya<br/><br/></p>
 </footer>
</div><!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="bootstrap/js/jquery-1.8.3.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
	</style>
  </body>
</html>


