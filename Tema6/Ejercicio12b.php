<html>
<head><title></title></head>
<body>
<h3>Formulario </h3>

<?php
if (empty($_POST)){
	echo '
<form enctype="multipart/form-data" action="Ejercicio12b.php" method="POST">
Archivo
<input type="file" name="archivo"><br>

<input type="submit" value="Enviar"><br>
</form>';
}else{
	echo $_FILES["archivo"]["type"];
	var_dump($_FILES);
}

?>
</body>
</html>