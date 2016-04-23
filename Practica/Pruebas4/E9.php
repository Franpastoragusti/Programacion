<?php
$Departamento["0"]=array('Ventas'=>15,'Internacional'=>98,'Validación'=>125,'Producción'=>144,'Diseño'=>43);
$Departamento["1"]=array('Ventas'=>345,'Internacional'=>8,'Validación'=>543,'Producción'=>1456,'Diseño'=>44);
$Departamento["2"]=array('Ventas'=>134,'Internacional'=>3,'Validación'=>54,'Producción'=>1466,'Diseño'=>46);
$Departamento["3"]=array('Ventas'=>16,'Internacional'=>4,'Validación'=>553,'Producción'=>1478,'Diseño'=>84);
$Departamento["4"]=array('Ventas'=>154,'Internacional'=>3,'Validación'=>5643,'Producción'=>142,'Diseño'=>74);

function recorridoadelante($V){

echo "<table border=1>";
	do{
		$fila=current($V);
		$key=key($V);
		echo "<tr><td>Departamento $key</td></tr>";
		do{
			$clave=key($fila);
			$valor=current($fila);
			echo "<tr><td>$clave</td><td>$valor</td></tr>";

		}while (next($fila));
		
	}while (next($V));
	echo "</table>";
	echo "<br>";

}
recorridoadelante($Departamento);

?>