<script src="https://code.jquery.com/jquery-3.6.0.min.js"
integrity=
"sha384-KyZXEAg3QhqL
MpG8r+Knujsl5+5hb7x1
LB5TqX7MlqO4BEXm6DQc
bW9dJJgkeBRv"
crossorigin="anonymous"></script>

<?php
$servidor = 'localhost';
$usuario = 'root';
$contrasena = '';
$base_datos = 'registros';
$puerto = 3306; // Puerto por defecto para MySQL/MariaDB
$conexion = new mysqli($servidor, $usuario, $contrasena, $base_datos, $puerto);
if ($conexion->connect_error) {
die('Error de conexion: ' . $conexion->connect_error);
}
?>