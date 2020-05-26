<?php
$destino = "josue.arellano@uvic.cat";
$nombre = $_POST["nom"];
$correo = $_POST["email"];
$mensaje = $_POST["missatge"];
$contenido = "Nom: " . $nombre . "\nEmail: " . $email . "\nMissatge:" .$mensaje;
mail($destino,"Contacto", $contenido);
header("Location:gracias.html");
?>