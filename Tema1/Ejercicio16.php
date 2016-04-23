<html>
<head>
	<title> <h1>Conversion por tipos de casting</h1> </title>
</head>
<body>
	<?php
	$horas=6007;
	$semanas= (int)($horas/(24*7));//Nos da la semanas que quedan 
	echo "$semanas semanas";         //Fuerza una variable mixta al tipo indicado intval/floatval
	$horas1= (int)($horas%(24*7));//Calcula las horas que restan de quitarle las semanas que quedaban
	$dias=(int)($horas1/24);//Divide las horas que sobraban para sacar los dias que sobran
	echo " $dias dias ";
	$horas2= $horas1%24;//Calcula las horas que sobran despues de calcular los dias
	echo " $horas2 horas";
	?>
</body>
</html>