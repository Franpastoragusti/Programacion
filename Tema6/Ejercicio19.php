<?php
session_start ();

?>
<HTML>
	<head>
		<style type="text/css">
			body{
				text-align: center;
			}
		</style>
	</head>
<BODY>
<h2>Trabajando por Sesiones</h2>
<h4>Información de la sesión</h2>
<?php
if (!isset($_SESSION["contador"])) {
	$_SESSION["contador"] = 1;
}else{

$_SESSION["contador"] = $_SESSION["contador"]+1;
}

$id=session_id();
$nameant=session_name("fransolo");
$name=session_name();

echo "<table border=1px>
<tr>
<td>id</td><td>$id</td>
</tr>
<tr>
<td>Numero de accesos</td><td> ".$_SESSION["contador"]."</td>
</tr>
<tr>
<td>Nombre actual</td><td>$name</td>
</tr>
<tr>
<td>Nombre anterior</td><td>$nameant</td>
</tr>
</table>
";
echo "<a href = 'Ejercicio19.php'>Actualizar</a>  ";
echo "<a href = 'Ejercicio19_2.php'>Resetear</a>";
?>
</BODY>
</HTML> 