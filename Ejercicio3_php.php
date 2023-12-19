<?php
//Creo un array
//$palabras = array[]
$palabras = array("Hola", "Honduras", "Hechizo", "Homero");
$caracter = "H";


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

//Prueba 1 (todas las palabras con el caracter "h").
$respuesta =  encontrarCaracter($palabras, $caracter);
echo ($respuesta) ? "Todas las palabras del array contienen la letra $caracter. </br>" :"No todas las palabras del array contienen la letra $caracter. </br>";


//Prueba 2 (no todas las palabras con el caracter "h")
$palabras = array("Morir", "Honduras", "Migas", "Homero");
$caracter = "H";
$respuesta =  encontrarCaracter($palabras, $caracter);
//echo($respuesta) ? "True </br>" :"False </br>";
echo ($respuesta) ? "Todas las palabras del array contienen la letra $caracter. </br>" :"No todas las palabras del array contienen la letra $caracter. </br>";



?>