<?php
function v($n1,$n2,$n3){
	$max=0;
	if ($n1>$n2) {
		$max=$n1;
		}elseif ($n2>$n3) {
			$max=$n2;
			}else{
				$max=$n3;
			}
	return $max;
}
$maxi= v(7,8,10);
echo "El mayor de los numeros es ".$maxi;
?> 