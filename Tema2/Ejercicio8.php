<?php
echo "hoy es <b>";
$dia= date("D");

switch ($dia) {
	case "Mon":
	case "Tue":
	case "Wed":
	case "Thu":
	case "Fri": //se quitan los break y los echos cuando te interesa agrupar (es como un "o"(Si es lunes, martes, miercoles, jueves o viernes-->echo "dia entre semana"))
		echo "dia entre semana";
		break;
	case "Sat"://
	case "Sun"://en este caso como solo hay dos comparaciones y esta es la ultima en vez de como está, podemos ejecutarla con default
		echo "fin de semana";
		break;
}
?>