<html>
<head><title>Conversor</title></head>
<body>
<h3>Calculadora</h3>
<?php
if (empty($_POST)){
	echo '
<form action="Ejercicio14.php" method="POST">
Operador1<br>
  <input type="text" name="op1" ><br>
Operador2<br>
  <input type="text" name="op2" ><br>
Operacion<br>
  <select name="operacion">
  <option value="*">Multiplicar</option>
  <option value="+">Sumar</option>
  <option value="-">Restar</option>
  <option value="/">Dividir</option>
  </select><br><br>


 <input type="submit" value="Realizar Operación"><br>
</form>';
}else{
	if ($_POST["op1"]==""||$_POST["op2"]=="") {
		echo "Falta el valor de algun operando";
	}else{
		 	switch ($_POST["operacion"]) {
			case '*':
				echo $_POST["op1"]*$_POST["op2"];
			break;
			case '+':
				echo $_POST["op1"]+$_POST["op2"];
			break;
			case '-':
				echo $_POST["op1"]-$_POST["op2"];
			break;
			case '/':
				echo $_POST["op1"]/$_POST["op2"];
			break;
			}	
	}
}

?>
</body>
</html>