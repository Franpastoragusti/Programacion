<?php
$V= array(1,2,5,4,5,6,7,8,9);
$a=0;
for ($i=0; $i<sizeof($V)-1; $i++) { 
	if ($V[$i]<$V[$i+1]) {
		$a++;
	}else{
		break;
	}
}
if ($a==sizeof($V)-1) {
	echo "Es correcto";
}else{
	echo "no es correcto";
}



?>