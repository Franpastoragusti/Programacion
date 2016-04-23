<?php
//muestra
$V1= array('Facultad'=>0,'Sexo'=>2,'Trabajo'=>1,'Sueldo'=>100000);
$V2= array('Facultad'=>0,'Sexo'=>1,'Trabajo'=>1,'Sueldo'=>1000);
$V3= array('Facultad'=>1,'Sexo'=>2,'Trabajo'=>1,'Sueldo'=>0);
$V4= array('Facultad'=>1,'Sexo'=>1,'Trabajo'=>0,'Sueldo'=>0);
$V5= array('Facultad'=>0,'Sexo'=>2,'Trabajo'=>1,'Sueldo'=>1000);
$total= array($V1,$V2,$V3,$V4,$V5);
//variables
$hombres=0;//Num total de hombres
$mujeres=0;//Num total de mujeres
$hombresFacultad=0;
$mujeresFacultad=0;
$hombresTrabajo=0;
$mujeresTrabajo=0;
$mujeresSueldo=0;
$hombresSueldo=0;

foreach ($total as $key => $value) {
	$fila=$value;//arrays individuales
	if ($fila['Sexo']==1) {
		$hombres++;
		if ($fila['Facultad']==1) {
		$hombresFacultad++;
		}
		if ($fila['Trabajo']==1) {
		$hombresTrabajo++;
		$hombresSueldo=$hombresSueldo+$fila['Sueldo'];
		}
	}else{
		$mujeres++;
		if ($fila['Facultad']==1) {
		$mujeresFacultad++;
		}
		if ($fila['Trabajo']==1) {
		$mujeresTrabajo++;
		$mujeresSueldo=$mujeresSueldo+$fila['Sueldo'];
		}
	}
}




$pHombresFacultad=($hombresFacultad/$hombres)*100;
echo "El porcentaje de hombres en la Universidad es: $pHombresFacultad %<br>";
$pMujeresFacultad=($mujeresFacultad/$mujeres)*100;
echo "El porcentaje de mujeres en la Universidad es: $pMujeresFacultad %<br>";

$SMH=$hombresSueldo/$hombres;
$pHombresTrabajan=($hombresTrabajo/$hombres)*100;
echo "El porcentaje de hombres que trabajan es: $pHombresTrabajan %, y su sueldo medio es de $SMH euros<br>";
$SMM=$mujeresSueldo/$mujeres;
$pMujeresTrabajan=($mujeresTrabajo/$mujeres)*100;
echo "El porcentaje de mujeres que trabajan es: $pMujeresTrabajan %, y su sueldo medio es de $SMM euros<br>";
//Porcentaje	de	hombres	en	la	Universidad	
//Porcentaje	de	mujeres	en	la	Universidad	
//Porcentaje	de	hombres	que	trabajan	y	sueldo	promedio	
//Porcentaje	de	mujeres	que	trabajan	y	sueldo	promedio	

?>