<html>
<head>
	<title></title>
</head>
	<body>
	<?php
		echo "<TABLE BORDER='1' ALING='CENTER'";
		for ($i=1; $i<=10 ; $i++) { 
			echo "<TR ALING='CENTER'>";
			for ($e=1; $e<=10 ; $e++) { 
			echo "<TD>".($i*$e)."</TD>";

			}	
		}
//e = fila
//i = columna	
	?>
	</body>
</html>