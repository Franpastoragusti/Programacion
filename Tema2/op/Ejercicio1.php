<?php
	$V = array(20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40);
	$n= sizeof($V);
	for ($i=0; $i<$n ; $i++) { 
		if ($V[$i]%2!=0) {
			echo $V[$i] . "<br>";
		}	
	}
?>