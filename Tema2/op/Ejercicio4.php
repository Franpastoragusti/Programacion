<?php
	$V = array(2, 5, 6, 8, 9, 12);
	$n= sizeof($V);
	$sumai=0;
	$sumap=0;
	for ($i=0; $i<=$n-1; $i++) { 
		
		if ($V[$i]%2==0) {
			$sumap=$sumap+$V[$i];		
			
			}else{
				$sumai=$sumai+$V[$i];		
			}
	}

	echo "La suma de los numeros pares es: $sumap <br>";
	echo "La suma de los numeros pares es: $sumai";



?>