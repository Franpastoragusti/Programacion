<?php
function suma(){
$suma=0;
$size=func_num_args();
$V=func_get_args();
	for ($i=0; $i<$size ; $i++) { 
	$suma=$suma+$V[$i];
	}
return $suma;
}


function media(){
$media=0;
$size=func_num_args();
$V=func_get_args();
	for ($i=0; $i<$size ; $i++) { 
		$media=$media+$V[$i];
	}
$media=$media/$size;
return $media;
}

function sumaPares(){

$suma=0;
$size=func_num_args();
$V=func_get_args();
	for ($i=0; $i<$size ; $i++) { 
		if ($V[$i]%2==0) {
			$suma=$suma+$V[$i];
		}
	}
return $suma;
}


$t=suma(1,2,3,4,5,6);
echo $t."<br>";
$t=sumaPares(1,2,3,4,5,6);
echo $t."<br>";
$t=media(1,2,3,4,5,6);
echo $t."<br>";
?>