<?php
$V = array(1,5,6,4,7,9);
$n=sizeof($V);
$s=0;
$a=0;
$c=0;
for ($i=0; $i<$n ; $i++) { 
	echo "$V[$i] ";
	if ($V[$i]<4) {
		$s++;
	}
	if ($V[$i]==4) {
		$c++;
	}
	if ($V[$i]>4) {
		$a++;
	}
}

echo "<br>";



echo "hay $s suspensos<br>";
echo "hay $a aprobados<br>";
echo "hay $c condicionados";

?>

