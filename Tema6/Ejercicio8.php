<html>
<head><title>Conversor</title></head>
<body>
<h3>conversor</h3>
<?php
if (empty($_POST)){
	echo '
<form action="Ejercicio8.php" method="POST">
 Introduzca el nombre:
 <input type="text" name="nombre"><br>
 Introduzca la edad:
 <input type="text" name="edad"><br>
 <input type="submit" value="Enviar"><br>
</form>';
}else{
	$resultado=$_POST["edad"];
	echo "Tienes $resultado años<br>";
	if ($resultado>=18) {
		echo "Eres mayor de edad";
	}else{
		echo "Aun eres un criajo";
	}
}
?>
</body>
</html>