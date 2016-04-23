<?php
	$V=array(3,14,17,53,1,8,24,16,33,32);
	$n=sizeof($V);
	$max1=-1;
	$max2=-1;
	$cm1=-1;
	$min=$V[0];
	$int1=0;
	$int2=0;
	$int3=0;
	$media=0;
	$cmin=0;
	for($i=0;$i<$n;$i++){
		$media=$media+$V[$i];
		if($V[$i]>$max1){
			$max2=$max1;
			$cm2=$cm1;
			$max1=$V[$i];
			$cm1=$i;
		}elseif($V[$i]>$max2){
			$max2=$V[$i];
			$cm2=$i;
		}elseif($V[$i]<$min){
			$min=$V[$i];
			$cmin=$i;
		}
		if($V[$i]>20){
			$int1++;
		}elseif($V[$i]<5){
			$int2++;
		}elseif($V[$i]<=15&&$V[$i]>=7){
			$int3++;
		}
	}
	$media=$media/$n;
	$int1=($int1/$n)*100;
	$int2=($int2/$n)*100;
	$int3=($int3/$n)*100;
	echo "El código de las dos películas más alquiladas son las que tienen el codigo $cm1 y cod.$cm2  </br>";
	echo "El código de la película menos alquilada es la que tiene el codigo $cmin</br>";
	echo "El porcentaje de películas alquiladas más de 20 veces es del $int1 %</br>";
	echo "El porcentaje de películas alquiladas menos de 5 veces es del $int2 %</br>";
	echo "El porcentaje de películas alquiladas entre 7 y 15 veces es del $int3 %</br>";
	echo "La media del número de veces que se alquila cada película es de $media</br>";
?>	