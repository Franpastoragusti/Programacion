<?php
$cadena= "\ \ 1 + 2 / 3 * 2 : 2-3 / 4 * 3";
$eliminar=array("\ ","+","/","*",":","-");
$nuevacadena=str_replace($eliminar," ",$cadena);
echo $nuevacadena;
?>