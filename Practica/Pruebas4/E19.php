<?php
$credito=30;
$suma=0;
$pila=array();
array_push($pila, 20, 15, 25, 7);

do{
	$s=0;
	for ($i=0; $i <sizeof($pila) ; $i++) { 
	$s=$s+$pila[$i];
	}
	array_pop($pila);
	echo "Se ha eliminado un articulo por falta de credito<br>";
}while($s>=$credito);
echo "$s";
?>