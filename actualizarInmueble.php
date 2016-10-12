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

    <link type="text/css"href="css/inmueble.css" rel="stylesheet"/>


  </head>
<body data-offset="40" background="images/fondotot.jpg" style="background-attachment: fixed">
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

<div class="row">
    <div class="span12">

    <div class="caption">
    <div class="row-fluid">
    <header>
    <div class="container">
      <h1>Administracion de Inmuebles Registrados</h1>
    </div>
  </header>  
    <div class="container">
    </head>
    <?php
		extract($_GET);
		require("conexion.php");

		$sql="SELECT * FROM inmuebles WHERE idInmuebles=$id";
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
		    	$estado=$row[9];
		    }
		?>
        <form action="ejecutaactualizarInmueble.php" method="POST" enctype="multipart/form-data">
            <center>
            	<fieldset>
    				<legend  style="font-size: 18pt"><b>Edicion de Inmuebles</b></legend>
					   <div class="col-md-2">
					      <label style="font-size: 14pt"><b>Id</b></label><br>
					      <input type="text" name="id" value= "<?php echo $id ?>" readonly="readonly">
					   </div>
				    <div class="col-md-2">
				      <label style="font-size: 14pt"><b>Codigo</b></label>
				      <input type="text" name="codigo" class="form-control" value= "<?php echo $codigo?>" placeholder="Ingresa el codigo" />
				    </div>
				    <div class="col-md-2">
				      <label style="font-size: 14pt; "><b>Numero</b></label>
				      <input type="text" name="numero" class="form-control" value= "<?php echo $numero ?>" required placeholder="Ingresa el numero"/>
				    </div>
				    <div class="col-md-6">
				      <label style="font-size: 14pt; "><b>Direccion</b></label>
				      <input type="text" name="direccion" class="form-control" value= "<?php echo $direccion ?>" placeholder="Ingresa direccion" />
				    </div>
				     <div class="col-md-2">
				      <label style="font-size: 14pt"><b>Postal</b></label>
				      <input type="text" name="postal" class="form-control" value= "<?php echo $postal ?>" required placeholder="Ingresa postal" />
				    </div>
				    <div class="col-md-4">
				      <label style="font-size: 14pt"><b>Imagen</b></label>
				      <input type="file" name="imagen"  class="form-control" value= "<?php echo $imagen ?>" placeholder="Subir Imagen" />
				    </div>
				    <div class="col-md-6">
				        <label style="font-size: 14pt; "><b>Ingresa el precio</b></label>
				        <div class="input-group">
				        <div class="input-group-addon">$</div>
				        <input type="text" name="precio" class="form-control" value= "<?php echo $precio ?>" required placeholder="Ingresa el precio"/>
				    </div>
				    </div>
				    <div class="col-md-4">
				        <label style="font-size: 14pt"><b>Elige el tipo</b></label>
				        <select name="tipo" class="form-control" value= "<?php echo $tipo ?>">
				        <option value="Edificio">Edificio</option>
				        <option value="Local">Local</option>
				        <option value="Piso">Piso</option>
				      </select>
				    </div>
				    <div class="col-md-8">
				        <label style="font-size: 14pt; "><b>Ingresa la descripcion</b></label>
				        <input type="text" name="descripcion" class="form-control" value= "<?php echo $descripcion ?>"  placeholder="Ingresa descripcion" />
				    </div>
					<div class="col-md-1">
					 <br>
					 <button  class="btn btn-success" type="submit" name="submit" value="Guardar">Guardar</button>
					</div>
					<div class="col-md-1">
					  <br> 
					  <button  class="btn btn-danger" type="submit" name="cancelar" value="Cancelar" onclick = "location='listadoInmuebles.php'"/>Cancelar</button>
					</div>
					</div>
				    </div>
				    </div>
			</fieldset>
        </form>    

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


