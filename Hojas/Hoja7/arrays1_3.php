<?php

$miFecha = array(
array(
array("13 de enero de 2015", "11 de febrero de 2018"),
array("13 de enero de 2020", "11 de febrero de 2015"),
),
array(
array("3 de agosto de 2017", "1 de octubre de 2016"),
array("3 de agosto de 2013", "1 de octubre de 2019"),
),
array(
array("10 de junio de 2020", "11 de marzo de 2019"),
),
array(
array("22 de marzo de 2020", "28 de mayo de 2019"),
array("22 de marzo de 2019", "28 de mayo de 2018"),
array("22 de marzo de 2018", "28 de mayo de 2017"),
array("22 de marzo de 2017", "28 de mayo de 2016"),
)
);

foreach ($miFecha as  $v){
    foreach ($v as $vv){
       foreach ($vv as $vvv){
  echo "$vvv <br>";
  
}
}
}
?>
