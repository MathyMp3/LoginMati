//index.php
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
integrity=
"sha384-KyZXEAg3QhqL
MpG8r+Knujsl5+5hb7x1
LB5TqX7MlqO4BEXm6DQc
bW9dJJgkeBRv"
crossorigin="anonymous"></script>

<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Pagina Principal</title>
    <script src="js/jquery-3.2.1.js" charset="utf-8"></script>
</head>
<body>
    <label>
        <p>Nombre de Usuario</p>
        <p><input type="text" id="usuario" placeholder="Usuario", required></p>
    </label>
    <br>
    <label>
        <p>Contrasena</p>
        <p><input type="password" id="password" placeholder="Contrasena" required></p>
</label>
<br>
<p><button onclick="confirmar()">Iniciar Sesion</button></p>
<p><span id="result"></span></p>

<script>
    function confirmar() {
        var user = $('#usuario').val();
        var pass = $('#password').val();
        $.ajax({
            url: 'validar.php',
            type: 'POST',
            data: { usuario: user, password: pass }
}).done(function(resp) {
         switch (parseInt(resp)) {
            case 1:
                location.href ='./principal_avanzado.php';
            break;
                case 2:
                    location.href = './principal_medio.php';
                    break;
                case 3:
                    location.href = './principal_basico.php';
                    break;
default:$("#result").html("<strong>¡Error!</strong>Usuario o contrasena incorrectos.");}
});
}
</script>
</body>
</html>
