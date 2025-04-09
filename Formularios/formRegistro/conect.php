<html>

<head>
    <title> Ejemplo php conectarse</title>
</head>

<body>
    <?php
    function Conectarse()
    {
        if (!($link = mysqli_connect("92.249.45.29", "proydweb_p2025", "Dw3bp202%", "proydweb_p2025", 3306))) {
            echo "Error conectando a la base de datos";
            exit();
        }
        return $link;
    }
    ?>
</body>

</html>