<?php
if (!empty($_POST)){
setcookie("entorno[color_fondo]", $_POST["color_fondo"]);
setcookie("entorno[color_pp]", $_POST["color_pp"]);
setcookie("entorno[fuente]", $_POST["fuente"]);
setcookie("entorno[tam_fuente]", $_POST["tam_fuente"]);
echo "Se han creado las cookies";
echo "<a href='Ejercicio17.php'>Volver</a>"."<br>";
}else{
?>
<html>
<head>
<title>Conversor</title>
<style type="text/css">
body{
	font-family: '<?php echo $_COOKIE["entorno"]["fuente"];?>'
	font-size: <?php echo $_COOKIE["entorno"]["tam_fuente"];?>
	color: <?php echo $_COOKIE["entorno"]["color_pp"];?>
	background-color: <?php echo $_COOKIE["entorno"]["color_fondo"];?>
  }
</style>
</head>
<body>
<h3>Trabajando con cookies</h3>
<h5>Definicion del entorno</h5>
<form action="Ejercicio17.php" method="POST">
Color de fondo
<select name="color_fondo">
  <option value="red">Rojo</option>
  <option value="blue">Azul</option>
  <option value="black">Negro</option>
  </select><br>
Color de primer plano
  <select name="color_pp">
  <option value="red">Rojo</option>
  <option value="blue">Azul</option>
  <option value="black">Negro</option>
  </select><br>
Fuente 
  <select name="fuente">
  <option value="Arial">Arial</option>
  <option value="Times">Times New Roman</option>
  <option value="Sans">Sans</option>
  </select><br>
Tamaño fuente
  <select name="tam_fuente">
  <option value="12">12</option>
  <option value="15">15</option>
  <option value="18">18</option>
  </select><br><br><br>
<input type="submit" value="Crear cookie">
<input type="reset" value="Restablecer">
</form>
</body>
</html>
<?php
}
?>