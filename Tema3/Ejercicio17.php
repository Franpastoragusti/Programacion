<?php

function volumen($radio, $altura){

	$volumen=pi()*$radio*$radio*$altura;
	return $volumen;

}

$tmp=volumen(6,6);
echo $tmp;
?>