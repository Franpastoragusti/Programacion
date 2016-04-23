<?php
function sumatorio($N){
$op=0;
$sumatorio=0;
for ($i=0; $i<=$N; $i++) { 
	$op=1/(2*exp($i));
	$sumatorio=$sumatorio+$op;
}
echo $sumatorio;
}

sumatorio(5);
?>