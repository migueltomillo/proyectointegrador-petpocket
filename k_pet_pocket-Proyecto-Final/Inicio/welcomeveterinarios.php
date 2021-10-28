<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: indexveterinario.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido</title>
</head>
<body>
    <?php echo "<h1>Bienvenido " . $_SESSION['username'] . "</h1>"; ?>
    <a href="logoutveterinarios.php">Cerrar Sesión</a>
</body>
</html>