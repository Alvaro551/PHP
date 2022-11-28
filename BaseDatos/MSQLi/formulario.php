<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
        <input name="nombre" type="text">
        <input type="submit">
    </form>

    <?php
$nombre = $_POST['nombre'];
$server = "localhost";
$user = "root";
$password = "";
$mysqliname = "empresa";
// Conectar
$mysqli = new mysqli($server, $user, $password, $mysqliname);
// Comprobar conexión
if($mysqli->connect_error){
    die("La conexión ha fallado, error número " . $mysqli->connect_errno . ": " . $mysqli->connect_error);
}
    //poner ' or '1='1
$query="SELECT * FROM usuarios where nombre ='$nombre'";
    
$resultado = $mysqli->query($query) or die($mysqli->error . " en la linea" . (__LINE__ - 1));

while ($registro = $resultado->fetch_assoc()) {
    echo "<tr>";
    foreach ($registro as $campo)
        echo "<td>", $campo, "</td>";
    echo "<tr>";
    echo "<br>";
}
    ?>
</body>

</html>