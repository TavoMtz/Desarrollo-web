<html>
    <head> <title> Ejemplo PHP función conectarse </title> </head>
    <body>
        <?php
            function Conectarse(){
                $servidor = "172.17.60.163";
                $usuario = "Ismael";
                $password = "852";
                $bd = "mibd2";
                $link = mysqli_connect($servidor, $usuario, $password, $bd);
                if (!$link) {
                    die("Error de conexión: " . mysqli_connect_error());
                }
                return $link;
            }
            $link = Conectarse();
            echo "Conexión exitosa a la base de datos.";
        ?>