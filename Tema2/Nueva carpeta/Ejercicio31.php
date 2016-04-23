<?php
$V = array(3, 1, 13, 56, 34, 23, 22, 57);
$max1=$V[0];
$n=sizeof($V);
$max2=$V[0];
$min=$V[0];
$mas20=$V[0];
$menos5=$V[0];
$entre7y15=$V[0];
$pelimas=0;
$pelimas2=0;
$pelimin=0;
for ($i=0; $i<$n ; $i++) { 
	if ($V[$i]>$max1) {
		$pelimas=$i;
		$supmax=$max1;
		$max1=$V[$i];

	}elseif ($V[$i]>$max2) {
		$pelimas2=$i;
		$max2=$supmax;
	}
	if ($V[$i]<$min) {
		$pelimin=$i;
		$min=$V[$i];
	}
	if ($V[$i]>20) {
		$mas20++;
	}
	if ($V[$i]<5) {
		$menos5++;
	}
	if ($V[$i]<15 && $V[$i]>7) {
		$entre7y15++;
	}

}

$pormas20=($mas20/$n)*100;
$pormenos5=($menos5/$n)*100;
$porentre=($entre7y15/$n)*100;
echo "Las dos peliculas mas alquiladas son $pelimas y $pelimas2<br>";
echo "La pelicula menos alquilada es $min<br>";
echo "El porcentaje de peliculas alquiladas mas de 20 veces es $pormas20 %<br>";
echo "El porcentaje de peliculas alquiladas menos de 5 veces es $pormenos5 %<br>";
echo "El porcentaje de peliculas alquiladas entre 7 y 15 veces es $porentre %<br>";

?>
