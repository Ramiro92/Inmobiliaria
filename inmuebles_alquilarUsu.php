<!DOCTYPE html>
<?php
	session_start();
	include "conexion.php";
	if(isset($_SESSION['nombre'])){
	}else{
		header("Location: ./index.php?Error=Acceso denegado");
	}
?>

<html lang="es">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Administrador</title>
	
	<!-- Latest compiled and minified CSS -->
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


</head>
<body>
<div class="container-fluid">


  <!-- Navbar
	================================================== -->
	<?php
	include("menuUsu.php");
	?>

<!-- ======================================================================================================================== -->
<div class="row">
	
	
		
	<div class="span12">

		<div class="caption">
		
<!--///////////////////////////////////////////////////Empieza cuerpo del documento interno////////////////////////////////////////////-->

		<div class="row-fluid">
		<header>
		<div class="container">
			<h1></h1>
		</div>
		</header>
	<!-- <section>
		<nav class="menu2">
			<menu>
				<li><a href="../">Inicio</a></li>
				<li><a href="../admin.php">Ultimas Compras</a></li>
				<li><a href="./agregarproducto.php" >Agregar</a></li>
				<li><a href="./modificar.php" class="selected">Modificar</a></li>
				<li><a href="./login/cerrar.php">Salir</a></li>
				
		</nav> -->



			
		<?php
			
				require("conexion.php");
				$sql=("SELECT * FROM inmuebles");
				$query=mysql_query($sql);
	echo '
				<div class="row">
			<div class="col-md-11">
				<div class="col-md-2">Id</div>
				<div class="col-md-2">Tipo</div>
				<div class="col-md-2">Numero</div>
				<div class="col-md-2">Descripcion</div>
				<div class="col-md-2">Precio</div>
				<div class="col-md-1">Alquilar</div>
				<div class="col-md-1">Desalquilar</div>
			</div>
			</div>
			';	
			?>




    <?php 
			$resultado=mysql_query("SELECT * FROM inmuebles");
			while($row=mysql_fetch_array($resultado)){
				echo '
				<div class="row">
				<div class="col-md-11">
					<div class="col-md-2"><input type="text" class="id" value="'.$row[0].'"></div>
					<div class="col-md-2"><input type="text" class="tipo" value="'.$row[8].'"></div>
					<div class="col-md-2"><input type="text" class="numero" value="'.$row[2].'"></div>
					<div class="col-md-2"><input type="text" class="descripcion" value="'.$row[7].'"></div>
				    <div class="col-md-2"><input type="text" class="precio" value="'.$row[6].'"></div>
                  <div class="col-md-1"><button class="btn btn-primary btnAlquilar" id="'.$row['idInmuebles'].'" data-toggle="popover" data-placement="left" data-trigger="hover" data-content="Alquilar">Alquilar</button></div>
               <div class="col-md-1"><button class="btn btn-primary btnDesalquilar" id="'.$row['idInmuebles'].'" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Desalquilar">Desalquilar</button></div>
               </div>
				</div>
				';
			}
		?>
			
			</div> <!-- Fin de row fluid -->
		</div> <!-- Fin de caption -->
	</div> <!-- Fin de span 12 -->
</div><!-- Fin de row -->
</div><!-- Container fluid -->


<div class="modal fade in" id="modalActualizado" style="display: none;">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<a data-dismiss="modal" class="close">×</a>
				<h3>Se actualizó su pedido</h3>
			 </div>
			 <div class="modal-body">
				 <p>Gracias por alquilar el producto #<span id="numID"></span></p>              
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
				</div>
	</div>
</div>

<div class="modal fade in" id="modalActualizado1" style="display: none;">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<a data-dismiss="modal" class="close">×</a>
				<h3>Se actualizó su pedido</h3>
			 </div>
			 <div class="modal-body">
				 <p>Se desalquilo el producto #<span id="numID"></span></p>              
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
			</div>
				</div>
	</div>
</div>






<script
  src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<!-- Latest compiled and minified JavaScript -->

<script src="js1/funciones.js"></script>
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	 <script>
$(document).ready(function(){
    $('[data-toggle="popover"]').popover();
});
</script>
</body>
</html>



