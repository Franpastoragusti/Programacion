<?php

function recorrearray($V){
	foreach ($V as $key => $value) {
		echo "$key - $value" ."<br>";
	}
}
echo 'Los valores de $_SERVER son:<br>';
recorrearray($_SERVER);
echo 'Los valores de $_GET son:<br>';
recorrearray($_GET);
echo 'Los valores de $_POST son:<br>';
recorrearray($_POST);
echo 'Los valores de $_REQUEST son:<br>';
recorrearray($_REQUEST);

?>