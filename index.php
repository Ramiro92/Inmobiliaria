<!DOCTYPE html>
<html lang="es">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Inicio de Sesion</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>	
<body>
	<header>
	    <div class="container">
        <div class="row">
          <div class="col-md-offset-4">
          <div class="col-md-6">
	    	<form class="form-signin" action="validar.php" method="post">
        	<h2 class="form-signin-heading">Iniciar Sesion</h2>
        	<label for="inputUsuario" class="sr-only">Email address</label>
        		<input type="email" id="inputUsuario" class="form-control" placeholder="Usuario" required="" name="mail" autofocus="">
        		<label for="inputPassword" class="sr-only">Password</label>
        	<input type="password" id="inputPassword" class="form-control" placeholder="Contraseña" required="" name="pass">
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Recordarme
          </label>
          <label>
            <a href="registrese.php">registrese</a>
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Ingresar</button>
      </form>
    </div>
    </div>
    </div>
</div>

	</header>
</body>
</html>