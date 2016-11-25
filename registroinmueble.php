<?php
require('conexion.php');
$codigo=$_REQUEST['codigo'];
$numero=$_REQUEST['numero'];
$direccion= $_REQUEST['direccion'];
$postal=$_REQUEST['postal'];
$imagen=$_FILES["imagen"]["name"];
$precio=$_REQUEST['precio'];
$descripcion=$_REQUEST["descripcion"];
$tipo=$_REQUEST["tipo"];
$ruta=$_FILES["imagen"]["tmp_name"];
$destino="imagenes/".$imagen;
copy($ruta,$destino);
mysql_query("INSERT INTO inmuebles (codigo,numero,direccion,postal,imagen,precio,descripcion,tipo) VALUES('$codigo','$numero','$direccion','$postal','$imagen','$precio','$descripcion','$tipo')");
//header('Location:listadoInmuebles.php');
echo "<script>location.href='listadoInmuebles.php'</script>";
?>