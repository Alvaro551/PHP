<?php

$hostname = "localhost";
$usuario = "root";
$password = "";
$basededatos = "empresa";
try {
    //conectar
    $mbd = new PDO('mysql:host=localhost;dbname=empresa', $usuario, $password);
    echo "<pre>";
    foreach ($mbd->query('SELECT * from usuarios') as $fila) {
        //print_r($fila);
    }

    // //inserta
    // $ins = "insert into usuarios(codigo,nombre,clave,rol) values('','Carla','','')";
    // $resul = $mbd->query($ins);
    // //comprobar errores
    // if ($resul) {
    //     echo "insert correcto <br/>";
    //     echo "Filas insertadas: " . $resul->rowCount() . "<br/>";
    // } else {
    //     print_r($mbd->errorInfo());
    // }
    // //para los autoincrementos
    // echo "codigo de la fila insertada: " . $mbd->lastInsertId() . "<br/>";
    // // actualizar

    // //echo $mbd->lastInsertId();
    // $upd = "update usuarios set clave = 5555 where codigo = " . $mbd->lastInsertId() . " ";
    // $resul = $mbd->query($upd);

    // //actualizar
    // $mbd->query("UPDATE usuarios set rol = 1 where rol = 2");

    //borrar
    $del = "delete from usuarios where rol = 0";
    $resul = $mbd->query($del);
    if ($resul) {
        echo "delete correcto<br/>";
        echo "filas borradas " . $resul->rowCount() . "<br/>";
    } else {
        print_r($mbd->errorInfo());
    }

    $mbd = null;
} catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}
