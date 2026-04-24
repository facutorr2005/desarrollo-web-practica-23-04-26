<?php

$archivo = fopen("miarchivo.txt", "w");

if($archivo){
    fwrite($archivo, "Hola Mundo, Soy Facu :P");
    fclose($archivo);
    echo "Se Escribió el Archivo ;)";
}