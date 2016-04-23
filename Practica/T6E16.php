<?php

if (empty($_COOKIE["contador"])) {
	setcookie("contador",1);
?>
	<html>
	<body>
		<h2>Trabajando con Cookies</h2>
		<b>Contador de accesos</b><br>
		<label>Es la primera vez que accedes a esta página</label><br>
		<a href="T6E16.php">Actualizar </a><br>
		<a href="T6e16borrar.php">Eliminar</a>
	</body>
	</html>
<?php
}else{
?>
<html>
	<body>
		<h2>Trabajando con Cookies</h2><br>
		<b>Contador de accesos</b><br>
		<?php
		setcookie("")$_COOKIE["contador"]++;
		echo "Has accedido a esta pagina $_COOKIE[contador] veces<br>";
		?>
		<a href="T6E16.php">Actualizar </a>
		<a href="T6e16borrar.php">Eliminar</a>
	</body>
	</html>
<?php
}
?>