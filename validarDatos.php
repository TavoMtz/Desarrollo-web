<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nombre = trim($_POST['nombre'] ?? '');
    $contraseña = trim($_POST['contraseña'] ?? '');

    if ($nombre === "") {
        header("Location: formsInicioSesion.html?error=nombre_vacio");
    } elseif ($contraseña === "") {
        header("Location: formsInicioSesion.html?error=contraseña_vacia");
    } else {
        header("Location: formsInicioSesion.html?success=datos_validos");
    }
    exit(); // Detener ejecución después de la redirección
}
//