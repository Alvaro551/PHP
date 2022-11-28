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
$stmt = $mysqli->prepare("UPDATE myTable SET name = ?");
$stmt->bind_param("si", $_POST['name'], $_POST['age']);
$stmt->execute();
if($stmt->affected_rows === 0) exit('No rows updated');
$stmt->close(); 
?>