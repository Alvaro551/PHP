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
    //comenzar la transaccion
    $mbd->beginTransaction();
    //inserta
    $ins = "insert into usuarios(codigo,nombre,clave,rol) values('','Carlitos','','')";
    $resul = $mbd->query($ins);
    //se repite la consulta
    // falla porque el nombre es unique
    // $resul = $mbd->query($ins);
    // if (!$resul) {
    //     echo "Error: " . print_r($mbd->errorInfo()) . "<br/>";
    //     //desace el primer cambio
    //     $mbd->rollBack();
    //     echo "transaccion anulada";
    // } else {
    //     $mbd->commit();
    // }
    $mbd = null;
} catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}
