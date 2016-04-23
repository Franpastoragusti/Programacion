<html>
<head><title></title></head>
<body>
<h3>ingresos</h3>
<?php
if (empty($_POST)){
	echo "
<form action='Ejercicio10.php' method='POST'>
Pon tu nombre<br>
  <input type='text' name='nombre'><br>

Ingresos anuales<br>
  <select name='ingresos'>
  <option value='1-1000'>1-1000</option>
  <option value='1001-3000'>1001-3000</option>
  <option value='+3000'>+3000</option>
  </select><br><br>

 <input type='submit' value='Pagar impuestos'><br>
</form>";
}else{
	echo $_POST["nombre"]."<br>";
	echo $_POST["ingresos"]."<br>";
	if ($_POST["ingresos"]=='+3000') {
		echo "se debe pagar impuestos";
	}
}

?>
</body>
</html>