<?php
$cadena="Tomas comete unas piruletas que las piruletas estan mu buenas";
$patron='/[a-z]{4}letas/';
$remp="pollas";
echo preg_replace($patron, $remp, $cadena);
?>