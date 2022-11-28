<?php

$array = array(
    'k0' => 'Juan',
    'k1' => 'Álvaro',
    'k2' => 'Maite',
    'k3' => 'Álvaro',
    'k4' => 'Juan',
    'k5' => 'Martina');

    for($i=0; $i<count($array); $i++) {
    
        if (current($array) == 'Álvaro'){
        echo key($array).'<br />';
        }
        next($array);
        } 
        
        reset($array);
        echo $array[key($array)];

        ?>
