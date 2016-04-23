<html>
<head>
	<title></title>
</head>
	<body>
	<?php
		$vectorNum= array(5, 6, 20, 1);
		$media = 0;
		$suma = 0;
		for ($i=0; $i <=3 ; $i++) { 
			$suma=$suma+$vectorNum[$i];
		}
		$media=$suma;
		
		$media=$media/sizeof($vectorNum);

		echo "El valor de la media es $media";
	
	?>
	</body>
</html>