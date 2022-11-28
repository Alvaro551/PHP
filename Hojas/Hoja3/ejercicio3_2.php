<?php

$a = "hola";
$b = "holaa";
$c = "holaaa";

if (strcmp($b, $a) === 0 and strcmp($b, $c) === 0) {
} elseif (strcmp($b, $a) > 0 and strcmp($b, $c) > 0) {
    echo "b es mayor";
}


if (strcmp($a, $b) === 0 and strcmp($a, $c) === 0) {
} elseif ((strcmp($a, $b) > 0 and strcmp($a, $c) > 0)) {
    echo "a es mayor";
}



if (strcmp($c, $a) === 0 and strcmp($c, $b) === 0) {
} elseif (strcmp($c, $a) > 0 and strcmp($c, $b) > 0) {
    echo "c es mayor";
}
