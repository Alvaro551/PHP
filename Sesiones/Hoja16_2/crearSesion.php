<?php

session_start();
$_SESSION["nombre"] = "Gabriel";
$_SESSION["email"] = "gabmecu@gmail.com";
$nombre = $_SESSION["nombre"];
$email = $_SESSION["email"];
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
    <p>Nomre: <?php echo $nombre ?></p>
    <p>Email: <?php echo $email ?></p>
    <a href="mod_sesion.php">continuar</a>
</body>

</html>