<?php
function multiplicacionRusa($a, $b){
$producto=$b;
echo "a.......b.......producto<br>";
while ($a>0) {
	echo "$a.....$b......$producto<br>";
	$a=(int)($a/2);
	$b=$b*2;
	if ($a%2!=0) {
		$producto=$producto+$b;
	}
}
}
$a=543;
$b=12;


multiplicacionRusa($a,$b);
echo "El producto de $a*$b=".$a*$b;





?>