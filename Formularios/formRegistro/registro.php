<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nombre =  trim($_POST['nombre']);
    $apellidos = trim($_POST['apellidos']);
    $email = trim($_POST['email']);
    $c_email = trim($_POSY['c_email']);
    $contraseña = trim($_POST['contraseña']);
    $c_contraseña = trim($_POST['c_contraseña']);

    if ($email === $c_email && $contraseña === $c_contraseña) {
        include("conect.php");
        $link = conectarse();
        $result = mysqli_query($link, "INSERT INTO usuarios (nombre, apellidos, email, contraseña) VALUES ('$nombres', '$apellidos', '$email', '$contraseña')");
        if ($result === TRUE) {
            echo "Registro exitoso";
            header("Location: ../TrabajoClase/Consulta.php?success=datos_validos"); //Cambiar esto por la redireccion a main(alexis)
        } else {
            echo "Error: " . mysqli_error($link);
        }
    }
}
