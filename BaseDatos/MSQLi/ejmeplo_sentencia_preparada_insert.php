<?php

$server = "localhost";
$user = "root";
$password = "";
$dbname = "empresa";
// Conectar
$db = new mysqli($server, $user, $password, $dbname);
// Comprobar conexión
if($db->connect_error){
    die("La conexión ha fallado, error número " . $db->connect_errno . ": " . $db->connect_error);
}

// Preparar
$stmt = $db->prepare("INSERT INTO usuarios (nombre, clave, rol) VALUES (?, ?, ?)");
$stmt->bind_param('ssi', $nombre, $clave, $rol);
// Establecer parámetros y ejecutar
$nombre = "Donald Trump";
$clave = "Madrid";
$rol = 2;
$stmt->execute();
$nombre = "Hillary Clinton";
$clave = "Barcelona";
$rol = 1;
$stmt->execute();
// Mensaje de éxito en la inserción
echo "Se han creado las entradas exitosamente";
// Cerrar conexiones
$stmt->close();
$db->close();

?>