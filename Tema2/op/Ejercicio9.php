<?php
$dia= 23;
$mes= 6;
$año= 2015;
$diatotal=365;
$diaresto= 0;
echo "Faltan: ";

if ($año=) {
	# code...
}


switch ($mes) {
	case 1:
		if ($mes=2) {
			$diaresto=($diatotal-1)-$dia;
			echo "Quedan $diaresto para final de año";
		}else{
			$diaresto=$diatotal-$dia;
			echo "Quedan $diaresto para final de año";
		}

		break;
	case 2:
		if ($mes=2) {
			$diaresto=($diatotal-1)-$dia;
			echo "Quedan $diaresto para final de año";
		}else{
			$diaresto=$diatotal-$dia;
			echo "Quedan $diaresto para final de año";
		}

		break;
	default:
		# code...
		break;
}



?>