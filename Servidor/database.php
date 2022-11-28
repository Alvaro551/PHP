<?php

$server = 'localhost';
$username = 'root';
$password = '';
$database = 'usuarios';

$conn = mysqli_connect($server, $username, $password, $database);

if (!$conn) {
  die("Conexion fallida");
}
 