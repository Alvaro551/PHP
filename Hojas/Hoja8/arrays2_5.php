<?php

$ciudades[5]="Madrid";
$ciudades[7]="Oviedo";
$ciudades[]="Cáceres";
$ciudades[]="Alicante";
$ciudades[]="Almería";
$ciudades[]="Zaragoza";

end($ciudades);

while(current($ciudades) || current($ciudades) === null) { 

    if(current($ciudades) !==null){
        echo current($ciudades);
        echo "<br>";
    } 
     prev($ciudades);
    
}

echo "<br>";
reset($ciudades);

while(key($ciudades)){
    echo key($ciudades);
    echo "<br>";
    next($ciudades);
}


?>
