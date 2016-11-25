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
					<li class="#"><a href="adminUsu.php">Inicio <span class="glyphicon glyphicon-home"></a></li>

					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">Alquiler <span class="glyphicon glyphicon-tags"></span> </a>
							<ul class="dropdown-menu" role="menu">

								<li Class="#"><a href="inmuebles_alquilarUsu.php">Inmuebles a alquilar</a></li>
								

								<li Class="#"><a href="catalogo_inmueblesUsu.php">Catalogo de inmuebles</a></li>

							</ul>
					</li>
					
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">Compras <span class="glyphicon glyphicon-shopping-cart"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li Class="#"><a href="index3usu.php">Compras</a></li>
            			<!--	<li Class="#"><a href="./admin/agregarproducto.php">Nueva Compra</a></li>
            				<li Class="#"><a href="./admin/modificar.php">Editar Compra</a></li> -->
  						</ul>
					</li>
					<li>
						<a href="quien.php" >¿Quienes somos? <span class="glyphicon glyphicon-info-sign"></span></a>
					</li>
					<li >
						<a href="contact.php" >Contactenos <span class="glyphicon glyphicon-earphone"></span></a>
					</li>					
					<li><a href="adminUsu.php">Bienvenido <strong><?php echo $_SESSION['nombre'];?></strong> </a></li>
					<li><a href="desconectar.php">Cerrar Sesion <span class="glyphicon glyphicon-off"></span></a></li>
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