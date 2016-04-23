<?php
function capicua($numero){//113611
	//defino un array para guardar cada cifra del numero
	$V = array();
 	$e=0;
 	$numero2=$numero;
 	//Saco cuantas cifras tiene el numero
 	while ($numero2>0) {
 		$numero2=(int)($numero2/10);
 		$e++;
 	}


 	//Genero $V guardando los restos 
	for ($i=0; $i<$e; $i++) { 
	$V[$i]=$numero%10;            
	$numero=(int)($numero/10);
	}

	//Comparar las posiciones ultimas con las primeras
	$e=$e-1;
	$u=0;
	$cap=true;
	while ($u<$e) {
		if ($V[$u]==$V[$e]) {
			$u++;
			$e--;
			$cap=true;
		}else{
			$u++;
			$e--;
			$cap=false;
		}
	}
	if ($cap==true) {
		echo "es capicua";
	}else
		echo "no es capicua";
}

capicua(12221);//es capicua de impares
echo "<br>";
capicua(1221);//es capicua de pares
echo "<br>";
capicua(15942);//no es desde el primer digito
echo "<br>";
capicua(25942);//no es desde el segundo digito


?>