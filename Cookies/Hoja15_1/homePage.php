<?php
if (isset($_COOKIE['usuario'])) {
    $nombre = $_COOKIE['usuario'];
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Document</title>
    </head>

    <body>
        <h1>Bienvenido <?php echo $nombre ?></h1>
    </body>

    </html>
<?php
} else {
    //include 'bloquePreguntarNombre.html';
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Document</title>
    </head>

    <body>
        <h1>Introduce tu nombre</h1>
        <form action="enviar.php" method="POST">
            <input type="text" name="nombre" />
            <input type="submit" />
        </form>
    </body>

    </html>
<?php
}
