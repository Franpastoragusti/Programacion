<html>
<head><title>Orden</title></head>
<body>
<?php
if (!empty($_POST["order"])) {//si $post esta lleno establecemos las cookies, el mensaje y el volver
setcookie("criterio", $_POST["order"]);
?>
<H2>COOKIEE CREADA</H2>
<a href='Ejerciciocookies.php'>VOLVER</a>";
<?php
}else{
?>
<h3>Ordenar</h3>

<form action="Ejerciciocookies.php" method="POST">
Escribe los numeros<br>
<?php
$text="78 60 62 68 71 68 73 85 66 64 76 63 75 76 73 68 62 73 72 65 74 62 62 65 64 68 73 75 79 73";
if (isset($_COOKIE["criterio"])) {
	$textArray=explode(" ", $text);
	if ($_COOKIE["criterio"]=="ascendente") {
		asort($textArray);
	}else{
		rsort($textArray);
	}
	$text=implode(" ", $textArray);
	echo "<textarea row='9' col='20' name='info'>$text</textarea><br>";
}else{
	echo "<textarea row='9' col='20' name='info'>$text</textarea><br>";
}
?>
Como ordenar<br>
  <select name="order">
  <option value="ascendente">ASCENDENTE</option>
  <option value="descendente">DESCENDENTE</option>
  </select><br><br>

 <input type="submit" value="ENVIAR"><br>
</form>
<a href="Ejerciciocookiesreset.php">RESETEAR COOKIES</a>
<?php
}
?>
</body>
</html>