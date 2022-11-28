<?php

$hostname = "localhost";
$usuario = "root";
$password = "";
$basededatos = "empresa";
echo "<pre>";

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    try {
        $mbd = new PDO('mysql:host=localhost;dbname=empresa', $usuario, $password);
        echo "Conectado\n";
    } catch (Exception $e) {
        die("No se pudo conectar: " . $e->getMessage());
    }

    try {
        $sentencia = $mbd->prepare("SELECT * FROM usuarios where rol = ?");
        if ($sentencia->execute(array($_GET['rol']))) {
            while ($fila = $sentencia->fetch()) {
                print_r($fila);
            }
        }
    } catch (Exception $e) {
        echo "Fallo: " . $e->getMessage();
    }
}
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
    <a href="pdoSentenciasPreparadasPorGet.php?rol=1">Enviar</a>
</body>

</html>