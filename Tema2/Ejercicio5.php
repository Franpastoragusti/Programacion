<html>
<head>
	<title> <h1>Conversion por tipos de casting</h1> </title>
</head>
<body>
	<b>Buscando el mayor:</b><br>
	Los tres números a comparar son: 3, 7 y 9 <br>
	<?php
	$a=3;
	$b=7;
	$c=9;

	if ($a>=$b) {
		if ($a>=$c) {
			echo "El mayor es $a";
		}else{
			echo "El mayor es $c";
		}
	}else{
		if($b>=$c) {
			echo "El mayor es $b";
		}else{
			echo "El mayor es $c";

		}
	}

	?>
</body>
</html>