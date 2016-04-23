<?php

function elevado(&$numero, &$indice){
	$resultado=$numero;
	for ($i=1; $i<$indice; $i++) { 
		$resultado=$resultado*$numero;
	}
	$numero	=$resultado;	
	return $numero;	
}
$numero = 3;
$indice = 2;



elevado($numero,$indice);
echo "El resultado de la potencia es $numero"; 
 
?>
