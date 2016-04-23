<?php
$nombres=array('roberto','juan','marta','maria','martin','jorge','miriam','nacho','mirta');
$h = array();
$e=0;
for ($i=0; $i <sizeof($nombres); $i++) { 
	$t=$nombres[$i];
	if ($t[0]=='m') {
		$h[$e]=$nombres[$i];
		$e++;
	}
}
for ($i=0; $i<sizeof($h) ; $i++) { 
	echo "$h[$i] ";
}
?>