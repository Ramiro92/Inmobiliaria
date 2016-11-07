<?php 
session_start();

echo 'El ID del inquilino es: '. $_SESSION['idInquilino']; 
require("..\conexion.php");
$sql=("UPDATE inmuebles SET Inquilino_idInq = ".$_SESSION['idInquilino'].", Estado = 0 WHERE idInmuebles = ".$_POST['idInmueb'].";");
$query=mysql_query($sql);
?>