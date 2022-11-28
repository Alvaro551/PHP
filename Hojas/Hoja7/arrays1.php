<HTML>
 <HEAD>
 <TITLE>Trabajando con Matrices</TITLE>
 </HEAD>
 <BODY>
    
<?php

$alumno=array(
    "nombre" => "José",
    "apellidos" => "Martínez Roca",
    "telefono" => "96 361 66 54",
    "direccion"=> "C/ Arco del triunfo 13",
    "dni" => "22 111 055",
    "num_matricula" => "6666",
    "facultad" => "Facultad Informática",
    "curso" => "5" 
    ); 

/*
    $matriz1[]="nombre";
    $matriz1[]="apellidos";
    $matriz1[]="telefono";
    $matriz1[]="direccion";
    $matriz1[]="dni";
    $matriz1[]="num_matricula";
    $matriz1[]="facultad";
    $matriz1[]="curso";


    $matriz2[]="José";
    $matriz2[]="Martínez Roca";
    $matriz2[]="96 361 66 54";
    $matriz2[]="C/ Arco del triunfo 13";
    $matriz2[]="22 111 055";
    $matriz2[]="6666";
    $matriz2[]="Facultad Informática";
    $matriz2[]="5";
    ?>
 <TABLE BORDER="1" CELLPADDING="2" CELLSPACING="2">
 <TR ALIGN="center" BGCOLOR="yellow">
 <TD>índice</TD>
 <?php
 for($i=0;$i<=7;$i++)
 echo "<TD>$i</TD>"; 

 ?>
 <TR ALIGN="center">
 <TD BGCOLOR="yellow">$matriz1</TD>
 <?php
 echo "<TD> $matriz1[0] </TD>";
 echo "<TD> $matriz1[1] </TD>";
 echo "<TD> $matriz1[2] </TD>";
 echo "<TD> $matriz1[3] </TD>";
 echo "<TD> $matriz1[4] </TD>";
 echo "<TD> $matriz1[5] </TD>";
 echo "<TD> $matriz1[6] </TD>";
 echo "<TD> $matriz1[7] </TD>";

 ?>
 </TR>
 <TR ALIGN="center">
 <TD BGCOLOR="yellow">$matriz2</TD>
 <?php
 echo "<TD> $matriz2[0] </TD>";
 echo "<TD> $matriz2[1] </TD>";
 echo "<TD> $matriz2[2] </TD>";
 echo "<TD> $matriz2[3] </TD>";
 echo "<TD> $matriz2[4] </TD>";
 echo "<TD> $matriz2[5] </TD>";
 echo "<TD> $matriz2[6] </TD>";
 echo "<TD> $matriz2[7] </TD>";
 */

foreach ($alumno as $key =>$value){
    
   $matriz1[]=$key;
   $matriz2[]=$value;
}

print_r($matriz1);
echo "<br>";
print_r($matriz2);


 ?>

 </TR>
 </TABLE>
 </BODY>
</HTML> 
