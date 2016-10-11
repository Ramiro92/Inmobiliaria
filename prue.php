<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
<body style='background-image:url(fondo/wallpaper.jpg);background-attachment:fixed;background-repeat:no-repeat;background-position:50% 50%;'>
     
    <center><strong><h1>INSERTAR RUTA DE FOTOS A LA BD</h1></strong></center>
    <p>
        <form action="valida_foto.php" method="POST" enctype="multipart/form-data">
            <center><fieldset>
    <legend  style="font-size: 18pt"><b>Nuevo Inmueble</b></legend>
    <div class="form-group">
      <label style="font-size: 14pt"><b>Codigo</b></label>
      <input type="text" name="cod" class="form-control" placeholder="Ingresa el codigo" />
    </div>
    <div class="form-group">
      <label style="font-size: 14pt; "><b>Numero</b></label>
      <input type="text" name="num" class="form-control"  required placeholder="Ingresa el numero"/>
    </div>
    <div class="form-group">
      <label style="font-size: 14pt; "><b>Direccion</b></label>
      <input type="text" name="dir" class="form-control"  placeholder="Ingresa direccion" />
    </div>
     <div class="form-group">
      <label style="font-size: 14pt"><b>Postal</b></label>
      <input type="pos" name="pos" class="form-control" required placeholder="repite postal" />
    </div>
    <div class="form-group">
      <label style="font-size: 14pt"><b>Imagen</b></label>
      <input type="file" name="imagen" id="imagen"class="form-control" placeholder="Subir Imagen" />
      <button  class="btn btn-success" type="submit" name="submit" value="Guardar">Guardar</button>
</div>
    </div>
        </form>    
        
        <br><br>
        <?php
        require_once 'conexion.php';
        $sql=  mysql_query("select * from inmuebles");
        while($res=  mysql_fetch_array($sql)){
            echo $res["cod"]."<br>";
            echo '<img src="'.$res["imagen"].'" width="100" heigth="100"><br>';
        }
        ?>
    </body>
</html>
