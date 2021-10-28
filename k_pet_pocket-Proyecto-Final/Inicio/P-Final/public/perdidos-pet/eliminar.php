<?php

include("../../../config.php");

$id =$_REQUEST['id'];

$query = "DELETE FROM tabla_perdidos WHERE id='$id'";
$resultado = $conn->query($query);

if($resultado){
    header ("Location: home-perdidos.php");
}
else {
    echo "no se inserto";
}
?>