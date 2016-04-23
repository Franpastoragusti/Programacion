<?php
$salarios = array(1500, 1000, 1500, 750);
$dnis = array(13423423, 34134354, 45234523, 23452345);

$max=0;
$min=0;
function salarioMedio($salarios){
	$media=0;
	for ($i=0; $i<sizeof($salarios); $i++) { 
		$media=$media+$salarios[$i];
	}
	$media=$media/sizeof($salarios);
	echo "El salario medio es $media<br>";
}

function infoSalarioMaxMin($salarios,&$min,&$max){
	$min=$salarios[0];
	for ($i=0; $i<sizeof($salarios); $i++) { 
		if ($salarios[$i]<$min) {				
			$min=$salarios[$i];
		}
		if ($salarios[$i]>$max) {
			$max=$salarios[$i];
		}
	}
	echo "El sueldo maximo es $max y el minimo es $min <br>";

}

function incrementaSalarios(&$salarios, $incremento){
	for ($i=0; $i<sizeof($salarios); $i++) { 
		$salarios[$i]=$salarios[$i]+$incremento;
	}
	var_dump($salarios);
}

function listaDniySalario($dnis,$salarios){
	$o=1;
	for ($i=0; $i<sizeof($dnis); $i++) { 
		echo "$o.". $dnis[$i]." le corresponde ".$salarios[$i]. "<br>";
		$o++;
	}

}
	


salariomedio($salarios);
infoSalarioMaxMin($salarios,$max,$min);
incrementaSalarios($salarios,400);
listaDniySalario($dnis,$salarios);


?>
