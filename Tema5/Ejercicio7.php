<?php
$cadena='www.example.com/public_html/index.php';


$cadenamod=strrchr($cadena, '/');
echo substr($cadenamod, 1);
?>