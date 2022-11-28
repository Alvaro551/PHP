<?php

$array1=array("imagen12.png", "imagen10.png", "imagen2.png", "img1.png");  


$reversed = array_reverse($array1);
$preserved = array_reverse($array1, true);

print_r($array1);
echo "<br>";
print_r($reversed);
echo "<br>";
print_r($preserved);


?>