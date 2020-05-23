<?php
//Llamando a cada input

$correo= $_POST['correo'];


//Datos el correo de destino

$destinatario = "misterapiasbogota@gmail.com";
$asunto = "Suscriptores blog misTerapias";


$email = "Correo: $correo \n";


//Enviando Mensaje
mail($destinatario, $asunto, $email);
header('Location:mensaje-suscriptores.html')

?>

