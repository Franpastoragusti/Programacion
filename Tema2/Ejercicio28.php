<?php
$num=53452;
$cantidad=5;
$e=0;
$mod=$num;
while ($mod>0) {
	$mod=$mod/10;
	$mod=(int)$mod;
	$e++;
}

if ($e==$cantidad) {
	echo "El numero es $num <br>";
	echo "El numero contiene $e digitos <br>";
	echo "El numero insertado, tiene los digitos correctos <br>";

}else{
	echo "El numero no es correcto";
}

?>

