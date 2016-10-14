<!DOCTYPE>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<title>Menu</title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		
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
				<a href="#" class="navbar-brand">Inmobiliaria Ramos</a>
			</div>
			<!-- Inicia Menu-->
			<div class="collapse navbar-collapse" id="navegacion-BP">
				<ul class="nav navbar-nav">
					<li class="#"><a href="admin.php">Inicio <span class="glyphicon glyphicon-home"></a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">Inmuebles <span class="glyphicon glyphicon-tasks"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li Class="#"><a href="listadoInmuebles.php">Listado de Inmuebles</a></li>
            				<li Class="#"><a href="nuevoInmueble.php">Nuevo Inmueble</a></li>
            				<li Class="#"><a href="#">Ideario</a></li>
            				<li Class="#"><a href="#">Oferta Academica</a></li>
            				<li Class="#"><a href="#">Mensaje del Director(a)</a></li>
            				<li Class="#"><a href="#">Historia del Centro Escolar</a></li>
            				<li Class="#"><a href="#">Marco Legal</a></li>
            				<li Class="#"><a href="#">Reglamento Interno</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">Usuarios <span class="glyphicon glyphicon-user"></span></span></a>
						<ul class="dropdown-menu" role="menu">
							<li Class="#"><a href="Usuarios.php">Listado de Usuarios</a></li>
            				<li Class="#"><a href="#">Concejo Directivo</a></li>
            				<li class="divider"></li>
            				<li Class="#"><a href="#">Organigrama del CDE</a></li>
            				<li Class="#"><a href="#">Funciones</a></li>
  						</ul>
					</li>
					<li><a href="#">Servicios</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">Proyectos <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li Class="#"><a href="#">Escuela de Padres y Madres</a></li>
            				<li Class="#"><a href="#">Prevencion de Desastres</a></li>
            				<li class="#" ><a href="#">Recreos Orientados</a></li>
  						</ul>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">Compras <span class="glyphicon glyphicon-shopping-cart"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li Class="#"><a href="index3.php">Compras</a></li>
            				<li Class="#"><a href="#">Ubicacion Geografica</a></li>
  						</ul>
					</li>
					<li><a href="">Bienvenido <strong><?php echo $_SESSION['nombre'];?></strong> </a></li>
					<li><a href="desconectar.php">Cerrar Sesion</a></li>
				</ul>
				<!-- <form action="" class="navbar-form navbar-right" role="search">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Buscar">
					</div>
					<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-search"></span></button>
				</form> -->
			</div>
		</div>
	</nav>
		</header>
		<!--Aqui va el jumbotron-->
			<section="main container">
				
			</section>
			<script src="js/jquery.js"></script>
			<script src="js/bootstrap.min.js"></script>
	</body>
</html>