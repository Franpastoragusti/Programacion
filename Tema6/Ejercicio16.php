<html>
<head><title>Ejemplo de formulario sencillo</title></head>
<body>
<h3>Trabajando con Cookies</h3>
<?php
echo "<h5>Contador de accesos</h5>";

if (!isset($_COOKIE["visitas"])) {
	setcookie("visitas",1);
	echo "Es la primera vez que accedes a la pagina!<br>";
}else{
	if (isset($_COOKIE["visitas"])) {
	$visitas=$_COOKIE["visitas"]+1;
	setcookie("visitas",$visitas);
	echo "Has acccedido a esta pagina ". $visitas." veces<br>";
	}
	
}
echo "<a href='Ejercicio16_2.php'>Eliminar</a>  ";
echo "<a href='Ejercicio16.php'>Actualizar</a>";
?>
</body>
</html>