<?php
	$V = array(1, 23, 37, 8, 4, 3, 21);
	$n= sizeof($V);

	echo "Los numeros mayores de 10 son: ";
	for ($i=0; $i<$n; $i++) { 
		if ($V[$i]>10) {
			echo "$V[$i], ";
		}

	}

	echo "<br>Los numeros menores de 10 son: ";
	for ($i=0; $i<$n; $i++) { 
		if ($V[$i]<10) {
			echo "$V[$i], ";
		}
	}

?>