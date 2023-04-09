<?php
// Definir variables del formulario
$name = $_POST['name'];
$email = $_POST['email'];
$description = $_POST['description'];

// Definiremail el destinatario y el asunto del correo electrónico
$para = 'reyalejandroh@gmail.com';
$asunto = 'Nuevo mensaje de ' . $name;

// Construir el mensaje de correo electrónico
$mensaje_correo = "Name: $name\n";
$mensaje_correo .= "Email: $email\n";
$mensaje_correo .= "Description:\n$description\n";

// Enviar el correo electrónico utilizando la función mail()
mail($para, $asunto, $mensaje_correo);

// Redirigir al usuario a una página de confirmación
header('Location: index.html');
?>
