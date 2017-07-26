<?php 
$path = $_SERVER['PHP_SELF'];
$file = dirname($path);
$array = explode("/", $file);
$total = count($array);
$nombre_modulo = $array[$total - 1];
 ?>