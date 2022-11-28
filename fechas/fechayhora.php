<?php

$timestamp=time();


$fecha = date("d-m-Y H:i:s",$timestamp);

echo "La marca de tiempo en el servidor ahora mismo es : <tt> $timestamp</tt><br/>";
echo "Que corresponde con : <tt> $fecha</tt><br/>";


 //$timestamp1=microtime();

$datos  = getdate();

echo "<table border='1' align='center'>\n";
echo "<caption align='bottom'>Función getdate()</caption>\n";
echo "<tr><th>Clave</th><th>Información</th></tr>\n";
// -luego el contenido
foreach ($datos as $clave => $info)
 echo "<tr><td>$clave</td><td>$info</td></tr>\n";
// -finalmente cer

echo "Ahora: ", date("d-m-Y H:i:s", strtotime("now")), "<br />\n";
echo "8-mayo-01: ", date("d-m-Y", strtotime("8 May 2001")), "<br />\n";
echo "Mañana: ", date("d-m-Y H:i:s", strtotime("+1 day")), "<br />\n";
echo "Dentro de una semana: ",
date("d-m-Y H:i:s", strtotime("+1 week")), "<br />\n";
echo "Otra fecha: ",
date("d-m-Y H:i:s", strtotime("+1 week 2 days 4 hours 2 seconds")), "<br />\n";
echo "Próximo sábado: ",
date("D, d-m-Y", strtotime("next Saturday")), "<br />\n";
echo "Último domingo: ",
date("D, d-m-Y", strtotime("last Sunday")), "<br />\n"; 



?>