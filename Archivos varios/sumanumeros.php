<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
</head>
<style>
   
body {
    background-color: paleturquoise;
}
</style>

<body>
 
    <?php
    
    $num1 = $_GET["num1"];
    $num2 = $_GET["num2"];


    if (is_numeric($num1) and is_numeric($num2)) {
        $resultado = $num1 + $num2;
        echo $num1 . " + " . $num2 . " = " . $resultado;

    } else {
        echo "Parámetros no válidos";
    };


    ?>
</body>

</html>