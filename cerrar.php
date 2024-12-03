//cerrar.php
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
integrity=
"sha384-KyZXEAg3QhqL
MpG8r+Knujsl5+5hb7x1
LB5TqX7MlqO4BEXm6DQc
bW9dJJgkeBRv"
crossorigin="anonymous"></script>

<?php
session_start();
session_destroy();
header('Location: ./');
?>