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

    //consulta preparada, parametros por orden
    $preparada = $mbd->prepare("select nombre from usuarios where rol = ?");
    $preparada->execute(array(1));
    echo "Usuarios con rol 1: " . $preparada->rowCount() . "<br/>";
    foreach ($preparada as $usu) {
        print "Nombre : " . $usu['nombre'] . "<br/>";
    }

    echo "<br/><br/>";

    //consulta preparada, parametros por orden
    $preparada = $mbd->prepare("select nombre from usuarios where rol = :rol");
    $preparada->execute(array(':rol' => 0));
    echo "Usuarios con rol 0: " . $preparada->rowCount() . "<br/>";
    foreach ($preparada as $usu) {
        print "Nombre : " . $usu['nombre'] . "<br/>";
    }
} catch (Exception $e) {
    $mbd->rollBack();
    echo "Fallo: " . $e->getMessage();
}
