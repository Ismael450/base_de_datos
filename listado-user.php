<?php
 require_once("funciones.php");
 $datos=listarUser();
 
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <?php
  include('head.php')
  ?>
</head>
<body>
    <?php
          include('menu.php');
     ?>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">dni</th>
      <th scope="col">Nombre</th>
      <th scope="col">domicilio</th>
      <th scope="col">provincia</th>
      <th scope="col">email</th>
    </tr>
  </thead>
  <?php
  while($mostrar= mysqli_fetch_array($datos)){?>
  <tr>
  <td><?php echo $mostrar['DNI'] ?></td>
  <td><?php echo $mostrar['nombre_y_apellido'] ?></td>
  <td><?php echo $mostrar['domicilio'] ?></td>
  <td><?php echo $mostrar['provincia'] ?></td>
  <td><?php echo $mostrar['email'] ?></td>
  </tr>
 <?php }?>
</table>
    
</body>
</html>