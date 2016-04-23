<html>
<body>
 <h1>Formatos de los números enteros</h1>
 <table border = "1" style = "width: 200 px">
   <tr>
  	 <td>Decimal positivo </td>
  	 <td>502</td>
   </tr>
   <tr>
  	 <td>Decimal negativo</td>
  	 <td>
  	   <?php
  	    $entero1 = 502;
  	    echo $entero1
  	   ?>
  	 </td>
   </tr>
   <tr>
  	 <td>Decimal octal (0502)</td>
  	 <td>
  		<?php
  		$entero2 = 322;
  		echo $entero2
  		?>
  	 </td>
   </tr>
   <tr>
	 <td>Decimal hexadecimal<br>
		(0x12)</td>
	 <td>
		<?php
		$entero3 = 18;
		echo $entero3
		?>
	 </td>
   </tr>
 </table>
</body>
</html>