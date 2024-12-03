//validar.php
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
integrity=
"sha384-KyZXEAg3QhqL
MpG8r+Knujsl5+5hb7x1
LB5TqX7MlqO4BEXm6DQc
bW9dJJgkeBRv"
crossorigin="anonymous"></script>

<?php
session_start();
if (isset($_POST['usuario']) && isset($_POST['password'])) {
include 'conexion.php';
$usuario = mysqli_real_escape_string($conexion,
 $_POST['usuario']);
$password = mysqli_real_escape_string($conexion,
 $_POST['password']);
$consulta = "SELECT u.*, c.nombre AS categoria
FROM usuarios u
JOIN categoria c ON u.categoria_id = c.id
WHERE u.nombre = '$usuario'"; // la variable vajunto signo peso
$resultado = $conexion->query($consulta);
if ($resultado->num_rows > 0) {
$usuario_datos = $resultado->fetch_assoc();
if (password_verify($password,
 $usuario_datos['password'])) {
$_SESSION['usuario'] = $usuario;
$_SESSION['categoria'] = $usuario_datos['categoria'];
switch ($usuario_datos['categoria']) {
case 'avanzado':
echo 1;
break;
case 'medio':
echo 2;
break;
case 'b´asico':
echo 3;
break;
}
} else {
    echo 0; // Contrasena incorrecta
    }
    } else {
    echo 0; // Usuario no encontrado
    }
    }
    ?>