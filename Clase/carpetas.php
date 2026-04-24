<?php

/*
mkdir -> crear carpeta
rmdir -> eliminar una carpeta vacía
opendir -> abrir una carpeta
readdir -> leer una carpeta
closedir -> cerrar una carpeta
*/
/*
$carpeta = "/archivos/Nueva Carpeta";

if(!file_exists($carpeta)){
    mkdir($carpeta);
    echo "Se Creo La Carpeta";
}else{
    echo "La Carepta Ya Existe";
}
*/

$archivos = opendir("Nueva Carpeta");
while(($arc=readdir($archivos))!=false){
    echo $arc . "<br>";
}
closedir($archivos);