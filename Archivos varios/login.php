<?php



$usuario_correcto = "alvaro";
$contrasena_correcta = "1234";

$usuario = $_POST["usuario"];
$contrasena = $_POST["contrasena"];

$datos = ["alvaro" => "1234", "carlos" => "aaaa"];
    

if ($contrasena == $datos[$usuario]) {
    header("Location:secreta.php");
} else {
    header("Location:error.php");
}

/*
if ($usuario === $usuario_correcto && $contrasena === $contrasena_correcta) {
   
    session_start();
   
    $_SESSION["usuario"] = $usuario;

    header("Location: secreta.php");
} else {
   
    echo "El usuario o la contrasena son incorrectos";
}
*/

?>