<?php
date_default_timezone_set('America/Argentina/Buenos_Aires');
$hora = date("H:i:s");
$archivo = fopen("ingresos.txt", "a");

if($archivo){
    $mensaje="Se Ingresó en esta hora exácta:".$hora."\n";
    fwrite($archivo,$mensaje);
    fclose($archivo);
    echo "nuevo ingreso detectado";
}