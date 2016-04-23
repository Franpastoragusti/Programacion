<?php
if (empty($_GET)) {
?>
	<html>
	<head>
		<title>Ejercicio10 Tema 6</title>
	</head>
	<body>

	<form action="T6E10.php" method="GET">
		<label>Nombre</label>
		<input type="text" name="nombre">
		<br>
		<input type="checkbox" name="deportes[]" value="Futbol">Futbol
		<input type="checkbox" name="deportes[]" value="Basket">Basket
		<input type="checkbox" name="deportes[]" value="Tennis">Tennis
		<input type="checkbox" name="deportes[]" value="Voley">Voley
		<br>
		<input type="submit" value="Enviar">
	</form>
	</body>
	</html>
<?php
}else{
	$cont=0;
	for ($i=0; $i < sizeof($_GET["deportes"]) ; $i++) { 
		if (!empty($_GET["deportes"][$i])) {
			$cont++;
		}
	}

echo "$_GET[nombre] "."practica ". $cont . " deportes";

}
?>