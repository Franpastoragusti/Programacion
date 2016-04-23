<?php

$V=array('roberto','juan','marta','maria','martin','jorge','miriam','nacho','mirta');
$H=array();
$e=0;
for ($i=0; $i < sizeof($V) ; $i++) { 
	$t=$V[$i];
	if ($t[0]=="m") {
		$H[$e]=$V[$i];
		$e++;
	}
}

for ($i=0; $i <sizeof($H) ; $i++) { 
	echo "$H[$i], ";
}

?>