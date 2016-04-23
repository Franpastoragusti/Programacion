<html>
<head>
	<title> <h1>Conversion por tipos de casting</h1> </title>
</head>
<body>
	<h1>Conversion por tipos de <i>casting</i></h1>
	<?php
	/*error_reporting(E_ALL); es para ver los errores de todo el codigo
	<i> es cursiva*/
	$pi = "3.1416";
	echo 'El valor de $cadena es:';
	echo "<b>$pi es el valor de pi</b><br><br>";
	$pi1 = (int) $pi;
	echo "El resultado de convertirla en entero es: $pi1 <br>";
	$pi2 = (double) $pi;
	echo "El resultado de convertirla en doble es: $pi2";
	?>
</body>
</html>