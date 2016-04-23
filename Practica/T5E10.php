<?php
$cadena= 	"\	\ 1 +	2	/	3	*	2	:	2-3	/	4	*	3";
$var=3;
$cadenanueva=str_split($cadena);

for ($i=0; $i <sizeof($cadenanueva); $i++) { 
	if (gettype($cadenanueva[$i])=='int') {
		print $cadenanueva[$i];
	}
}

?>