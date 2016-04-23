<?php
$cadenas= array("Andalucía","Aragón","Principado de
Asturias","Baleares","Canarias","Cantabria","Castilla-La
Mancha","Castilla y León","Cataluña","Extremadura","Galicia","La
Rioja","Comunidad de Madrid","Región de Murcia","Comunidad Foral de Navarra","País Vasco","Comunidad Valenciana");

$max=0;
for ($i=0; $i <sizeof($cadenas) ; $i++) { 
	if (strlen($cadenas[$i])>$max){
		$max=strlen($cadenas[$i]);
		$maxcom=$cadenas[$i];
		}
}
echo "$maxcom=$max";

?>