<?php

$array = array(
    'k3' => 'JUAN',
    'k5' => 'Álvaro',
    'k0' => 'Maite',
    'k2' => 'ÁLVARO',
    'k1' => 'Juan',
    'k4' => 'Martina'
);


//a)	Ordenarlo por los valores de mayor a menor sin mantener las asociaciones clave-valor
rsort($array);
foreach ($array as $key => $val) {
    echo " $val";
}

echo "<br>";

// b)	Igual pero manteniendo las asociaciones


asort($array);
foreach ($array as $key => $val) {
    echo "$key = $val\n";
}

echo "<br>";
//c)	Ordenarlo por las claves de menor a mayor
ksort($array);
foreach ($array as $key => $val) {
    echo " $val";
}

echo "<br>";
//d)	Mezcla el array aleatoriamente
shuffle($array);
foreach ($array as $key => $val) {
    echo "$key = $val\n";
}

//e)	Obtén un array con las claves de dos valores seleccionados aleatoriamente.


echo "<br>";
//f)	Ordénalo por los valores de mayor a menor sin diferenciar mayúsculas y minúsculas.
natcasesort($array);
arsort($array);
echo "\nOrdenación de orden natural (insensible a maý-mín)\n";
print_r($array);



