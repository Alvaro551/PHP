<?php



session_start();

if (empty($_SESSION["usuario"])) {

    header("Location: formulario.html");

    exit();
}

echo "Soy un mensaje secreto";
?>

<p>
    Hola mundo, soy un párrafo HTML que solamente pueden ver los usuarios logueados
</p>

<a href="logout.php">Cerrar sesión</a>

*/