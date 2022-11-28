<?php
if (isset($_COOKIE['periodico'])) {
  $periodico = $_COOKIE['periodico'];

  if (isset($_COOKIE['periodico'])) {
    if ($_COOKIE['periodico'] == "Noticia política") {
      header("Location: politica.php");
      echo "Hola";
    } else {
      echo "Adios";
    }
    if ($_COOKIE['periodico'] == "Noticia económica") {
    header('Location: economica.php');
      echo "Hola2";
    } else {
      echo "Adios2";
    }
    if ($_COOKIE['periodico'] == "Noticia deportiva") {
      header('Location: deporte.php');
      echo "Hola3";
    } else {
      echo "Adios3";
    }
  }

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
    
    <?php

    ?>
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
    <h1>Introduce el periodico</h1>
    <form action="enviar.php" method="POST">
      <input type="radio" name="periodico" value="Noticia política">Noticia política
      <input type="radio" name="periodico" value="Noticia económica">Noticia económica
      <input type="radio" name="periodico" value="Noticia deportiva">Noticia deportiva
      <input type="submit" />
    </form>
  </body>

  </html>
<?php
}