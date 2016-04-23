<?php
$V = array(1, 5, 5, 4, 3, 4, 5, 5, 4, 1, 6, 7);
$H = array(0, 0, 0, 0, 0, 0, 0);
$n=sizeof($V);
for ($i=0; $i<$n ; $i++) { 
	
	$H[$i]=$V[$i]++;
	echo "$H[$i] <br>";
}






?>