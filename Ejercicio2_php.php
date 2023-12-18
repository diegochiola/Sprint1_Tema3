<?php
//Dado el siguiente array
$x = array(10, 20, 30, 40, 50, 60);

//imprimir por pantalla $x
var_dump($x);//incluye el tipo de valor
//print_r($x); solo muestra su contenido en cada psoicion

//echo $x[0]; imprimir una sola posicion

//eliminar un elemento
unset ($x[1]);
print_r($x);

//claves enteras deben ser normalizadas 



?>