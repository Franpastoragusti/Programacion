<?php
$temperatura=100;

if ($temperatura<=0) {
	echo "El agua esta en estado solido";
}elseif ($temperatura>0&&$temperatura<100) {
	echo "El agua esta en estado liquido";
}else{
	echo "El agua esta en estado gaseoso";
}








?>