<?php

include("../../../config.php");

$id =$_REQUEST['id'];

$query = "DELETE FROM tabla_presumir WHERE id='$id'";
$resultado = $conn->query($query);

if($resultado){
    header ("Location: home-principal.php");
}
else {
    echo "no se inserto";
}
?>