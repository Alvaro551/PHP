<?php


$numero= 5;
echo 'El factorial del numero: '.$numero . "<br>";

function calculadora($operacion ,$num){
 $resultado = $operacion($num);
        return $resultado;

}


function factorial($numero){

if($numero<0){
 
	echo "No valido";
    return false;

}elseif(gettype($numero)!="integer"){
    echo "No valido";
    return false;
} else{
    $total=1;
	for ( $i = $numero ; $i >= 1 ; $i--){
		$total=$total*$i;
	}
	return $total;
}

}

$resultado = calculadora("factorial",$numero);
if($resultado!=false){
echo 'Da como resultado: '.$resultado;
}

function manejadorErrores($errno,$str,$file,$line){
    echo "Ocurrio el error: $errno <br>";
}
set_error_handler("manejadorErrores");
$a=$b;

?> 