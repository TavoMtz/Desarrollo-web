<html>

<head>
    <title> Ejemplo php conectarse</title>
</head>

<body>
    <?php
    function Conectarse()
    {
        if (!($link = mysqli_connect("172.17.60.163", "Gustavo", "040603", "mibd2"))) {
            echo "Error conectando a la base de datos";
            exit();
        }
        return $link;
    }
    $link = Conectarse();
    echo "Conexion con la base de datos conseguida.";
    mysqli_close($link); //cierra la conexion
    ?>
</body>

</html>