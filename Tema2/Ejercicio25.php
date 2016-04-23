<?php
	$num=27542;
	$posicion=4;
	$i=0;
	echo "El numero es $num<br>";
	echo "Buscamos la posicion numero $posicion<br>";
	while ($i<$posicion-1) {
		$num=(int)($num/10);
		$i++;

	}
	$num=$num%10;
	echo "la cifra es $num";
?>