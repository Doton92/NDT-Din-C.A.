<?php  

// Llamando a los campos
$name = $_POST['name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$msg = $_POST['msg'];




// Datos para el correo
$destinatario = "karenvlasqez@gmail.com";
$asunto = "Contacto desde nuestra web";

$carta = "Nombre: $name \n";
$carta .= "Apellido: $last_name \n";
$carta .= "Correo: $email \n";
$carta .= "Mensaje: $msg \n";

// Enviando Mensaje
mail($destinatario, $asunto, $carta);
header('Location:mensaje-de-envio.html');
?>