<?php
$numero=3;
$indice=3;
function elevado($numero, $indice){
	$resultado=$numero;
	for ($i=1; $i<$indice; $i++) { 
		$resultado=$resultado*$numero;
	}
	$numero	=$resultado;	
	return $numero;	
}

$t=elevado($numero,$indice);
echo $t;

?>