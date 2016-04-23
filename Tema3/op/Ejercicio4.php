<?php
function lista(){

$n=func_num_args();
$V=func_get_args();
echo "<ol>";
for ($i=0; $i<$n; $i++) { 
	echo "<li>$V[$i]</li>";
	}
	echo "</ol>";
}

lista(3,"lista","dos","mio");
?>