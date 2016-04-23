<?php
function factorial($num){
		$fac=$num;
	echo "!$num=";
		for ($i=1; $i<$num ; $i++) { 
				$fac=$fac*$i;
				echo "$i*";	
		}	
	echo "$num=$fac <br>";
}




factorial(5);

factorial (16);
?>