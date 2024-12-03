<?php
$servidor = 'localhost';
$usuario = 'root';
$contrasena = '';
$base_datos = 'registros';
$conexion = new mysqli($servidor, $usuario, $contrasena,
$base_datos);
if ($conexion->connect_error) {
die('Error de conexion: ' . $conexion->connect_error);
}
?>
