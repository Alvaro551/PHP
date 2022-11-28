<?php
session_start();
$_SESSION['nombre'] = $_POST["nombre"];
header('location : bienvenido.php');

?>