<?php

if(isset($_POST['guardar'])){
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $nombreCompleto = $nombre . " " . $apellido;
    $archivo = fopen("invitados.txt", "a");
    if($archivo){
        fwrite($archivo,"Nombre: ". $_POST['nombre'].", Apellido: ".$_POST['apellido']."\n");
        fclose($archivo);
        echo "Invitado Agregado."."<br>";
        echo '<a href= "formulario.html">Volver al Formulario</a>';
    }
}