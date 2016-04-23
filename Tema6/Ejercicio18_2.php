<?php
session_start () ;
?>
<HTML>
<BODY>
<?php
echo "Mostrar las variables de sesión<br>";
foreach ($_SESSION as $indice => $valor) {
 echo "$indice: $valor<br>";
}
echo($_COOKIE["PHPSESSID"]);

?>
</BODY>
</HTML>