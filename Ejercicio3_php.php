<?php
//Creo un array
//$palabras = array[]
$palabras = array("Hola", "Honduras", "Hechizo", "Homero");
$caracter = "H";
//echo strpos($palabras[2], $caracter);

function encontrarCaracter(array $palabras, string $caracter): bool{
    //recorrer array strpos($mystring, $findme);
    foreach ($palabras as $palabra) {
        if(strpos($palabra, $caracter) === false){
            return false;
        }
    }
    //en el caso que todas las palabras tengan la "h"
    return true;
}

$respuesta =  encontrarCaracter($palabras, $caracter);
($respuesta) ? "True" :" False";
echo $respuesta;



?>