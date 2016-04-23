<html>
<head><title>Conversor</title></head>
<body>
<h3>Datos pedido</h3>
<?php
if (empty($_POST)){
	echo '
<form action="Ejercicio13.php" method="POST">

Artículos<br>
 <input type="checkbox" name="articulos[]" value="0">Ruedas
 <input type="checkbox" name="articulos[]" value="1">Aceite
 <input type="checkbox" name="articulos[]" value="2">Líquido de Frenos
 <input type="checkbox" name="articulos[]" value="3">Otros<br>


Cantidad
<input type="text" name="cantidad"><br>

DNI(sin letra)
  <input type="text" name="DNI"><br>

E-mail
  <input type="text" name="email"><br>

Forma de pago
  <select name="pago">
  <option value="Tarjeta crédito">Tarjeta de crédito</option>
  <option value="Contrarrembolso">Contrarrembolso</option>
  <option value="Tarjeta Corte Inglés">Tarjeta Corte ingles</option>
  </select><br><br>
 <input type="submit" value="Registrarse"><br>
</form>';
	
}else{
	$error="";
	$email=filter_input(INPUT_POST,"email",FILTER_VALIDATE_EMAIL);
	$DNI=filter_input(INPUT_POST,"DNI",FILTER_VALIDATE_INT);
	$cantidad=filter_input(INPUT_POST, "cantidad",FILTER_VALIDATE_INT);
	$articulos=filter_input(INPUT_POST, "articulos",FILTER_REQUIRE_ARRAY);

	if ($DNI === false) {
	 $error=$error."El valor del campo DNI no se ha establecido correctamente<br>";
	}
	if ($email === false) {
	 $error=$error."El valor del campo email no se ha establecido correctamente<br>";
	 
	}

	if ($cantidad === false) {
	 $error=$error. "El valor del campo cantidad no se ha establecido correctamente<br>";
	 
	}
	if (!isset($_POST["pago"])) {
	$error=$error. "El valor del campo pago no se ha establecido correctamente<br>";
	 
	}

	if ($error=="") {
		
		foreach ($_POST as $key => $value) {
			if(gettype($value)=="array") {
				echo "Artículos: ";
				foreach ($value as $key1 => $value1) {
				 	switch ($value1) {
						case '0':
							echo "Ruedas ";
						break;
						case '1':
							echo "Aceite ";
						break;
						case '2':
							echo "Liquido de frenos ";
						break;
						case '3':
							echo "Otros ";
						break;
					}  
				}
				echo "<br>";	
			}else{
				echo "$key - $value<br>";
			}
		}
	}else{
		echo $error;
	}
}

?>
</body>
</html>