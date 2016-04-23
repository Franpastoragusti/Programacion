<?php
$vectorCompras = array(30, 45, 20, 50, 15);
$limiteCredito = 50;
$sumaCompras = 0;
$n = sizeof($vectorCompras);
$i=4;

for ($e=0; $e<5 ; $e++) { 
	$sumaCompras=$sumaCompras+$vectorCompras[$e];
}
echo "Ha comprado $sumaCompras<br>";
echo "Tiene un limite de credito de $limiteCredito<br>";

do{
	
	$sumaCompras=$sumaCompras-$vectorCompras[$i];
	echo "Has excedido el limite de tu credito, el ultimo item de tu compra va a ser eliminado ($vectorCompras[$i])<br>";
	echo "Tu total de compras asciende a $sumaCompras<br>";
	$i--;
	} while ($sumaCompras>$limiteCredito);


?>