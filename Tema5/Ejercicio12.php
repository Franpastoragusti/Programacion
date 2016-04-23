<?php
$cadena="hola mundo en php";
$cadena2="HOLA MUNDO EN PHP";
$cadenaMayus=strtoupper($cadena);
echo $cadenaMayus."<br>";
$cadenaMinus=strtolower($cadena2);
echo $cadenaMinus."<br>";
$cadenaPrimMay=ucfirst($cadena);
echo $cadenaPrimMay."<br>";
$cadenaCada=ucwords($cadena);
echo $cadenaCada."<br>";
?>