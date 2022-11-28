<?php

$hostname = "localhost";
$usuario = "root";
$password = "";
$basededatos = "empresa";
try {
    //conectar
    $mbd = new PDO('mysql:host=localhost;dbname=empresa', $usuario, $password);

    //comenzar la transaccion
    $mbd->beginTransaction();

    //inserta
    $ins = "insert into antiguosEmpleados(id,nombre) values('','Maria')";
    $trans1 = $mbd->query($ins);

    //borrar
    $del =  "delete from empleadosss where nombre = 'Maria'";
    $trans2 = $mbd->query($del);

    //deteccion errores
    if (!$trans1 || !$trans2) {
        echo "Error: " . print_r($mbd->errorInfo()) . "<br/>";
        $mbd->rollBack();
        echo "transaccion anulada";
    } else {
        $mbd->commit();
    }
    
    
    // $del =  "delete from antiguosEmpleados where nombre = 'Jorge'";
    // // $del =  "delete from empleados where nombre = 'Jorge'";
    // $trans2 = $mbd->query($del);
    
    $mbd = null;
} catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}
