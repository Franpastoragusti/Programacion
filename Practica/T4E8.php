<?php
$Amigos["Madrid"] = array("Nombre"=>"Pedro","Edad"=>32,"Telefono"=>919999999);
$Amigos["Barcelona"] = array("Nombre"=>"Susana","Edad"=>34,"Telefono"=>930000000);
$Amigos["Toledo"] = array("Nombre"=>"Sonia","Edad"=>42,"Telefono"=>925090909);


foreach ($Amigos as $key => $value) {
	$fila=$value;
	echo "$key:";
	foreach ($fila as $key1 => $value1) {
		echo "$value1 ";
	}
	echo "<br>";
}

?>
