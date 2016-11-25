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


    <script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
	<script type="text/javascript" src="modificar.js"></script>


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

	
	<!-- Latest compiled and minified CSS -->
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


</head>
<body>
<div class="container-fluid">


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

		<br><center>	<h1>Modificar o Eliminar</h1></center></br>
		</div>
	
	



  
  <table class="table">
 <thead>
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Precio</th>
            <th>Eliminar</th>
            <th>Modificar</th>
        </tr>
    </thead>

</table>
		
			
		<?php 
			$resultado=mysql_query("select * from productos");
			while($row=mysql_fetch_array($resultado)){
				echo '
          <table class="table">
				<tr>
				<td>
			
						<input type="hidden" value="'.$row[0].'">'.$row[0].'
						<input type="hidden" class="imagen" value="'.$row[3].'">
						</td>
					
				
					<td><input type="text" class="nombre" value="'.$row[1].'">
					<td><input type="text" class="descripcion" value="'.$row[2].'"></td>
					<td><input type="text" class="precio" value="'.$row[4].'">
					<td><button class="modificar btn btn-primary" data-id="'.$row[0].'" data-toggle="popover" data-placement="left" data-trigger="hover" data-content="Editar">Editar</button></td>
					<td><button class="eliminar btn btn-danger" data-id="'.$row[0].'" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Eliminar">Eliminar</button></td>
					
				
				</tr>

				</table> ';
			}
		?>

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

