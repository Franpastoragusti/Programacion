<?php
function bisiesto($año){
	if ($año%4==0&&($año%100!=0||$año%400==0)) {
		echo "El año es bisiesto";
	}else{
		echo "El año no es bisiesto";
	}

}



bisiesto (1902);
?>