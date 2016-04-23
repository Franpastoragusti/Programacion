<table border="2">
	<tr>
		<?php

		for ($i=1; $i<=4 ; $i++) { 
			echo "<td>$i</td>";

			for ($j=2; $j<=4; $j++) { 
				$result=pow($i, $j);	
				echo "<td>$result</td>";

			}
			echo "</tr>";
		}

		?>
	
</table>