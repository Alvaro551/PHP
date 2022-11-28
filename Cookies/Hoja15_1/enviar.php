<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
if (!isset($_COOKIE['usuario'])) {
        $nombre = $_POST['nombre'];
        setcookie("usuario", $nombre,time()+8400, 'homePage.php', '', 0);
    } header('location: homePage.php');
} else {
    echo "error";
}
