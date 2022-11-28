<?php

$datos = array(
              array(array(0, 0, 0),
                    array(0, 0, 1),
                    array(0, 0, 2) 
                    ),
              array(array(0, 1, 0),
                    array(0, 1, 1),
                    array(0, 1, 2) 
                    ),
              array(array(0, 2, 0),
                    array(0, 2, 1),
                    array(0, 2, 2) 
                    )
              );

              foreach ($datos as $key => $val) {
                foreach ($val as $key2=>$val2){
                   foreach ($val2 as $key3=>$val3){
              echo "$val3 ";
               
              
              
            }
            echo "<br>";
            }
            echo "<br>";
            }

            
?>