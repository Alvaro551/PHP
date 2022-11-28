<?php   

$nombre = "ContadorTDSW";

$valor = 1;
if (!isset($_COOKIE[$nombre])) {
    $valor = 1;
} else {
    $valor = $_COOKIE[$nombre] + 1;
}
$fecha_expiracion = mktime(0, 0, 1, 1, 2010);
$path = $_SERVER['REQUEST_URI'];

setcookie($nombre, $valor, $fecha_expiracion, $path, '', 0);
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
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label>Nombre</label>
        <input type="text" name="nombre">
        <input type="submit">
    </form>
</body>

</html>