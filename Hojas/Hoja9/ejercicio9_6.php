<?php


$array1 = array(100, 99, 50, 343);
$array2 = array(100, 13, 22, 4);

array_multisort($array1,SORT_ASC,$array2,SORT_DESC);


print_r($array1);
echo "<br>";
print_r($array2);





?>