<html>
<head>
	<title></title>
</head>
<body>
	<?php
	$hora=date("H");

	if ($hora<=10) {
		echo "Buenos días por la mañana!";

		}elseif ($hora<20) {
			echo "Buenos dias!";

			}else {
				echo "Buenas noches!"; 
						}

	?>
</body>
</html>