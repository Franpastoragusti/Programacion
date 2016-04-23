<html>
<head>
	<title>Ejercicio 3</title>
</head>
<body>
<?php
if (empty($_GET)) {
echo '	
	<form action="E2.php" method=GET>
		<h2>Formulario de palabras palindromas</h2>
		<h5>Escribe la palabra o frase a comparar</h5>
		<textarea rows="4" cols="28" name="area"></textarea><br>
		<input type="submit" value="Comprobar">
	</form>';	
}else{
	$cadena=$_GET["area"];
	$sinespacios=str_replace(" ", "", $cadena);
	$invertida=strrev($sinespacios);
	$comparar=strcasecmp($sinespacios, $invertida);
	if ($comparar==0) {
		echo "La cadena es palíndroma";
	}else{
		echo "La cadena no es palindroma";
	}
}
?>
</body>
</html>
