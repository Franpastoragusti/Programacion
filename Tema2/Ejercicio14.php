<?php
$V = array(1,2,4,6,7,-9,8);
$i=0;
$suma=0;
while ($V[$i]>=0) {
	echo $V[$i];
	$suma=$suma+$V[$i];
	$i++;
}

echo "<br>La suma de los numeros que entran es: $suma";
?>