<?php

$V1= array(1,2,1,1000);
$V2= array(0,1,1,1000);
$V3= array(1,2,1,2210);
$V4= array(1,1,0,0);
$V5= array(0,2,1,1000);
$H= array($V1,$V2,$V3,$V4,$V5);
$m=0;
$f=0;
$t=0;
$mt=0;
$ft=0;
$sueldosH=0;
$sueldosM=0;
for ($i=0; $i < sizeof($H); $i++) { 
	if ($H[$i][1]==1) {
		$m++;
	}else{
		$f++;
	}

	if ($H[$i][2]==1) {
		$t++;
		if ($H[$i][1]==1) {
			$mt++;
			$sueldosH=$sueldosH+$H[$i][3];
		}elseif ($H[$i][1]==2) {
			$ft++;
			$sueldosM=$sueldosM+$H[$i][3];
		}
	}
}
echo "$mt";
$sueldosM=$sueldosM/$f;
$sueldosH=$sueldosH/$m;
//% hombres en la universidad
$porhomuni=($m/sizeof($H))*100;
echo "el porcentaje de hombres en la universidad es $porhomuni%<br>";
//% mujeres en la universidad
$pormujuni=($f/sizeof($H))*100;
echo "el porcentaje de mujeres en la universidad es $pormujuni%<br>";
//%hombres que trabajan y sueldo medio
$porhomtrab=$mt/sizeof($H)*100;
$sueldosH=$sueldosH/$mt;
echo "el porcentaje de hombres que trabajan es $porhomtrab% y el salario medio de estos es $sueldosH<br>";
//%mujeres que trabajan y sueldo medio
$pormujtrab=$ft/sizeof($H)*100;
$sueldosH=$sueldosH/$ft;
echo "el porcentaje de mujeres que trabajan es $pormujtrab% y el salario medio de estos es $sueldosM<br>";
?>