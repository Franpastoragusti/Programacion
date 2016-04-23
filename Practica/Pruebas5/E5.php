<?php

$cadena1="Isaac no ronca así";
$cadena2="Lavat esa base naval";
$cadena3="No traces en ese cartón";
$cadena4="¿Será lodo o dólares?";

function eliminarespacios($V){
	$cadenaL=str_replace(" ", "", $V);
	return $cadenaL;
}

function comparar($V){

	$C=strrev($V);
	$comparada=strcasecmp($V,$C);
	if ($comparada==0) {
		echo "Las cadenas son capicua";
		
	}else{
		echo "Las cadenas no son capicua";
	}
}




$cadenanueva=eliminarespacios($cadena2);
comparar($cadenanueva)
?>