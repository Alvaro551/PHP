<?php

$equipo_futbol = array
 					(
 					array("Rooney","Chicharito","Gigs"),
 					array("Suarez"),
 					array("Torres","Terry","Etoo")
 					);

                    foreach($equipo_futbol as $key => $value) {
foreach($value as $k => $v){
echo "$v <br>";
}
            }
 ?>