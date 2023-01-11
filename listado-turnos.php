<?php
 require_once("funciones.php");
$datos = listar();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <?php
          include('head.php');
     ?>
</head>
<body>
<?php  include('menu.php'); ?>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">DNI</th>
        <th scope="col">Nombre</th>
        <th scope="col">Especialidad</th>
        <th scope="col">Fecha de consulta</th>
        <th scope="col">Email</th>
      </tr>
    </thead>
    <tbody>
            <?php
                while($mostrar = mysqli_fetch_array($datos)){
                    echo "
                        <tr>
                            <th>". $mostrar['DNI']. "</th>
                            <td>". $mostrar['nombre_y_apellido']. "</td>
                            <td>". $mostrar['especialidad']. "</td>
                            <td>". $mostrar['fecha_de_consulta']. "</td>
                            <td>". $mostrar['email']. "</td>
                            <td><button> <a href=user-update.php?DNI=". $mostrar['DNI'].">MODIFICAR</a></button> </td>
                            <td><button> <a href=user-delete.php?DNI=". $mostrar['DNI'].">ELIMINAR</a></button> </td>
                        </tr>
                    ";
                }

            ?>

    </tbody>

  </table>
</html>