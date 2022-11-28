	
<?php

$array = array(
       array("10", 11, 100, 100, "a"),
       array(   1,  2, "2",   3,   1),
      );

      
echo in_array(100,$array);
echo in_array('a',$array);

if (in_array("10", $array)) {
    echo "Se encontró '100' con comprobación estricta\n";
}

if (in_array(100, $array, true)) {
    echo "Se encontró 1.13 con comprobación estricta\n";
}

?>
