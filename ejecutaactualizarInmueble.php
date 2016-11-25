<?php


extract($_POST);	//extraer todos los valores del metodo post del formulario de actualizar
	require("conexion.php");
	$imagen=$_FILES["imagen"]["name"];
	$sentencia="UPDATE inmuebles SET codigo='$codigo', numero='$numero', direccion='$direccion', postal='$postal', imagen='$imagen', precio='$precio', descripcion='$descripcion', tipo='$tipo', estado='$estado' WHERE idInmuebles='$id'";
	$resent=mysql_query($sentencia);
	if ($resent==null) {
		echo "Error de procesamieno no se han actuaizado los datos";
		echo '<script>alert("ERROR EN PROCESAMIENTO NO SE ACTUALIZARON LOS DATOS")</script> ';
		header("location: listadoInmuebles.php");
	}else {
		//echo '<script>alert("REGISTRO ACTUALIZADO")</script> ';
		
		echo "<script>location.href='listadoInmuebles.php'</script>";

		
	}
?>