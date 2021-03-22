<?php 

    $nombreCompleto=$_POST['nombre completo'];
    $telefono=$_POST['numero de telefono'];
    $mailDir=$_POST['email'];
    $mensaje=$_POST['mensaje'];

    // configuramos datos de email

    $destinatario="lp.tiendanatural@gmail.com";

    $asunto= "Email de consulta enviado desde mi web";


    // cuerpo de email

    $cuerpo.="Nombre completo: ".$nombres."\n";

    $cuerpo.="Numero de telefono: ".$numero."\n";

    $cuerpo.="Email: ".$email."\n";

    $cuerpo.="mensaje: ".$mensaje."\n";

    // enviamos el email

    mail($destinatario,$asunto,$cuerpo);
    //echo es el feedback luego de enviar el mail
    echo $nombre, "Gracias por contactarnos!!!";		

?>
