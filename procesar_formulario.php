<?php
header("Access-Control-Allow-Methods: *");
if ($_SERVER["REQUEST_METHOD"] == "post") {
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $mensaje = $_POST["mensaje"];

    $destinatario = "barreraulises77@gmail.com"; 
    $asunto = "Nuevo mensaje de contacto desde el sitio web";

    $contenido = "Nombre: $nombre\nCorreo: $correo\nMensaje:\n$mensaje";

    // Envío del correo
    mail($destinatario, $asunto, $contenido);

    // Redireccionar a una página de confirmación o agradecimiento
    header("Location: Gracias.html");
}
?>
