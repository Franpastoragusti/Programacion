<?php
//Suma
function suma($V){

	$Suma=0;
	for ($i=0; $i<sizeof($V); $i++) { 
		$Suma=$Suma+$V[$i];
	}
	return $Suma;
}

function media($V){
	$media=0;
	for ($i=0; $i<sizeof($V); $i++) { 
		$media=$media+$V[$i];
	}
	$media=$media/sizeof($V);
	return $media;
}


function sumaPares($V){
	$Suma=0;
	for ($i=0; $i<sizeof($V); $i++){ 
		if ($V[$i]%2==0) {
			$Suma=$Suma+$V[$i];
		}
	}
	return $Suma;
}


function mediaPares($V){
	$media=0;
	$e=0;
	for ($i=0; $i<sizeof($V); $i++){ 
		if ($V[$i]%2==0) {
			$media=$media+$V[$i];
			$e++;
		}
	}
	$media=$media/$e;
	return $media;
}


function mediaImpares($V){
	$media=0;
	$e=0;
	for ($i=0; $i<sizeof($V); $i++){ 
		if ($V[$i]%2!=0) {
			$media=$media+$V[$i];
			$e++;
		}
	}
	$media=$media/$e;
	return $media;
}

function sumaPosiciones($V,$pos){

	$Suma=0;
	for ($i=0; $i<sizeof($V); $i++){ 
		switch ($pos) {
			case 'pares':
				if ($V[$i]%2==0) {
					$Suma=$Suma+$V[$i];
				}
			break;
			
			case 'impares':
				if ($V[$i]%2!=0) {
					$Suma=$Suma+$V[$i];
				}
			break;
		}
	}
	return $Suma;
}

function contadorMayores($V,$mayor){
	$e=0;
	for ($i=0; $i<sizeof($V); $i++) { 
		if ($V[$i]>$mayor){ 
			$e++;              
		}
	}
	return $e;
}

function contadorMenores($V,$menor){
	$e=0;
	for ($i=0; $i<sizeof($V); $i++) { 
		if ($V[$i]<$menor){ 
			$e++;              
		}
	}
	return $e;
}

function maximo($V){
	$max=0;
	for ($i=0; $i<sizeof($V); $i++) { 
		if ($V[$i]>$max) {
			$max=$V[$i];
		}
	}
	return $max;

}

function minimo($V){
	$min=10000;
	for ($i=0; $i<sizeof($V); $i++) { 
		if ($V[$i]<$min) {
			$min=$V[$i];
		}
	}
	return $min;

}

?>