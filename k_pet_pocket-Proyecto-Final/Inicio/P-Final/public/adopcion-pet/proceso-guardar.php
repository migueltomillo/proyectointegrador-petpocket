<?php

include("../../../config.php");

 $nombre_mascota = $_POST['nombre_mascota'];
 $tipo_mascota = $_POST['tipo_mascota'];
 $raza_mascota = $_POST['raza_mascota'];
 $contacto = $_POST['contacto'];
 $descripcion = $_POST['descripcion'];
 $imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));

$query = "INSERT INTO tabla_adopcion(nombre_mascota,tipo_mascota,raza_mascota,contacto,descripcion,imagen)
VALUES('$nombre_mascota','$tipo_mascota','$raza_mascota','$contacto','$descripcion','$imagen')";
$resultado = $conn->query($query);

if($resultado){
    header ("Location: home-adopcion.php");
}
else {
    echo "no se inserto";
}
?>