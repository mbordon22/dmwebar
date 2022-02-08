<?php

$nombre = $_POST['nombre_contacto'];
$correo = $_POST['email_contacto'];
$asunto = $_POST['asunto_contacto'];
$mensaje = $_POST['mensaje_contacto'];
$bot_control = $_POST['bot_control'];


$correo_destino = 'rivadenneira@gmail.com';
$asunto_mail = "Pagina Web";

$contenido_mail = "Hola " . $nombre . "\r\nCon el siguiente email: " . $correo . "\r\nEl asunto: ". $asunto ."\r\nTe ha enviado el siguiente mensaje \r\n\r\n " . $mensaje;

if($bot_control == ''){
    if(mail($correo_destino, $asunto_mail, $contenido_mail)){
        $response['status'] = 'ok';
        echo json_encode($response);
    } else {
        $response['status'] = 'error';
        $response['mensaje'] = $contenido_mail;
        echo json_encode($response);
    }
}

?>