<?php
session_start();
$color = $_SESSION['color'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
</head>

<body style="background-color:<?php echo $color ?>" >
    <h1>Seleccionado <?php echo $color ?></h1>
</body>

</html>