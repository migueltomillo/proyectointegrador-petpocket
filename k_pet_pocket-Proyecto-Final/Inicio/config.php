<?php 

$server = "localhost";
$user = "root";
$pass = '';
$database = "pet_pocket";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Erro de conexción.')</script>");
}

?>