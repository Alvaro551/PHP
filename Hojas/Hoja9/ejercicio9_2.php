<?php


$ciudades[5]="Madrid";
$ciudades[7]="Oviedo";
$ciudades[]="Cáceres";
$ciudades[]="ALICANTE";
$ciudades[]="Almería";
$ciudades[]="Zaragoza";


//a)	Ordenarlo por los valores de mayor a menor sin mantener las asociaciones clave-valor
rsort($ciudades);
foreach ($ciudades as $key => $val) {
    echo " $val";
}

echo "<br>";
// b)	Igual pero manteniendo las asociaciones
asort($ciudades);
foreach ($ciudades as $key => $val) {
    echo "$key = $val\n";
}

echo "<br>";
//c)	Ordenarlo por las claves de menor a mayor
ksort($ciudades);
foreach ($ciudades as $key => $val) {
    echo " $val";
}

echo "<br>";
//d)	Mezcla el array aleatoriamente
shuffle($ciudades);
foreach ($ciudades as $key => $val) {
    echo "$key = $val\n";
}

//e)	Obtén un array con las claves de dos valores seleccionados aleatoriamente.

$claves_aleatorias = array_rand($ciudades, 2);
echo $ciudades[$claves_aleatorias[5]] . "\n";
echo $ciudades[$claves_aleatorias[7]] . "\n";

echo "<br>";
//f)	Ordénalo por los valores de mayor a menor sin diferenciar mayúsculas y minúsculas.
natcasesort($ciudades);
arsort($ciudades);
echo "\nOrdenación de orden natural (insensible a maý-mín)\n";
print_r($ciudades);



