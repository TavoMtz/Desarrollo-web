<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nombre = trim($_POST['nombre'] ?? '');
    $contraseña = trim($_POST['contraseña'] ?? '');

    if ($nombre === "") {
        header("Location: formsInicioSesion.html?error=nombre_vacio");
    } elseif ($contraseña === "") {
        header("Location: formsInicioSesion.html?error=contraseña_vacia");
    } else {
        //Aqui se hace la consulta y se validan datos
        include("conect.php"); // Incluye el archivo conect.php
        $link = conectarse();
        $result = mysqli_query($link, "SELECT usua, pass FROM usuarios WHERE usua='$nombre' AND pass='$contraseña'");
        $tipo = mysqli_query($link, "SELECT susuario as TIPO from usuarios where usua = '$nombre'");
        if ($result->num_rows === 0) {
            header("Location: formsInicioSesion.html?error=datos_invalidos");
        } else {
            switch ($_GET['tipo']) {
                case "2":
                    header("Location: ../TrabajoClase/Consulta.php?success=datos_validos");
                    break;
                case "1":
                    header("Location: ../TrabajoClase/Consulta.php?success=datos_validos");
                    break;
                case "0":
                    header("Location: ../TrabajoClase/Consulta.php?success=datos_validos");
                    break;
                default:
                    header("Location: formsInicioSesion.html?error=tipo_no_valido");
            }
        }
    }
    exit(); // Detener ejecución después de la redirección
}
//