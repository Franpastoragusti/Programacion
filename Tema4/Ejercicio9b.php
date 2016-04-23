<?php

function recorridoforeach($Empresa){
	foreach ($Empresa as $key => $value) {
		echo "$key:$value<br>";
	}
}

function whileeach($Empresa){
	while ($item=each($Empresa)) {
		echo "$item[0]:$item[1]<br>";
	}
}

function recorridoadelante($Empresa){
	do{
	$t=key($Empresa);
	$z=current($Empresa);
	echo "$t:$z<br>";
	}while (next($Empresa));
}


function recorridoatras($Empresa){
	end($Empresa);
	do{
	$t=key($Empresa);
	$z=current($Empresa);
	echo "$t:$z<br>";
	}while (prev($Empresa));
}

$Empresa=array("ventas"=>15, "Internacional"=>3, "Validacion"=>5,"Produccion"=>14,"Diseño"=>4);

recorridoforeach($Empresa);
echo "<br>";
whileeach($Empresa);
echo "<br>";
recorridoadelante($Empresa);
echo "<br>";
recorridoatras($Empresa);
echo "<br>";
?>