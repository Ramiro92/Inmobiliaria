<?php
require_once 'conexion.php';
$cod=$_REQUEST['cod'];
$num=$_REQUEST['num'];
$dir= $_REQUEST['dir'];
$pos=$_REQUEST['pos'];
$imagen=$_FILES["imagen"]["name"];
$ruta=$_FILES["imagen"]["tmp_name"];
$destino="imagenes/".$imagen;
copy($ruta,$destino);
mysql_query("insert into inmuebles (codigo,numero,direccion,postal,imagen) values('$cod','$num','$dir','$pos','$imagen')");
header("Location: Usuarios.php");
?>