<html>
<head>
	<title></title>
</head>
	<body>
	<?php
		$suma=0;
		$vectorNum = array(5, 6, 20, 1);
		for ($i=0; $i<=3 ; $i++) { 
			if ($vectorNum[$i]%2==0) {
				$suma=$suma+$vectorNum[$i];
			}
		}
		echo "El valor de la suma es: $suma";
	?>
	</body>
</html>