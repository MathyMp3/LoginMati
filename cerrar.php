//cerrar.php
<?php
session_start();
session_destroy();
header('Location: ./');
?>