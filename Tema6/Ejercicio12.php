<html>
<head><title></title></head>
<body>
<h3>Formulario POST</h3>
<h3>DATOS DE ACTIVIDAD</h5>
<?php
if (empty($_POST)){
	echo "
<form action='Ejercicio12.php' method='POST'>
Nombre de la actividad
<input type='text' name='nombre' value=''><br>
Nombre del asistente
<input type='text' name='asistente'><br>
DNI (sin letra)
<input type='text' name='DNI'><br>
Email
<input type='text' name='email'><br>


 <input type='submit' value='Registrarse'><br>
</form>";
}else{
	$email=filter_input(INPUT_POST,"email",FILTER_VALIDATE_EMAIL);


$DNI=filter_input(INPUT_POST,"DNI",FILTER_VALIDATE_INT);

if ($DNI === false) {
 echo "El valor del campo DNI no se ha establecido correctamente<br>";
}else{
	$DNI=filter_input(INPUT_POST,"DNI",FILTER_VALIDATE_INT);
	echo "El valor del campo DNI se ha establecido correctamente<br>";
}
if ($email === false) {
 echo "El valor del campo email no se ha establecido correctamente<br>";
}else{
	$email=filter_input(INPUT_POST,"email",FILTER_VALIDATE_EMAIL);
	echo "El valor del campo email se ha establecido correctamente<br>";
}
}

?>
</body>
</html>