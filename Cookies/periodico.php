<?php







?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
<input type="radio" name="periodico" value="A">Noticia Politica
<input type="radio" name="periodico" VALUE="B">Noticia Economica
    <input type="radio" name="periodico" VALUE="C">Noticia deportiva


</form>
    
</body>
</html>