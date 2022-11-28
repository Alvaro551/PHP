<?php

$num=5;
$actorial=1;
$w=$num - 1;

while($w>=1){
    echo $actorial ."x". $w. "=";

    $actorial=$actorial * $w;
    echo $w--;

}
echo $actorial;

?>