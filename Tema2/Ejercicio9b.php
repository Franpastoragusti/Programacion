<?php
$suma=0;
$vector = array (3,7,10); //cada posicion sera representada luego por $i

for ($i=0; $i<=2 ; $i++) { //la $i interpreta y da el valor de cada caja del array
	echo $vector[$i] . "<br>";
	$suma=$suma+$vector[$i];
	
}
	echo $suma."<br>";
$media= $suma/3;
echo $media;
?>
