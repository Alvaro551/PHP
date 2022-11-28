<?php

// ej: http://localhost/webservice/webservice.php?numero=Pepe&potencia=75&estatura=183


//definimos con header el tipo del documento (JSON)
header("Content-Type:application/json");

//recojemos variables
$numero = $_GET['numero'];
$potencia = $_GET['potencia'];


//validamos varaiables vacias
if (!empty($numero) && !empty($potencia)) {


   
    $imc = $numero ** $potencia;



    //entregamos respuesta 
    respuesta_entregada(200, "$numero tu potencia es igual a  $imc", $imc);
} else {
    //entregamos respuesta 
    //deliver_response(200, "numero, potencia o estatura no validos", null);
}

//funcion que crea la respuesta, con estado, mensaje de estados y datos
function respuesta_entregada($estado, $mensaje_estado, $datos)
{
    //cabecera respuesta
    header("HTTP/1.1 $estado $mensaje_estado");

    //rellenamos array con estado, mensaje y datos
    $respuesta['estado'] = $estado;
    $respuesta['mensaje_estado'] = $mensaje_estado;
    $respuesta['datos'] = $datos;

    //codificamos el json
    $respuesta_json = json_encode($respuesta);

    //pintamos el contenido del json
    echo $respuesta_json;
}
