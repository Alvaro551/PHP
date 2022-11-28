<?php

$array1=array("imagen12.png", "imagen10.png", "imagen2.png", "img1.png");


asort($array1);
echo "Ordenación estándar\n";
print_r($array1);

echo "<br>";

natsort($array1);
echo "\nOrdenación de orden natural\n";
print_r($array1);

echo "<br>";

ksort($array1);
foreach ($array1 as $key => $val) {
    echo "$key = $val\n";
}

?>
