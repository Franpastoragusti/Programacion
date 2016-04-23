<?php
$V["Madrid"]= array("nombre"=>"Pedro","edad"=>32,"teléfono"=>919999999);
$V["Barcelona"]= array("nombre"=>"Susana","edad"=>34,"teléfono"=>93000000);
$V["Toledo"]=array("nombre"=>"Sonia","edad"=>42,"teléfono"=>"925-090909");	

foreach ($V as $key => $value) {
	echo "$key-->";
	foreach ($value as $key2 => $value2) {
	echo "$value2 ";
	}
	echo "<br>";
}



?>