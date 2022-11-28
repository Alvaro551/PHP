<?php

try {
    $mbd = new PDO('mysql:host=localhost;dbname=empresa', "root", "");
   //comenzar transaccion 
   $mbd->beginTransaction();
   $ins ="insert into usuarios (codigo,nombre , clave , rol) values ('','Fernando','1234','1');";
   $resul = $mbd->query($ins);
   //se repite la consulta 
   //falla porque el nombre es unique
   $resul = $mbd->query($ins);
   if(!$result){
    echo "Error: " . print_r(($bd->errorinfo()));
    //deshace el primer cambio 
    $mbd->rollBack();
    echo "<br>Tras ";
   }
    $mbd = null;
} catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}