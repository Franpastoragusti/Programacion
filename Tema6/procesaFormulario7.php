<?php

if ($_POST["tipo"]=="Euros") {
	$resultado=$_POST["pesetas"]/166.386;
	echo "Son $resultado euros";
}else{
	$resultado=$_POST["pesetas"]/153.1;
	echo "Son $resultado dolares";
}
?>