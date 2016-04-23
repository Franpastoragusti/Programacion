<html>
<head>
	<title>Prueba2</title>
</head>
<body>
<?php
if (!empty($_POST)) {
	$flag=false;
	$email=filter_input(INPUT_POST, "email",FILTER_VALIDATE_EMAIL);
	$cantidad=filter_input(INPUT_POST, "cantidad",FILTER_VALIDATE_INT);
	$dni=filter_input(INPUT_POST, "dni",FILTER_VALIDATE_INT);
	
	if ($dni==false) {
		echo "El DNI no se ha establecido correctamente<br>";
		$flag=true;
	}
	if ($email==false) {
		echo "El Email no se ha establecido correctamente<br>";
		$flag=true;
	}
	if ($cantidad==false) {
	echo "La cantidad no se ha establecido correctamente<br>";
		$flag=true;
	}
	if (!isset($_POST["articulos"])) {
	echo "El campo articulos no se ha establecido correctamente<br>";
		$flag=true;
	}
	if (!isset($_POST["pago"])) {
	echo "Tiene que seleccionar un metodo de pago<br>";
		$flag=true;
	}
	if ($flag==false) {
		echo "Todos los campos se han intoducido correctamente<br>";
		foreach ($_POST as $key => $value) {
			echo "<br>$key - ";
			if (gettype($value)=="array"){
				foreach ($value as $key1 => $value1) {
					echo $value1." ";
				}
			}else{
			echo $value;
			}
		}
	}
}else{
echo '
	<h2>DATOS PEDIDO</h2>
<form action="Prueba2.php" method="POST">
	<label>Articulos</label>
	Ruedas<input type="checkbox" name="articulos[]" value="Ruedas">
	Aceite<input type="checkbox" name="articulos[]" value="Aceite">
	Liquido de Frenos<input type="checkbox" name="articulos[]" value="Liquido de Frenos">
	Otros<input type="checkbox" name="articulos[]" value="Otros"><br>

	<label>Cantidad</label>
	<input type="text" name="cantidad"><br>

	<label>DNI(Sin letra)</label>
	<input type="text" name="dni"><br>

	<label>Email</label>
	<input type="text" name="email"><br>

	<label>Forma de Pago</label>
	<select name="pago">
		<option value="Tarjeta">Tarjeta de credito</option>
		<option value="Contrarrembolso">Contrarrembolso</option>
		<option value="CorteIngles">Tarjeta Corte Ingles</option>
	</select><br>
	<input type="submit" value="Enviar Pedido">
</form>';
}
?>
</body>

</html>