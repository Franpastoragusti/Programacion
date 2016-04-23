<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
 <head>
 <title>Empezando con php …</title>
 </head>
 <body>
<h2>Funciones de Usuario </h2>
<?php
function elMayor(){
$num_args = func_num_args();
$args = func_get_args();
$elmayor=0;
for($i=2;$i<$num_args;$i++)
$elmayor = ($elmayor>$args[$i])?$elmayor:$args[$i];
return $elmayor;
}
?>
<table border="0" cellpadding="4" cellspacing="6">
<tr align="center">
<td bgcolor="#FFFBAD">
<?php
echo "El mayor de 17, 5, 22, y 19 es
<br><h2>" .elMayor(17,5,22,19). "</h2>";
echo "El mayor de 1, 35, 22, 80, 7, 12, y 19 es
<br><h2>" .elMayor(1, 35, 22, 80, 7, 12, 19).
"</h2>";
?>
</td>
</tr>
</table>
</body>
</html>