<?php

/*$archivo = fopen("archivos/archivo.doc", "w");

if($archivo){
    fwrite($archivo, "Hola");
    fclose($archivo);
    echo "se escribió el archivo"."<br>";
}*/

$archivoDos = fopen("archivos/archivo2.txt", "a");

if($archivoDos){
    fwrite($archivoDos, "Segundo Archivo\n");
    fclose($archivoDos);
    echo "se escribió algo" . "<br>";
}

/*$archivo = fopen("archivos/archivo.doc", "r");

if($archivo){
    while(($linea = fgets($archivo))!=false){
        echo $linea . "<br>";
    }
    fclose($archivo);
}*/

$archivo = "archivos/archivo.doc";

if(file_exists($archivo)){
   unlink($archivo); //-> eliminar//
   //rename("archivos/archivo.doc", "archivo.doc");//
}