<?php

if ($_REQUEST['periodico'] == 1)
    setcookie("periodicos", "Noticia política", time() + 60 * 60 * 24 * 365,"/");
elseif ($_REQUEST['periodico'] == 2)
    setcookie("periodicos", "Noticia económica", time() + 60 * 60 * 24 * 365,"/");
elseif ($_REQUEST['periodico'] == 3)
    setcookie("periodicos", "Noticia deportiva", time() + 60 * 60 * 24 * 365,"/");
  
?>
<html>

<head>
    <title>Problema</title>
</head>

<body>
<h1>  </h1>
    <br>
    <h1><?php echo ($_COOKIE['periodicos'])?>
    <a href="hoja15ej2.php">Ir a la otra página</a>
</body>

</html>