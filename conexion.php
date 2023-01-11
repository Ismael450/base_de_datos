<?php
//esto es una preconexion para no repetir todo
    define ("HOST", "localhost");
    define ("USERHOST", "root");
    define ("PASS", "");
    define ("TABLE", "clinica");
    $conexion = mysqli_connect( HOST, USERHOST, PASS, TABLE) or exit("No se pudo conectar a la BD");
?>
