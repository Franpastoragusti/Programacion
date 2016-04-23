<html>
<head>
	<title></title>
</head>
<body>
	<?php
	$a=3;
	$b=7;
	$c=9;
	echo "los numeros a comparar son $a $b $c <br>";
	if ($a>=$b){ //en este caso este if engloba el siguiente if y el siguiente else, este { engloba hasta la linea 16
		if($a>=$c){     
			echo "$a es el mayor";
		}else{
			echo "$c es el mayor";//c
		}
	}else{ 
		if($b>=$c){
			echo "$b es el mayor";
		}else{
			echo "$c es el mayor";
		}		
	}
	?>
</body>
</html>