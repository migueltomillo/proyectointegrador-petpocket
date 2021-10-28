<?php

include("../../../config.php");

 $nombre_mascota = $_POST['nombre_mascota'];
 $tipo_mascota = $_POST['tipo_mascota'];
 $descripcion = $_POST['descripcion'];
 $imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));

$query = "INSERT INTO tabla_presumir(nombre_mascota,tipo_mascota,descripcion,imagen)
VALUES('$nombre_mascota','$tipo_mascota','$descripcion','$imagen')";
$resultado = $conn->query($query);

if($resultado){
    header ("Location: home-principal.php");
}
else {
    echo "no se inserto";
}
?>