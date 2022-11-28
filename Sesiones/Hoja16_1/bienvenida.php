<?php
session_start();
isset($_SESSION["nombre"]) ? $nombre = $_SESSION["nombre"] : $nombre = "nombre no definido";
isset($_SESSION["contrasena"]) ? $contrasena = $_SESSION["contrasena"] : $contrasena = "contraseña no definido";
session_destroy();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p>Nombre: <?php echo $nombre ?></p>
    <p>Contraseña: <?php echo $contrasena ?></p>
</body>

</html>