<?php

include("../../../config.php");

$id =$_REQUEST['id'];

$query = "DELETE FROM tabla_adopcion WHERE id='$id'";
$resultado = $conn->query($query);

if($resultado){
    header ("Location: home-adopcion.php");
}
else {
    echo "no se inserto";
}
?>