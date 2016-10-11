<!DOCTYPE html>
<?php
session_start();
if (@!$_SESSION['user']) {
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

    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
</head>	
<body>
	<header>
<nav class="navbar navbar-inverse navbar-static-top" role="navigation">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navegacion-BP">
          <span class="sr-only">Desplegar / Ocultar Menu</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a href=".php" class="navbar-brand">Usuario</a>
      </div>
      <!-- Inicia Menu-->
      <div class="collapse navbar-collapse" id="navegacion-BP">
        <ul class="nav navbar-nav">
          <li class="#"><a href="nuevoinmueble.php">Nuevo Inmueble</a></li>
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
	</header>
</body>
</html>