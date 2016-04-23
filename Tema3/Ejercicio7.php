<?php


function operaciones($num, $num2, $nombreop){
 $Operacion=0;

 switch ($nombreop) {
 	case '+':
 		$Operacion=$num+$num2;
 		echo "$Operacion<br><br>";
 		break;
 	case '-':
 		$Operacion=$num-$num2;
 		if ($Operacion<0) {
 			echo "El resultado es negativo ";
 		}
 		echo "$Operacion<br><br>";
 		
 		break;
 	case '*':
 		$Operacion=$num*$num2;
 		echo "$Operacion<br><br>";
 		break;
 	case '/':
 		if ($num2==0) {
 			echo "El divisor es un 0, el resultado es infinito ";
 		}else{
 			$Operacion=$num/$num2;
 			echo "$Operacion<br><br>";
 			}
 		break;
 }
}
operaciones(18, 5, "+");
operaciones(2, 5, "-");
operaciones(10, 5, "-");
operaciones(28, 5, "*");
operaciones(45,5, "/");
operaciones(5,0, "/");
?>