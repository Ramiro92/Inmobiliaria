<form action='foto.php' method='post' enctype='multipart/form-data'>

 <label for='file'>Seleccione su foto:</label>

 <input type='file' name='file' />

 <input type='submit' name='submit' value='Submit' />

 </form>
 <?/* lanzamos la consulta para traernos el nombre de la imagen, en nuestro caso 
el campo ruta_imagen se encuentra en la tabla usuarios */ 
$result = mysql_query("SELECT * FROM usuarios "); 
while ($row=mysql_fetch_array($result)) 
{ 
    /*almacenamos el nombre de la ruta en la variable $ruta_img*/ 
    $ruta_img = $row["ruta_imagen"]; 
}
?>
<div>
   <img src="/intranet/uploads/<?php echo $ruta_img; ?>" alt="" />
</div>