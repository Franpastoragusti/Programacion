<html>
<head>
	<title>Prueba1</title>
</head>
<body>
<?php
	if (empty($_POST)) {
	echo '
		<form action="Prueba1.php" method="POST">
		Numero de palabras
		<input type="text" name="numPalabras"><br>
		<input type="submit" value="Enviar"/>
		</form>';
	}

	if (isset($_POST["numPalabras"])) {
		echo '
		<form action="Prueba1.php" method="POST">
		Introduce las palabras<br>';
		for ($i=0; $i < $_POST["numPalabras"]; $i++) { 
			echo "<input type='text' name='".$i."'><br>";
		}
		echo '<input type="submit" value="Analizar"/>
		</form>';
		
	}
	
	if (!empty($_POST[0])) {
		$max=strlen($_POST[0]);
		$cadenamax=$_POST[0];
		for ($i=0; $i < sizeof($_POST); $i++) { 
			if (strlen($_POST[$i])>$max) {
				$max=strlen($_POST[$i]);
				$cadenamax=$_POST[$i];
			}
		}
		echo "La cadena mas larga es $cadenamax";
	}
	?>
</body>
</html>