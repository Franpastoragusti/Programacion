<html>
<head><title>Conversor</title></head>
<body>
<h3>conversor</h3>
<?php
if (empty($_POST)){
	echo '
<form action="Ejercicio7.php" method="POST">
 Introduzca la cantidad de pesetas:
 <input type="text" name="pesetas">
 <input type="submit" value="Enviar".><br>
 Seleccione el tipo de conversion:
 <input type="radio" name="tipo" value="Euros">Euros
 <input type="radio" name="tipo" value="Dolares">Dolares
</form>';
}else{
if($_POST["tipo"]=="Euros") {
	$resultado=$_POST["pesetas"]/166.386;
	echo "Son $resultado euros";
}else{
	$resultado=$_POST["pesetas"]/153.1;
	echo "Son $resultado dolares";
}
}
?>
</body>
</html>