<?php


$mysqli = new mysqli("localhost", "root", "", "empresa");
if (mysqli_connect_errno()) {
    echo "Error de conexión a la BD: " . mysqli_connect_error();
    exit();
} else {
    echo "Se ha conectado a la base de datos";
}
echo $mysqli->host_info . "\n";
echo "<pre>";
print_r($mysqli);

/*
$query = "INSERT INTO `usuarios` (`Codigo`, `Nombre`, `Clave`, `Rol`) VALUES
(5, 'Alvaro', '1234', 1)";
$resultado = $mysqli->query($query) or die($mysqli->error . " en la linea" . (__LINE__ - 1));
*/


$query = "Select * from usuarios";
$resultado = $mysqli->query($query) or die($mysqli->error . " en la linea" . (__LINE__ - 1));


$numerousuarios = $resultado->num_rows;
echo "<p>El numero de usuarios es : ", $numerousuarios, ".</p>";


while ($registro = $resultado->fetch_assoc()) {
    echo "<tr>";
    foreach ($registro as $campo)
        echo "<td>", $campo, "</td>";
    echo "<tr>";
    echo "<br>";
}

$query = "DELETE FROM usuarios WHERE nombre LIKE 'Han'";
$resultado = $mysqli->query($query) or die($mysqli->error . " en la linea" . (__LINE__ - 1));

$query ="UPDATE usuarios SET nombre = 399.99 WHERE nombre='Ruben'";
$resultado = $mysqli->query($query) or die($mysqli->error . " en la linea" . (__LINE__ - 1));





