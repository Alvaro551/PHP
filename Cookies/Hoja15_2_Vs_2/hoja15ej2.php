
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body<?php if (isset($_COOKIE['periodicos']))?>>
    <form method="POST" action="validar.php">
        <input type="radio" name="periodico" value="1">Noticia política
        <input type="radio" name="periodico" value="2">Noticia económica
        <input type="radio" name="periodico" value="3">Noticia deportiva
        <input type="submit">
    </form>
    <h1><?php echo ($_COOKIE['periodicos'])?>
</body>

</html>