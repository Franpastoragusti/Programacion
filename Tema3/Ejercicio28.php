<?php
function media($V){
$media=0;
$i=0;
$e=0;
	while ($V[$i]!=-1) {
		if ($V[$i]>=0) {
		$media=$media+$V[$i];
		$e++;
		}
		$i++;	
	}

	if ($e>0) {
		$media=$media/$e;
		return $media;
	}else{
		echo "La media no se puede calcular";
		$media=-1;
		return $media;
	}
}

$t=media(array(1,2,3,4,5,-1));
echo $t ."<br>";
$t=media(array(1,2,0,0,5,-1));
echo $t ."<br>";
$t=media(array(-7,-8,-4,-3,-1));
echo $t ."<br>";
$t=media(array(0,0,0,0,0,-1));
echo $t ."<br>";
?>