<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    session_start();
    $_SESSION["nombre"] = $_POST["nombre"];
    $_SESSION["contrasena"] = $_POST["contrasena"];
    header("Location: bienvenida.php");
} else {
    header("Location: formulario.html");
}
