<?php
session_name("nuevoNombre");
session_start();
$nombreSesion = session_name();
$idSesion = session_id();
print_r($_SESSION);
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
    <p>Nomre de sesión: <?php echo $nombreSesion ?></p>
    <p>ID de sesión: <?php echo $idSesion ?></p>

    <?php

    foreach ($_SESSION as $key => $value) {
        echo $key . " -> " . $value . "<br/>";
    }
    ?>
    <a href="mod_sesion.php">continuar</a>
</body>


</html>