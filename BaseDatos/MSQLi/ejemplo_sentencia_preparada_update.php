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

$stmt = $db->prepare("UPDATE usuarios SET nombre = ? WHERE codigo = ?");
$stmt->bind_param("si", $_POST['nombre'], $_SESSION['id']);
$stmt->execute();
$stmt->close(); 
?>