<?php


$Encuesta[0] = array('Facultad'=>1,'Sexo'=>1,'Trabaja'=>1, 'Sueldo'=>1300);
$Encuesta[1] = array('Facultad'=>1,'Sexo'=>1,'Trabaja'=>1, 'Sueldo'=>1500);
$Encuesta[2] = array('Facultad'=>0,'Sexo'=>2,'Trabaja'=>1, 'Sueldo'=>1333);
$Encuesta[3] = array('Facultad'=>0,'Sexo'=>2,'Trabaja'=>2, 'Sueldo'=>100);
$Encuesta[4] = array('Facultad'=>0,'Sexo'=>1,'Trabaja'=>2, 'Sueldo'=>200);
$Encuesta[5] = array('Facultad'=>1,'Sexo'=>1,'Trabaja'=>2, 'Sueldo'=>329);
$contHombres=0;
$contMujeres=0;
$HomTrabajan=0;
$MujTrabajan=0;
$numEncuestas=0;
$sumasueldoH=0;
$sumasueldoM=0;
$porMujeresT=0;
$porHombresT=0;
$HomUniversidad=0;
$MujUniversidad=0;
foreach ($Encuesta as $key => $value) {
	$fila=$value;
	$numEncuestas++;
	echo "$numEncuestas";
	for ($i=0; $i <sizeof($Encuesta[$i]); $i++) { 
		if ($Encuesta[$i]['Sexo']==1) {
			$contHombres++;
			if ($Encuesta[$i]['Trabaja']==1) {
				$HomTrabajan++;
				$sumasueldoH=$sumasueldoH+$Encuesta[$i]['Sueldo'];
			}
			if ($Encuesta[$i]['Facultad']==1) {
				$HomUniversidad++;
			}
		}else{
			$contMujeres++;
			if ($Encuesta[$i]['Trabaja']==1) {
				$MujTrabajan++;
				$sumasueldoM=$sumasueldoM+$Encuesta[$i]['Sueldo'];
			}
			if ($Encuesta[$i]['Facultad']==1) {
				$MujUniversidad++;
			}
		}
	}
}
$porHombres=($HomUniversidad/$contHombres)*100;//Hombres
$porMujeres=($MujUniversidad/$contMujeres)*100;//Mujeres
$porMujeresT=($MujTrabajan/$contMujeres)*100;//Mujeres que trabajan
$porHombresT=($HomTrabajan/$contHombres)*100;//Hombres que trabajan

echo "Porcentaje de hombres en la universidad = ".$porHombres."%<br>";
echo "Porcentaje de mujeres en la universidad = ".$porMujeres."%<br>";
echo "Porcentaje de hombres que trabajan = ".$porHombresT."%<br>";
echo "Porcentaje de mujeres que trabajan = ".$porMujeresT."%";




?>