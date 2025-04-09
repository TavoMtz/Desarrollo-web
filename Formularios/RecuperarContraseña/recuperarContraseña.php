<?php
// Datos de conexión a la base de datos (reemplázalos)
include("conect.php");
$link = conectarse();

// Crear conexión

// Verificar conexión
if ($link->connect_error) {
    die("Conexión fallida: " . $link->connect_error);
}

// Obtener el correo del formulario
$correo = $_POST['correo'];

// Consulta para buscar el correo
$result = mysqli_query($link, "SELECT contraseña FROM usuarios WHERE correo = '$correo'");

if ($result->num_rows > 0) {
    // Usuario encontrado
    $row = $result->fetch_assoc();
    $contraseña = $row['contraseña'];

    // Enviar correo (esto usa la función mail simple de PHP)
    $asunto = "Recuperación de contraseña";
    $mensaje = "Tu contraseña es: $contraseña";
    $cabeceras = "From: soporte.kaffessito@gmail.com";

    if (mail($correo, $asunto, $mensaje, $cabeceras)) {
        echo "Correo enviado correctamente.";
    } else {
        echo "Error al enviar el correo.";
    }
} else {
    echo "Correo no encontrado.";
}

$link->close();
