<?php
	$num=27542;
	$n=4;
	$pos=1;
	echo "El numero es $num<br>";
	echo "Buscamos la posicion del numero $n<br>";
	$mod=$num%10;
	while ($n!=$mod) {
		$num=(int)($num/10);
		$mod=$num%10;
		$pos++;
	}
	
	echo "la posicion es $pos";
?>