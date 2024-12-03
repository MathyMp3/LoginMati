//guardar_usuario.php
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
integrity=
"sha384-KyZXEAg3QhqL
MpG8r+Knujsl5+5hb7x1
LB5TqX7MlqO4BEXm6DQc
bW9dJJgkeBRv"
crossorigin="anonymous"></script>

<?php
if (isset($_POST['usuario']) && isset($_POST['password'])) {
include 'conexion.php';
$usuario = $conexion->real_escape_string($_POST['usuario']);
$password = password_hash($_POST['password'],
PASSWORD_DEFAULT);
$query = "INSERT INTO usuarios (nombre, password)
VALUES ('$usuario', '$password')";
if ($conexion->query($query) === TRUE) {
header('Location: ./');
} else {
echo "Error al registrar usuario: " . $conexion->error;
}
}
?>