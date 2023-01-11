<?php
include_once("funciones.php");
$dni= "";
$nombre = "";
$email = "";
$provincia = "";
$ciudad="";
$FechaDeConsulta="";
$especialidad="";
if($_POST){
    $turnos= Turnos();
    
 }

?>

<!DOCTYPE html>
<html lang="en">
<head>
<?php include('head.php') ?>
</head>
<body>

            

<?php
        include('menu.php');
        if(isset($turnos)){
          echo $turnos;
      };
?>
     
    <div class="container">   
    <div class="row">
    <form class="row g-3" action ="turnos.php" method="POST" enctype="multipart/form-data">
        <div class="col-md-6">
          <label for="inputEmail4" class="form-label" >Nombre y Apellido</label>
          <input type="text" class="form-control" name ="nombre" value = "<?php echo $nombre ?> " id="inputEmail4">
        </div>
        <div> 
          <label>DNI</label> <input type="number" name="dni" value = "<?php echo $dni ?> " placeholder="44148002"><br>
        </div>
        <div class="col-12">
          <label for="inputAddress" class="form-label"  >Email</label>
          <input type="mail" class="form-control" name="email" value = "<?php echo $email ?> " id="inputAddress" placeholder="usuario@gmail.com ">
        </div>
        <div class="col-md-6">
          <label for="inputCity" class="form-label"  >Ciudad</label>
          <input type="text" class="form-control" value = "<?php echo $ciudad ?> " name="ciudad" id="inputCity">
        </div>
        <div class="col-md-4">
          <label for="inputState" class="form-label" >Provincia</label>
          <select id="inputState" class="form-select" value = "<?php echo $provincia ?> " name="provincia">
            <option selected>Selecciona una provincia</option>
            <option>Mendoza</option>
            <option>San Juan</option>
            <option>San Luis</option>
            <option>Cordoba</option>
            <option>La Pampa</option>
          </select>
        </div>
        <div class="col-4">
            <label for="inputState" class="form-label" >Especialidad</label>
            <select id="inputState" class="form-select" value = "<?php echo $especialidad ?> " name="especialidad">
              <option selected>Elige una especialidad</option>
              <option>Clinica</option>
              <option>Oftalmología</option>
              <option>Odontología</option>
              <option>Cardiología</option>
            </select>
          </div>

        <div class="col-4">
            <label for="inputState" class="form-label"  >Fecha de consulta</label>
            <input type="date" class="form-control" value = "<?php echo $FechaDeConsulta ?> " name="fecha_consulta" id="">
          </div>
          <div class="col-12">
          <input type="submit" class="btn btn-success " value="pedir turno">
          </div>
      </form>
    </div>
  </div>
</div> 
</div>
</body>
</html>