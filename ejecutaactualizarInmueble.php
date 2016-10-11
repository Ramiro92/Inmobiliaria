<?php


extract($_POST);	//extraer todos los valores del metodo post del formulario de actualizar
	require("conexion.php");
	$sentencia="UPDATE inmuebles SET codigo='$codigo', numero='$numero', direccion='$direccion',postal='$postal', imagen='$imagen',precio='$precio',descripcion='$descripcion',tipo='$tipo' WHERE id='$id'";
	$resent=mysql_query($sentencia);
	if ($resent==null) {
		echo "Error de procesamieno no se han actuaizado los datos";
		echo '<script>alert("ERROR EN PROCESAMIENTO NO SE ACTUALIZARON LOS DATOS")</script> ';
		header("location: admin.php");
		
		echo "<script>location.href='admin.php'</script>";
	}else {
		echo '<script>alert("REGISTRO ACTUALIZADO")</script> ';
		
		echo "<script>location.href='admin.php'</script>";

		
	}
?>