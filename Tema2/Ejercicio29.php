<?php
$V = array(12, 34, 56, 43, 53, 71, 82);
$n=sizeof($V);
$o=0;
$u=0;
$max=0;
$media=0;
$min=$V[0];

for ($i=0; $i<$n ; $i++) { 
	$media=$media+$V[$i];
	
	if ($V[$i]>$max) {
		$max=$V[$i];
	}
	if ($V[$i]<$min) {
		$min=$V[$i];
	}

	if ($V[$i]>65) {
		$o++;
	}elseif ($V[$i]<18) {
		$u++;
	}


}
$media=$media/$n;
echo "la edad maxima $max <br>";
echo "la edad minima $min<br>";
echo "hay $o personas mayores de 65 años<br>";
echo "hay $u personas menores de edad";

?>

