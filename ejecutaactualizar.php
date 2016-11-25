<?php


extract($_POST);	//extraer todos los valores del metodo post del formulario de actualizar
	require("conexion.php");
	$sentencia="UPDATE inquilino SET nombre='$nombre',apellido='$apellido',edad='$edad',sexo='$sexo',fecha_nacimiento='$fecha_nacimiento', direccion='$direccion',DUI='$DUI',NIT='$NIT',numero_cuenta='$numero_cuenta', pass='$pass', email='$email', pasadmin='$pasadmin' where idInquilino='$id'";
	$resent=mysql_query($sentencia);
	if ($resent==null) {
		echo "Error de procesamieno no se han actuaizado los datos";
		echo '<script>alert("ERROR EN PROCESAMIENTO NO SE ACTUALIZARON LOS DATOS")</script> ';
		header("location: admin.php");
		
		echo "<script>location.href='Usuarios.php'</script>";
	}else {
		echo '<script>alert("REGISTRO ACTUALIZADO")</script> ';
		
		echo "<script>location.href='Usuarios.php'</script>";

		
	}
?>