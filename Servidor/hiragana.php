<?php
session_start();

include 'database.php';
include 'funciones.php';

if (isset($_SESSION["name"])) ?>
<br> Welcome <?= $_SESSION["name"]; ?>
<br>You are Successfully Logged In
<br>Turno <?php if (isset($_COOKIE[$_SESSION['name']])) {
                echo $_COOKIE[$_SESSION['name']];
            } ?>
<?php

$name =  $_SESSION['name'];
$mensaje = "";

$index = isset($_POST['index']) ? $_POST['index'] : 1;
$index2 = isset($_POST['index2']) ? $_POST['index2'] : 0;


$query = "SELECT id,simbolo,fonema FROM hiragana where id = $index";
$result = $conn->query($query);
$row = $result->fetch_array(MYSQLI_ASSOC);
if (!isset($_POST['fonema'])) {
    $mensaje = "<h1>Bienvenido al juego!</h1></br>";
    echo $mensaje;
    $index2 == 0;
} elseif ($_POST['fonema'] == $row["fonema"]) {
    $mensaje = "<h1>Acierto!</h1></br>";
    echo $mensaje;
    $index++;
    $index2++;
    $query = "SELECT id, simbolo , fonema FROM hiragana where id = $index";
    $result = $conn->query($query);
    $row = $result->fetch_array(MYSQLI_ASSOC);
    insertAcierto($name, $conn);
} elseif ($_POST['fonema'] !=  $row["fonema"]) {
    $index2++;
    $mensaje = "<h1>Incorrecto!</h1></br>";
    echo $mensaje;
    insertarFallos($name, $conn);
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Juego!</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body style="background-color:#B4BEC9;">
    <?php
    if ($index < 36) {
    ?>
        <b>Intenta adivinar el caracter:</b>
        <?php print "  simbolo : " . $row["simbolo"]; ?>
        <form action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> method="POST" enctype="multipart/form-data">
            <p><label for="fonema">Introduce la respuesta:</label>
                <input type="text" id="fonema" name="fonema" />
            </p>
            <input type="submit" id="validar" value="Adivinar"></input>
            <input type="hidden" name="index" value="<?php echo $index; ?>">
            <input type="hidden" name="index2" value="<?php echo $index2; ?>">
        </form>
        <form action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> method="POST" enctype="multipart/form-data">
            <input type="submit" name="reset" id="validar" value="Reset">
        </form>
    <?php
    } else {
        insertarGanada($name, $conn);
        echo "<h1>Ranking</h1>";
        $ranking = ranking();
        imprimirRanking($ranking);
    ?>
        <b>Juego acabado!</b>
        </form>
        <form action="hiragana.php" enctype="multipart/form-data">
            <input type="submit" id="validar" value="Volver a jugar"></input>
        </form>
    <?php
    }
    ?>
    <form action="index.php" enctype="multipart/form-data">
        <input type="submit" id="validar" value="Inicio"></input>
    </form>

    <?php


    $index2++;
    $caducidad = time() + (60 * 60 * 24 * 365);
    setcookie($_SESSION['name'], $index2, $caducidad);


    ?>
    <!DOCTYPE html>
    <html>

    <body>
        <div>

            <?php
            if ($index == 1) {
                if (!isset($_REQUEST['politica-cookies']) && !isset($_COOKIE['politica'])) : ?>
                    <!-- Mensaje de cookies -->
                    <div class="cookies">
                        <h2>Cookies</h2>
                        <p>¿Aceptas nuestras cookies?</p>
                        <a href="?politica-cookies=1">Aceptar</a>
                    </div>
            <?php endif;
            } ?>
        </div>
    </body>

    </html>