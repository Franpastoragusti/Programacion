<?php
function limpia_espacios($cadena){
	$cadena = str_replace(' ', '', $cadena);
	return $cadena;
}
function decision($cadena,$Cadena){
	$palindromo=strcasecmp($cadena,strrev($cadena));
	if ($palindromo==0) {
		echo "la cadena '$Cadena' es un palindromo<br>";
		return $palindromo;
	}else{
		echo "la cadena '$Cadena' no es un palindromo<br>";
		return $palindromo;
	}
}

$Cadena="Isaac no ronca asi";
$cadena=limpia_espacios($Cadena);
$palindromo=decision($cadena,$Cadena);
$Cadena1="Lavan esa base naval";
$cadena=limpia_espacios($Cadena1);
$palindromo=decision($cadena,$Cadena1);
$Cadena2="No traces en ese carton";
$cadena=limpia_espacios($Cadena2);
$palindromo=decision($cadena,$Cadena2);
$Cadena3="¿Sera lodo o dolares?";
$cadena=limpia_espacios($Cadena3);
$palindromo=decision($cadena,$Cadena3);
$Cadena4="Logra Casillas alli sacar gol";



?>