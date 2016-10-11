<?php

	$nombre=$_POST['nombre'];
	$apellido=$_POST['apellido'];
	$direccion=$_POST['direccion'];
	$edad=$_POST['edad'];
	$DUI=$_POST['DUI'];
	$NIT=$_POST['NIT'];
	$sexo=$_POST['sexo'];
	$numero_cuenta=$_POST['numero_cuenta'];
	$fecha_nacimiento=$_POST['fecha_nacimiento'];
	$email=$_POST['email'];
	$pass= $_POST['pass'];
	$rpass=$_POST['rpass'];

	require("conexion.php");
	$checkemail=mysql_query("SELECT * FROM inquilino WHERE email='$email'");
	$check_mail=mysql_num_rows($checkemail);
		if($pass==$rpass){
			if($check_mail>0){
				echo ' <script language="javascript">alert("Atencion, ya existe el mail designado para un usuario, verifique sus datos");</script> ';
			}else{
				
				//require("connect_db.php");
				//mysql_query("INSERT INTO inquilino VALUES('','$nombre','$apellido','$direccion','$edad','$DUI','$NIT','$sexo','$numero_cuenta','$fecha_nacimiento', '$pass', '$email','')");
				mysql_query("INSERT INTO inquilino (nombre, apellido, direccion, edad, DUI, NIT, sexo, numero_cuenta, fecha_nacimiento, pass, email) VALUES ('$nombre','$apellido','$direccion','$edad','$DUI','$NIT','$sexo','$numero_cuenta','$fecha_nacimiento','$pass','$email')");
				//echo 'Se ha registrado con exito';
				echo ' <script language="javascript">alert("Usuario registrado con éxito");</script> ';
				header('Location:index.php');
			}
			
		}else{
			echo 'Las contraseñas son incorrectas';
		}

	
?>