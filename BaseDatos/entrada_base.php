<?php

try {
    $mbd = new PDO('mysql:host=localhost;dbname=empresa', "root", "");
    foreach ($mbd->query('SELECT * from usuarios') as $fila) {
        print_r($fila);
        echo "<br>";
    }
    //insertar
    /*
        $ins ="insert into usuarios (codigo,nombre , clave , rol) values ('','C','','');";
        $resul = $mbd->query($ins);
        if($resul){
            echo "insert correcto <br>";
            echo "Filas insertadas: " . $resul->rowCount() . "<br>";
           
           
          
        }else print_r($mbd -> errorinfo());
        echo "Codigo de la fila insertada" . $mbd->lastInsertId() . "<br>";
         $guardado =  $mbd->lastInsertId();
         */
    //actualizar
    $upd = "update usuarios set rol = 2 ,  clave = '1234' where codigo = $guardado ;";
    $resul = $mbd->query($upd);
    //comprobar errores
    if ($resul) {
        echo "update correcto";
        echo "Filas actualizadas" . $resul->rowCount() . "<br>";
    } else print_r($mbd->errorinfo());
    $mbd = null;
    
    //borrar
    $del = "delte form usuarios where nombre nombre = 'Luisa'";
    $resul = $bd->query($del);
    //comprobar errores
    if($resul){
        echo "delete correcot <br>";
        echo "filas borradas: " . $resul->rowCount() . "<br>";
    }else print_r($bd->errorinfo());
} catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}


