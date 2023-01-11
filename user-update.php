<?php
    include_once("funciones.php");
    $dni =  "";
    $nombre =  "";
    $especialidad =  "";
    $fechaconsulta =  "";
    $email = "";
if(isset($_GET["DNI"])){
    // esto va a buscar en la BD solo 1 usuario correspondiente al ID seleccionado
    $datos = modificar($_GET["DNI"]);
    
}
    //Se va a ejecuar cuando el formulario reenvie datos para modificar el usuario
if($_POST){
    $errores = updateUser($_POST);
}
if(isset($_GET)){
    echo "Usuario modificado con éxito";
}
if(isset($_GET['delete'])){
    echo "Usuario eliminado";
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <?php include('head.php') ?>
</head>

<body>
<?php  include('menu.php');?>
    <?php 
        if(isset($errores)){
            echo $errores;
        };
// fectch array va a  transformar todo lo que hay $datos porque viene como objeto
// y necesitamos usar array asociativo
        if($_GET){
            while($consulta = mysqli_fetch_array($datos)){
                $dni =  $consulta['DNI'];
                $nombre =  $consulta['nombre_y_apellido'];
                $especialidad =  $consulta['especialidad'];
                $fechaconsulta =  $consulta['fecha_de_consulta'];
                $email =  $consulta['email'];
            }
        }
         

    ?>
    <form action="user-update.php" method="POST" enctype="multipart/form-data">
        <!--En los values hacemos un echo de cada una de las variables
    porque son ellas las que tiene la info de la BD -->
        <input type="text" name="DNI" value="<?php echo $dni ?>" hidden>
        <label for=""><h6>Nombre</h6></label>  <input type="text" name="nombre_y_apellido" value="<?php echo $nombre ?>">  <br>
        <div class="col-8">
            <label for="inputState" class="form-label" > <h6>Especialidad</h6</label>
            <select id="inputState" class="form-select" value = "<?php echo $especialidad ?> " name="especialidad">
              <option selected>Elige una especialidad</option>
              <option>Clinica</option>
              <option>Oftalmología</option>
              <option>Odontología</option>
              <option>Cardiología</option>
            </select>
          </div>
        <label for=""> <h6>Fecha de consulta</h6></label> <input type="date" name="fecha_consulta" value="<?php echo $fechaconsulta ?>">  <br>
        <label for=""><h6>Email</h6></label> <input type="email" name="email" value="<?php echo $email ?>">  <br>
        
        <input type="submit" value="MODIFICAR">
    </form>
</body>
</html>