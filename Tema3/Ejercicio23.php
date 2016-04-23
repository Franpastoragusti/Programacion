<?php
include "libreria23.php";
$V = array(3,4,5,6);
$H = array(2,7,1,9);
$media=0;

sumaVectores($V, $H);

var_dump($V);


sumaParesVector($V, 4);

var_dump($V);

sumaPosicionesParesVector($V,5);
var_dump($V);

mediaPares($V,$media);

mediaImpares($V,$media);

?>