//principal.php
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
integrity=
"sha384-KyZXEAg3QhqL
MpG8r+Knujsl5+5hb7x1
LB5TqX7MlqO4BEXm6DQc
bW9dJJgkeBRv"
crossorigin="anonymous"></script>

<?php session_start();
if (!empty($_SESSION['usuario'])) { ?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>P´agina Principal</title>
<meta name="viewport" content="width=device-width,
initial-scale=1.0">
<link rel="stylesheet" href="style.css">
</head>
<body>
<h1>Bienvenido, <?php echo $_SESSION['usuario']; ?> !</h1>
<button onclick="cerrar()">Cerrar Sesi´on</button>
<script>
function cerrar() {
window.location = "cerrar.php";
}
</script>
</body>
</html>
<?php } else {
header('Location: ./');
}
?>
