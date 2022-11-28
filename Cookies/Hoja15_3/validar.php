<?php
session_start();
$_SESSION['color'] = $_POST['color'];
header('location: mostrar_color.php')
?>