<?php
  include('funciones.php');
  $email= "";
  $pass= "";
  if($_POST){
    $errores = validarLogin($_POST);
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
<?php include('head.php') ?>
</head>
<body>
    <?php
    //esto incluye el menu y se asocian todos
        include('menu.php');
    ?>
  <div class="container">
    <form action=" login.php" method= "POST" class ="row g-3 mt-3">
      <div class="col-6">
       <label for="emailImput" class="form-label">Email</label> 
       <input type="email" name="email" id="emailImput" class="form-control" placeholder="Escribe tu email"> <br>
      </div>
      <div class="col-6">
       <label for="inputPass" class="form-label">Contraseña</label>
       <input type="password" name="pass" class="form-control" id="inputPass" placeholder="Escribe tu contraseña"><br>
      </div>
      <div>
        <input type="submit" value="Ingresar" class="col-4 btn btn-primary"><br>
        <span>Olvidaste tu contraseña?<a href="#">Recuperar Contraseña</a></span>
      </div>
     
     <div class="my-3">
      <span>No tenes cuenta? <a href="asociarme.php">Registrate</a></span><br>
      

     </div>
    </form>
  </div>
</body>
</html>
