<?php

		$nombre="Claudia Trujillo";
        $fecha=date("d-m-Y");
        $hora=date("H:i:s");      
        $asunto='Compra en x dominio';
        $desde="www.pagina.com";
        
        $correo="tucorreo@gmail.com";

       $comentario='
        <div style="
	        border: 1px solid #d6d2d2;
	        border-radius: 5px;
	        box-shadow: 5px 5px 10px rgba(57,29,150,0.5);
	        color:#9378f0;
	        padding:10px;
	        width:800px%;
	        heigth:400px;
        ">
        <center>
        <img src="" width="400" heigth="250">
        <h1><em>Muchas Gracias por tu compra</em></h1></center>

            <hr width="90%">

            <p>Hola '.$nombre.' muchas gracias por  comprar en nuestro sitio a continuación te mostramos los detalles de tu compra.</p>
          
            ';


        
         echo $comentario;
        $headers = "MIME-Version: 1.0\r\n"; 
        $headers .= "Content-type: text/html; charset=utf8\r\n"; 

        
        $headers .= "From: Remitente\r\n"; 
        
    
        mail($correo,$asunto,$comentario,$headers);
?>