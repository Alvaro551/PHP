<HTML>
 <HEAD>
 <TITLE>Trabajando con Matrices</TITLE>
 </HEAD>
 <BODY>
<?php

$tabla=array
 (
 "colores fuertes" =>array
 (
 "rojo"=>"FF00000",
 "verde"=>"00FF00",
 "azul"=>"0000FF"
 ),
 "colores suaves" =>array
 (
 "rosa"=>"FE9ABC",
 "amarillo"=>"FDF189",
 "malva"=>"BC8F8F"
 )
 ); 
 ?>
<TABLE BORDER="1" CELLPADDING="2" CELLSPACING="2">
 <?php
 foreach ($tabla as $k =>$v){
 echo"<tr>";
 echo "<TD>". $k . "</TD>";
 foreach($v as $kk=>$vv){

 echo "<TD>". $kk . ": ".$vv."</TD>";
 
 }
 }
 echo "</tr>";
 ?>
 </TABLE>
 </BODY>
</HTML>