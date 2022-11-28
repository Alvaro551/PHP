<!DOCTYPE html>
<html lang="es">
<head>
 <meta charset="utf-8">
  <title>HTML</title>
  <meta name="viewport" content="width=device-width , initial-scale=1.0">
  <link rel="stylesheet" href="estilo.css">
  </head>
  <body>
 
  <?php
/*
$arr1 = [
    0=>444,
    1=>222,
    2=>333,
];

print_r($arr1);
echo "<br>" . "pos 0 : " . $arr1[0]. "<br>";
$arr1[0]=555;
print_r($arr1);
echo "<br>";
$arr2 = [
    "1111A" => "Juan Vera Ochoa",
    "1112A" => "Maria Mesa Cabeza",
    "1113A" => "Ana Puertas Peral",
    
];

$arr2["1113A"] = "Ana Puertas Segundo";

print_r($arr2);




$matriz1 = array("cougar","ford",null,"2.500","V6",172);
?>

<TABLE BORDER="1" CELLPADING="2" CELLPADING="2">
    <TR ALIGN="center" BGCOLOR="yellow">
        <TD>Indice</TD>
        <?php

       for($i=0,$i<6,$i++);

        ?>

*/

$pais=array
(
"espana" =>array
(
"nombre"=>"España",
"lengua"=>"Castellano",
"moneda"=>"Peseta"
),
"francia" => array
(
    "nombre"=>"Francia",
    "lengua"=>"Frances",
    "moneda"=>"Franco",
)
);

?>

<TABLE BORDER="1" CELLPADING="2" CELLPADING="2">s

<?php

foreach ($pais as $key =>$value){
    echo "<tr>";
    foreach($value as $kk=>$vv){
        echo "<TD>" ,$vv."</TD>";
    }
    
}
echo "</tr>"

?>
 </body>
</html>