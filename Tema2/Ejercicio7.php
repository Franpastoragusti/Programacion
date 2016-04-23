<?php
echo "hoy es <b>";
$dia= date("D");

switch ($dia) {
	case "Mon": //fijate siempre que el case va con :
		echo "Lunes";
		break;
	case "Tue":
		echo "Martes";
		break;
	case "Wed":
		echo "Miercoles";
		break;
	case "Thu":
		echo "Jueves";
		break;
	case "Fri":
		echo "Viernes";
		break;
	case "Sat":
		echo "Sabado";
		break;
	case "Sun":
		echo "Domingo";
		break;
	default: //el default no es obligatorio en muchos casos
		echo "este dia no existe";
		break;
}
?>