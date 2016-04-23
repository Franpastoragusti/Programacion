<?php

function minim(){
	$H=func_get_args();
	$i=0;
	$min=1000;
	$b=0;
	for ($i=0; $i<func_num_args(); $i++) { 
		if ($H[$i]<$min) {
			$min=$H[$i];
		}
	}
	if ($min>=0) {
		$b="true";
		echo "El numero menor del array es $min, y es $b porque es positivo";
	}else{
		$b="false";
		echo "El numero menor del array es $min, y es $b porque es negativo";
	}
	return $min;
}

$r=minim(4,1,-4,2,45);
echo $r;
?>
