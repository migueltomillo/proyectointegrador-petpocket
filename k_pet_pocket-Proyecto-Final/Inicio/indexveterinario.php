<?php 

include 'config.php';

session_start();

error_reporting(0);

if (isset($_SESSION['username'])) {
    header("Location: welcomeveterinarios.php");
}

if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$password = md5($_POST['password']);

	$sql = "SELECT * FROM veterinarios WHERE email='$email' AND password='$password'";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['username'] = $row['username'];
		header("Location: welcomeveterinarios.php");
	} else {
		echo "<script>alert('Lo siento, el correo o la contraseña son incorrectos.')</script>";
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="http://localhost/k_pet_pocket-Proyecto-Final/Inicio/estilo/style.css">

	<title>Inicio Sesión Veterionarios</title>
</head>
<body>
	<div class="container">
		<form action="" method="POST" class="login-email">
			<p class="login-text" style="font-size: 2rem; font-weight: 800;">Inicio de Sesión para Veterinarios</p>
			<div class="input-group">
				<input type="email" placeholder="Correo Electronico" name="email" value="<?php echo $email; ?>" required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Contraseña" name="password" value="<?php echo $_POST['password']; ?>" required>
			</div>
			<div class="input-group">
				<button name="submit" class="btn">Iniciar Sesión</button>
			</div>
		    <p class="login-register-text">¿No estas registrado aún? <a href="registerveterinarios.php">Registrate Aquí</a>.</p>
            <p class="login-register-text">Si no eres Veterinario <a href="index.php">Presiona aquí</a>.</p>
		</form>
	</div>
</body>
</html>