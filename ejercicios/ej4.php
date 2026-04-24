<?php
$archivo = "miarchivo.txt";

if(file_exists($archivo)){
    rename("miarchivo.txt", "../Clase/archivos/Nueva Carpeta/miarchivo.txt");
}