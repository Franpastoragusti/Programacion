<?php


function operaciones($num, $num2, $nombreop){
 $Operacion=0;

 switch ($nombreop) {
 	case '+':
 		$Operacion=$num+$num2;
 		break;
 	case '-':
 		$Operacion=$num-$num2;
 		break;
 	case '*':
 		$Operacion=$num*$num2;
 		break;

 }
return $Operacion;
}

$op= operaciones(17,3,'+');
echo $op;

?>