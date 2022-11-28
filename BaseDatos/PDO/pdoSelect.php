<?php

$hostname = "localhost";
$usuario = "root";
$password = "";
$basededatos = "empresa";
try {
    $mbd = new PDO('mysql:host=localhost;dbname=empresa', $usuario, $password);
    echo "Conectado\n";
} catch (Exception $e) {
    die("No se pudo conectar: " . $e->getMessage());
}

try {
    $sql = 'SELECT nombre, clave, rol from usuarios';
    $usuarios = $mbd->query($sql);
    echo "Numero de usuarios: " . $usuarios->rowCount() . "<br/>";
    foreach ($usuarios as $usu) {
        print "Nombre : " . $usu['nombre'];
        print "  |  Clave : " . $usu['clave'] . "<br/>";
    }
} catch (Exception $e) {
    $mbd->rollBack();
    echo "Fallo: " . $e->getMessage();
}
