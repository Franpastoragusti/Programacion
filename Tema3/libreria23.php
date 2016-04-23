<?php

function sumaVectores(&$V,$H){

for ($i=0; $i<sizeof($V); $i++) { 
	$V[$i]=$V[$i]+$H[$i];
}

}

function sumaParesVector(&$V,$num){

for ($i=0; $i<sizeof($V); $i++) { 
	if ($V[$i]%2==0) {
		$V[$i]=$V[$i]+$num;
	}
	
}
}

function sumaPosicionesParesVector(&$V,$num){
for ($i=0; $i<sizeof($V); $i++) { 
	if ($i%2==0) {
		$V[$i]=$V[$i]+$num;
	}
}
}

function mediaPares($V,&$media){
$e=0;
for ($i=0; $i<sizeof($V); $i++) { 
	if ($V[$i]%2==0) {
		$media=$media+$V[$i];
		$e++;
	}
}
$media=$media/$e;
echo $media."<br>";
}

function mediaImpares($V,&$media){
$e=0;
$media=0;
for ($i=0; $i<sizeof($V); $i++) { 
	if ($V[$i]%2!=0) {
		$media=$media+$V[$i];
		$e++;
	}
}
$media=$media/$e;
echo $media;
}
?>