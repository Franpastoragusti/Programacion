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

$id=session_id();
$parametros=session_get_cookie_params();


echo "<table border=1px>
<tr>
<td>id</td><td>$id</td>
</tr>
<tr>
<td>Numero de accesos</td><td> ".$_SESSION["contador"]."</td>
</tr>
<tr>
<td>cookie de sesion</td><td>". foreach (session_get_cookie_params() as $key => $value) {
	echo $value."<br>";
}


."</td>
</tr>
<tr>
<td>Control de cache</td><td>".session_cache_limiter()."</td>
</tr>
<tr>
<td>Codificacion</td><td>".session_encode()."</td>
</tr>
<tr>
<td>Directorio de salvado</td><td>".session_save_path()."</td>
</tr>
</table>
";
echo "<a href = 'Ejercicio19.php'>Actualizar</a>  ";
echo "<a href = 'Ejercicio19_2.php'>Resetear</a>";
?>
</BODY>
</HTML> 