<?php
session_start();
?>
<html>
<head></head>
<body>
<?php
if (empty($_SESSION["Contador"])) {
	$_SESSION["Contador"]=1;
	echo "Se ha iniciado la sesion<br>
	<h2>Trabajando con Sesiones</h2>
	<h5>Informacion de la sesión</h5>
	<table border='1'>
		<tr><td>ID</td><td>" . session_id() . "</td></tr>
		<tr><td>Numero de accesos</td><td>".$_SESSION["Contador"]."</td></tr>
		<tr><td>Nombre anterior</td><td>".session_name("Fran")."</td></tr>
		<tr><td>Nombre actual</td><td>".session_name()."</td></tr>
		
	</table>
	<a href='E19.php'>Actualizar </a>
	<a href='E19reset.php'>Resetear contador</a>";


}else{
	$_SESSION["Contador"]=$_SESSION["Contador"]+1;
	echo "
	<h2>Trabajando con Sesiones</h2>
	<h5>Informacion de la sesión</h5>
	<table border='1'>
		<tr><td>ID</td><td>" . session_id() . "</td></tr>
		<tr><td>Numero de accesos</td><td>".$_SESSION["Contador"]."</td></tr>
		<tr><td>Nombre anterior</td><td>".session_name("Fran")."</td></tr>
		<tr><td>Nombre actual</td><td>".session_name()."</td></tr>
		
	</table>
	<a href='E19.php'>Actualizar </a>
	<a href='E19reset.php'>Resetear contador</a>";
}
?>
</body>



</html>