//index.php
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Inicio de Sesion</title>
</head>
<body>
<form action="validar.php" method="post">
<label>
<p>Nombre de Usuario</p>
<input type="text" name="usuario"
placeholder="Usuario" required>
</label>
<br>
<label>
<p>Contrase~na</p>
<input type="password" name="password"
placeholder="Contrasena" required>
</label>
<br>
<input type="submit" value="Iniciar Sesion">
</form>
</body>
</html>
