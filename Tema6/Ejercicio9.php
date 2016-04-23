<html>
<head><title>Conversor</title></head>
<body>
<h3>conversor</h3>
<?php
if (empty($_POST)){
	echo '
<form action="Ejercicio9.php" method="POST">
 Introduzca el nombre:
 <input type="text" name="nombre"><br>
 Selecciona un deporte:<br>
 <input type="checkbox" name="deporte[]" value="Fútbol">Fútbol<br>
 <input type="checkbox" name="deporte[]" value="Basket">Basket<br>
 <input type="checkbox" name="deporte[]" value="Tennis">Tennis<br>
 <input type="checkbox" name="deporte[]" value="Voley">Voley<br>
<input type="submit" value="Enviar"><br>

</form>';
}else{
	echo $_POST["nombre"]."<br>";

	foreach ($_POST["deporte"] as $key => $value) {
		echo $value."<br>";
	}
}
?>
</body>
</html>