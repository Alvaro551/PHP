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
    $mbd->beginTransaction();
    $mbd->exec("insert into antiguosEmpleados(id,nombre) values('','Maria')");
    $mbd->exec("delete from empleados where nombre = 'Maria'");
    $mbd->commit();
} catch (Exception $e) {
    $mbd->rollBack();
    echo "Fallo: " . $e->getMessage();
}
