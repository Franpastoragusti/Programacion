<html>
<head><title>Ejemplo de formulario sencillo</title></head>
<body>
<h3>Cookies</h3>
<?php
if (!isset($_COOKIE["nombre"])) {
	setcookie("nombre","user");
	echo "Bienvenido a la página!<br>";
	echo "La cookie 'usuario' no está inicializada!<br>";
}else{
	if (isset($_COOKIE["nombre"])) {
	echo "Su valor es: ".$_COOKIE["nombre"]."<br>";
	echo "Bienvenido a la página user<br>";
	
	}
	echo "Quizá tenga que recargar la página!<br>";
}

?>
</body>
</html>