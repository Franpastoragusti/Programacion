<html>
<table border=1>
<?php
$V[0] = array("Rockband"=> "Rockband", "Song1"=>"Song1", "Song2"=>"Song2", "Song3"=>"Song3");
$V[1] = array("Rockband"=> "Beatles", "Song1"=>"Love Me Do", "Song2"=>"Hey Jude", "Song3"=>"Helter Skelter");
$V[2] = array("Rockband"=> "Rolling Stones", "Song1"=>"Waiting on a Friend", "Song2"=>"Angle", "Song3"=>"Yesterdey's Papers");
$V[3] = array("Rockband"=> "Eagles", "Song1"=>"Life in the Fast Lane", "Song2"=>"Hotel California", "Song3"=>"Best of My Love");
$cont=0;

foreach ($V as $key => $value) {
		echo "<tr>";

	foreach ($value as $key2 => $value2) {
		echo "<td>$value2</td> ";
	}
	echo "</tr>";

}
?>
</table>
</html>