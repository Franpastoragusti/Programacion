<?php
	$var =1;
	$m =1;
	$x = true ;
	do {
		if (!$x ){
		$var =2;
		}
		do {
			$m++;
		} while ($m <3);
		$x = false ;
	} while ( $var != 2 );
	echo $m;

?>