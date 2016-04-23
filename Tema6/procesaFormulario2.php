<?php

function recorrearray($V){
	foreach ($V as $key => $value) {
		echo "$key - $value" ."<br>";
	}
}


if (empty($_GET)) {
	echo "Muestro POST<BR>";
	recorrearray($_POST);
}else{
	echo "Muestro GET<BR>";
	recorrearray($_GET);
}


?>