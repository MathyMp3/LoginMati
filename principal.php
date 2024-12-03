//principal.php
<?php
session_start();
if (!empty($_SESSION['usuario'])) {
echo "Bienvenido, " . $_SESSION['usuario'] . "!<br>";
echo "<a href='cerrar.php'>Cerrar Sesi´on</a>";
} else {
header('Location: ./');
}
?>