<?php
include "Milibreria.php";
$V=array(3,4,5,6,7);
$t=suma($V);
echo "La suma es $t<br>";

$l=media($V);
echo "La media es $l<br>";

$b=sumaPares($V);
echo "La suma de los numero pares es $b<br>";

$x=mediaPares($V);
echo "La media de los numeros pares es $x<br>";

$z=mediaImpares($V);
echo "La media de los numeros imares es$z<br>";

$s=sumaPosiciones(($V), "impares");
echo "La suma de las posiciones impares es $s<br>";

$s=sumaPosiciones(($V), "pares");
echo "La suma de las posiciones pares es $s<br>";

$y=contadorMayores(($V),3);
echo "Hay $y numero mayores que el valor indicado <br>";

$r=contadorMenores(($V),5);
echo "Hay $r numeros menores que el valor indicado <br>";

$zz=maximo($V);
echo "El maximo es $zz<br>";

$ll=minimo($V);
echo "El minimo es $ll<br>";

?>