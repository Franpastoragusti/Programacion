<html>
<h1>Estructura de control Bucle </h1>
<?php
$suma=1;

echo "la suma de los 10 primeros numeros enteros es: $suma";
for ($i=2; $i<=10; $i++) { 
	$suma=$suma + $i;
	echo  "+ $i";
}

echo "=$suma";
?>