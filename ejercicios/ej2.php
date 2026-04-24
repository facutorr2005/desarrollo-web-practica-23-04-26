<?php

$archivo = fopen("miarchivo.txt", "r");

if($archivo){
while (($linea = fgets($archivo)) !==false){
    echo $linea . "<br>";
}
fclose($archivo);
}