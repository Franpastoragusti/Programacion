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
		if ($v[$i]>=7 && $v[$i]<=17) {//fijate en los simbolos>= y <=
			$e++;
			$suma=$suma+$v[$i];
		}
	}
	
	$media= $suma/$e;
	echo "La media es : $media";

	?>
	</body>
</html>