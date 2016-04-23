<?php
if ($_GET["edad"]<18) {
	echo $_GET["nombre"]."<br>";
	echo "Eres menor de edad";
}else{
	echo $_GET["nombre"];
	echo "Eres mayor de edad<br>";
}


?>