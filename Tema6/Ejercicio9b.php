<html>
<head><title>Conversor</title></head>
<body>
<h3>distribuidores</h3>
<?php
if (empty($_POST)){
	echo '
<form action="Ejercicio9b.php" method="POST">
Tipo de tarjeta<br>
  <input type="radio" name="pago" value="VISA">VISA<br>
  <input type="radio" name="pago" value="MASTERCARD">MASTERCARD<br><br>
Distribuidor<br>
  <select name="distibuidor">
  <option value="SEUR">SEUR</option>
  <option value="MRW">MRW</option>
  <option value="AMAZON">AMAZON</option>
  </select><br><br>
Productos<br>
 <input type="checkbox" name="productos[]" value="0">Fotocopiadoras<br>
 <input type="checkbox" name="productos[]" value="1">Toner<br>
 <input type="checkbox" name="productos[]" value="2">Carpetas<br>

 <input type="submit" value="Realizar Pedido"><br>
</form>';
}else{
	
foreach ($_POST as $key => $value) {
	if(gettype($value)=="array") {
		foreach ($value as $key1 => $value1) {
		 	echo $key."-";
		 	switch ($value1) {
			case '0':
				echo "Fotocopiadoras<br>";
			break;
			case '1':
				echo "Toner<br>";
			break;
			case '2':
				echo "Carpetas<br>";
			break;
			 }  
		}	
	}else{
		echo "$key - $value<br>";
	}
}
}
?>
</body>
</html>