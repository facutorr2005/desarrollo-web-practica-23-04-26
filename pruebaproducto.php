<?php

$archivo = fopen("ventas.doc","w");
$producto = "Formis";
$precio = 1800;
$cantidad = 5;

if($archivo){
    $mensaje="Se Vendió el Producto: ".$producto." en " . $cantidad . " unidad/es con un total de: ". $precio * $cantidad;
    fwrite($archivo,$mensaje);
    fclose($archivo);
    echo "producto cargado";
}