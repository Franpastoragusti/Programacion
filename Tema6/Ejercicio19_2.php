<?php
session_start ();
?>
<HTML>
<BODY>
<h2>Trabajando por Sesiones</h2>
<?php
$_SESSION["contador"]=0;
echo "Variable <b>contador</b> actualizada"
?>
<a href ='Ejercicio19.php'>Volver</a>
</BODY>
</HTML> 