//registrar.php
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
integrity=
"sha384-KyZXEAg3QhqL
MpG8r+Knujsl5+5hb7x1
LB5TqX7MlqO4BEXm6DQc
bW9dJJgkeBRv"
crossorigin="anonymous"></script>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Registrar Usuario</title>
</head>
<body>
<form action="guardar_usuario.php" method="post">
<label>
<p>Nombre de Usuario</p>
<input type="text" name="usuario"
placeholder="Nombre de usuario"
required>
</label>
<br>
<label>
<p>Contrase~na</p>
<input type="password" name="password"
placeholder="Contrase~na" required>
</label>
<br>
<input type="submit" value="Registrarse">
</form>
</body>
</html>
