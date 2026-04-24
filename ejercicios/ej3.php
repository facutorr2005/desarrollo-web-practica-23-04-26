<?php

$archivo = fopen("miarchivo.txt", "a");

if($archivo){
    fwrite($archivo, "\n Chau Mundo, me voy a Jupiter :D");
    fclose($archivo);
}