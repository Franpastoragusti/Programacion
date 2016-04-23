<?php
function listar1($V){
	
	echo "<ol>";
	foreach ($V as $key => $value) {
		echo "<li>$key($value)</li><br>";
	}
	echo "</ol><br><br>";
}


$V=array("Albania"=>"Tirana",
		"Alemania"=>"Berlín", 
		"Andorra"=>"Andorra la Vieja",
		"Austria"=>"Viena",
		"Bélgica"=>"Bruselas",
		"Bielorrusia"=>"Minsk",
		"Bosnia y Herzegovina"=>"Sarajevo",
		"Bulgaria"=>"Sofía",
		"Ciudad del Vaticano"=>"Ciudad del Vaticano",
		"Croacia"=>"Zagreb",
		"Dinamarca"=>"Copenhague",
		"Eslovaquia"=>"Bratislava",
		"Eslovenia"=>"Liubliana",
		"España"=>"Madrid",
		"Estonia"=>"Tallin",
		"Finlandia"=>"Helsinki");

listar1($V);

listar1(array_flip($V));

?>