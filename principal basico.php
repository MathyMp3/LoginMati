<?php
session_start();
if ($_SESSION['categoria'] !== 'basico') {
header('Location: ./');
exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Panel Basico</title>
</head>
<body>
<h1>Bienvenido, <?php echo $_SESSION['usuario']; ?> (Usuario Basico)</h1>
<p>Puedes cambiar tu propia contrase~na.</p>
<nav>
<ul>
<li><a href="cambiar_password.php">Cambiar Contrasena</a></li>
</ul>
</nav>
<p><a href="cerrar.php">Cerrar Sesion</a></p>
</body>
</html>