<?php

function listar($V){
	foreach ($V as $key => $value) {
		echo "$key:$value<br>";
	}

}



$V = array(
	"PORTERO"=>"DIEGO ALVES",
	"DEFENSA1"=>"CANCELO",
	"DEFENSA2"=>"VEZO",
	"DEFENSA3"=>"SANTOS",
	"DEFENSA4"=>"MUSTAFI",
	"CENTROCAMPISTA1"=>"FEGHOULI",
	"CENTROCAMPISTA2"=>"PAREJO",
	"DELANTERO1"=>"NEGREDO",
	"DELANTERO2"=>"PACO	ALCÁCER",
	"DELANTERO3"=>"PIATTI",
	"DELANTERO4"=>"BAKKALI"
	 );



listar($V);
?> 