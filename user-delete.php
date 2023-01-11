<?php

$conexion = mysqli_connect("localhost", "root","","clinica") or exit("No se pudo conectar a la BD");

$sql = "DELETE FROM turnos WHERE activo = 0  DNI =".$_GET['DNI'];

//$sql = "UPDATE turnos SET activo = 0  WHERE DNI = ".$_GET['DNI'];

$resultado = mysqli_query($conexion, $sql);

mysqli_close($conexion);

header("location:listado-turnos.php?delete");


?>