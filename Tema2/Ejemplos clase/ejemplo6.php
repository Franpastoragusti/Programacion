<html>
<head>
	<title>Suma de entre 7 y 17</title>
</head>
	<body>
	<?php
	$suma=0;
	$e=0;
	$v = array(2, 7, 15, 3, 20, 6);
	for ($i=0; $i<=5 ; $i++) { 
		if ($i%2==0){
			$suma=$suma+$v[$i];
		}		
	}
	

	echo "La suma es : $suma";

	?>
	</body>
</html>