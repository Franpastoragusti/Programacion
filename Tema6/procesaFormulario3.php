<?php
function limpia_espacios($cadena){
	$cadena = str_replace(' ', '', $cadena);
	return $cadena;
}
function decision($cadena,$Cadena){
	$palindromo=strcasecmp($cadena,strrev($cadena));
	if ($palindromo==true) {
		echo 'la cadena $Cadena es un palindromo<br>';
		return $palindromo;
	}else{
		echo 'la cadena $Cadena no es un palindromo<br>';
		return $palindromo;
	}
}

$cadena=limpia_espacios($_POST);
$tocho=decision($cadena,$_POST);



?>