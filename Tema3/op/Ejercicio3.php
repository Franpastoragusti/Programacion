<?php
function oper(){
$size=func_num_args();
$V=func_get_args();
$operacion=0;
	switch ($size) {
	case '2':
		$operacion=$V[0]*$V[1];
		echo "$operacion<br>";
		break;
	case '3':
		$operacion=$V[0]+$V[1]+$V[2];
		echo "$operacion<br>";
		break;
	case '4':
		$operacion=$V[0]+$V[1]+$V[2]+$V[3];
		$operacion=$operacion/$size;
		echo "$operacion<br>";
		break;
	}	
}
oper(3,4);
oper(3,4,9);
oper(3,4,5,6);
?>