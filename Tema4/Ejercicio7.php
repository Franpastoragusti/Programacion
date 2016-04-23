<?php
$V["Simpson"] = array("padre"=>"Homer","madre"=>"Marge","hijo1"=> "Bart","hijo2"=>"Lisa","hijo3"=>"Maggie",);
$V["Griffin"] = array("padre"=>"Peter" ,"madre"=>"Lois" ,"hijo1"=> "Chris","hijo2"=> "Meg","hijo3"=>"Stewie");

foreach ($V as $key => $value) {
		echo "<br>$key";
		echo "<ul>";
	foreach ($value as $key2 => $value2) {
		echo "<li>$value2</li>";
	}
	echo "</ul>";

}

?>