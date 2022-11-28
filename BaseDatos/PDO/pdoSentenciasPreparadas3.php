<?php

$hostname = "localhost";
$usuario = "root";
$password = "";
$basededatos = "empresa";
try {
    $mbd = new PDO('mysql:host=localhost;dbname=empresa', $usuario, $password);
    echo "Conectado\n";
} catch (Exception $e) {
    die("No se pudo conectar: " . $e->getMessage());
}

try {
    $sql = 'SELECT nombre, clave, rol from usuarios';
    $usuarios = $mbd->query($sql);

    echo "Numero de usuarios: " . $usuarios->rowCount() . "<br/>";

    foreach ($usuarios as $usu) {
        print "Nombre : " . $usu['nombre'];
        print "  |  Clave : " . $usu['clave'];
        print "  |  Rol : " . $usu['rol'] . "<br/>";
    }

    echo "<br/><br/>";

    // //consulta preparada version uno
    // $preparada = $mbd->prepare("INSERT INTO usuarios (nombre, clave) VALUES (:name, :value)");
    // $preparada->bindParam(':name', $nombre);
    // $preparada->bindParam(':value', $valor);

    // // insertar una fila
    // $nombre = 'Carmela';
    // $valor = 'asdlqwe';

    // $preparada->execute();


    //consulta preparada version dos
    $preparada = $mbd->prepare("INSERT INTO usuarios (nombre, clave) VALUES (?, ?)");
    $preparada->bindParam(1, $nombre);
    $preparada->bindParam(2, $valor);

    // insertar una fila
    $nombre = 'Juancho';
    $valor = '88348348348';

    $preparada->execute();
} catch (Exception $e) {
    echo "Fallo: " . $e->getMessage();
}
