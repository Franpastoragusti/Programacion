<?php
session_start ();
?>
<HTML>
<BODY>
<?php
$_SESSION["nombre"] = "Fran";
$_SESSION["edad"] = 24;
echo "<a href = 'Ejercicio18_2.php'>Pasar variables</a>";
?>
</BODY>
</HTML> 