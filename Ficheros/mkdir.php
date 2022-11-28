<?php
// Estructura de carpeta deseada
$estructura = './depth1/depth2/depth3/';

// Para crear una estructura anidada se debe especificar el parámetro $recursive
// en mkdir().
 

if(!mkdir($estructura, 0, true))
{
    die('Fallo al crear carpetas...');
}

// ...
?>