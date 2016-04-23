<?php
function recorridoadelante($Empresa){
do{
	$valor=current($Empresa);

	do{
		$valor2=current($valor);
		echo "$valor2";
		if (gettype($valor2)=="string") {
			echo ": ";
		}
	}while (next($valor));
	echo "<br>";
}while (next($Empresa));
}

function recorridoatras($Empresa){
end($Empresa);
do{
	$valor=current($Empresa);

	do{
		$valor2=current($valor);
		echo "$valor2";
		if (gettype($valor2)=="string") {
			echo ": ";
		}
	}while (next($valor));
	echo "<br>";
}while (prev($Empresa));
}


function recorridoforeach($Empresa){
	foreach ($Empresa as $key => $value) {
		foreach ($value as $key2 => $value2) {
			echo "$value2";
			if (gettype($value2)=="string") {
			echo ": ";
			}
		}
		echo "<br>";
	}
}

function whileeach($Empresa){
	while ($item=each($Empresa)){//coje la fila
		$fila=$item[1];
		while ($item2=each($fila)){//cada uno
			echo "$item2[1]:";
		}
		echo "<br>";
	}
}
$Empresa["dep0"]=array("nombre"=>"Ventas","numtrabaja"=>15);
$Empresa["dep1"]=array("nombre"=>"Internacional","numtrabaja"=>3);
$Empresa["dep2"]=array("nombre"=>"Validacion","numtrabaja"=>5);
$Empresa["dep3"]=array("nombre"=>"Produccion","numtrabaja"=>14);
$Empresa["dep4"]=array("nombre"=>"Diseño","numtrabaja"=>4);



recorridoforeach($Empresa);
echo "<br>";
recorridoadelante($Empresa);
echo "<br>";
recorridoatras($Empresa);
echo "<br>";
whileeach($Empresa);
?>