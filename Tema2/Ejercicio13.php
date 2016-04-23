<html>
<head>
	<title></title>
</head>
	<body>
	<?php
		$V = array(7, 8, 9, 1, 20);
		$max = $V[0];
		$min = $V[0];
		for ($i=0; $i<=4 ; $i++) { 
			if ($V[$i]>$max) {//el valor de vector es la $i lo compara con max
			$max=$V[$i]; //max toma el valor del vecto
			}
			if ($V[$i]<$min) {
			$min=$V[$i];
			}
		}
		echo "El maximo es $max <br>";
		echo "El minimo es $min";
	?>
	</body>
</html>