<html>
<head><title>Conversor</title></head>
<body>
	<?php
	if (empty($_POST)) {
		echo '
		<h3>conversor</h3>
		<form action="procesaFormulario6.php" method="POST">
		 Introduzca la cantidad de euros:
		 <input type="text" name="euros">
		 <input type="submit" value="Enviar"/>
		</form>';
}else{
$resultado=$_POST["euros"]*166.386;
echo "Son $resultado pesetas";
}
?>
</body>
</html>