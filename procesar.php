<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $nombre = htmlspecialchars($_POST['nombre']);
  $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
  $mensaje = htmlspecialchars($_POST['mensaje']);

  if ($nombre && $email && $mensaje) {
    // Ejemplo: guardar o enviar mensaje
    echo "Mensaje recibido. Gracias, $nombre.";
  } else {
    echo "Error: datos inválidos.";
  }
} else {
  echo "Acceso no autorizado.";
}
?>
<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nombre = htmlspecialchars($_POST['nombre']);
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    $mensaje = htmlspecialchars($_POST['mensaje']);

    if ($nombre && $email && $mensaje) {
        $para = "miwebbonpland.com"; // ← poné acá TU correo real
        $asunto = "Mensaje desde tu sitio web";
        $contenido = "Nombre: $nombre\nCorreo: $email\nMensaje:\n$mensaje";
        $cabeceras = "From: $email";

        if (mail($para, $asunto, $contenido, $cabeceras)) {
            echo "✅ Mensaje enviado con éxito.";
        } else {
            echo "❌ Error al enviar el mensaje. (¿Estás en localhost?)";
        }
    } else {
        echo "❗ Faltan datos válidos.";
    }
} else {
    echo "Acceso no autorizado.";
}
?>
