	<?php
		$V = array(2, 7, 15, 7, 20, 7);
		$max = $V[0];
		for ($i=0; $i<=5 ; $i++) { 
			
			if ($V[$i]%2==0) {
				if ($V[$i]>$max) {
				$max=$V[$i]; 
				}
			}
		}
		echo "El maximo es $max";
	?>