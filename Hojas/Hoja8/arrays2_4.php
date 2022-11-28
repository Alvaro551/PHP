<?php

$alumno=array(
"nombre" => "José",
"apellidos" => "Martínez Roca",
"telefono" => "96 361 66 54",
"direccion" => "C/ Arco del triunfo 13",
"dni" => "22 111 055",
"num_matricula" => null,
"facultad" => "Facultad Informática",
"curso" => "5"
);


end($alumno);

while(current($alumno) || current($alumno) === null) { 

    if(current($alumno) !==null){
        echo current($alumno);
        echo "<br>";
    } 
     prev($alumno);
    
}

echo "<br>";
reset($alumno);

while(key($alumno)){
    echo key($alumno);
    echo "<br>";
    next($alumno);
}

?>