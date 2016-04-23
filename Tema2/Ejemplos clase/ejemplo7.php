<html>
<head>
	<title>Suma de entre 7 y 17</title>
</head>
	<body>
	<?php
	$e=0;
	$v = array(2, 7, 15, 7, 20, 7);
	for ($i=0; $i<=5 ; $i++) { 
		if ($v[$i]==7) {
			$e++;
		}
	}
	
	
	echo "Las veces que se repite es : $e";

	?>
	</body>
</html>