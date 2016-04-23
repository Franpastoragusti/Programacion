<?php

$V = array(1,2,3,44,5,6,7,8,9);
$e=1;
$u=0;
for ($i=0; $i < sizeof($V)-1; $i++) { 
	$u=$i+1;
	if ($V[$i]<$V[$u]) {
		$e++;
	}
}
if ($e==sizeof($V)) {
	echo "El array está ordenado";
}else{
	echo "El array no está ordenado";
}
?>