<?php
session_start();
if ($_SESSION['categoria'] !== 'medio') {
header('Location: ./');
exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Panel Medio</title>
</head>
<body>
<h1>Bienvenido, <?php echo $_SESSION['usuario']; ?> (Usuario Medio)</h1>
<p>Puedes buscar usuarios y cambiar contrase~nas de otros usuarios.</p>
<nav>
<ul>
<li><a href="buscar_usuario.php">Buscar Usuarios</a></li>
<li><a href="cambiar_password_admin.php">Cambiar Contrasena de Otros Usuarios</a></li>
<li><a href="cambiar_password.php">Cambiar Mi Propia Contrasena</a></li>
</ul>
</nav>
<p><a href="cerrar.php">Cerrar Sesion</a></p>
</body>
</html>
