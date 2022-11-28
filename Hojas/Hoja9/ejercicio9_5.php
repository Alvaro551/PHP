<?php


$array1=array('IMG0.png', 'img12.png', 'img10.png', 'img2.png', 'img1.png', 'IMG3.png');

natsort($array1);
echo "\nOrdenación de orden natural\n";
print_r($array1);
echo "<br>";
natcasesort($array1);
echo "\nOrdenación de orden natural (insensible a maý-mín)\n";
print_r($array1);


?>