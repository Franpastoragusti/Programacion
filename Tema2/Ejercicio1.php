<html>
<head>
	<title></title>
</head>
<body>
	<h1>Buscando el mayor</h1>
	<?php
	$a=3;
	$b=7;
	$c=9;
	echo "los numeros a comparar son $a $b $c <br>";
	if ($a>=$b&&$a>=$c) { //mejor con parentesis separando las operaciones
		echo "$a es el mayor";
	}
	if ($b>=$c&&$b>=$a) {  //los if abren corchetes despue de la condicion y cierran tras la serie de sentencias
		echo "$b es el mayor";
	}
	if ($c>=$a&&$c>=$b) {
		echo "$c es el mayor";
	}
	?>
</body>
</html>