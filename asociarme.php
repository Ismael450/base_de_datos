    <?php
    include_once("funciones.php");

    $nombre = "";  
    $dni = "" ; 
    $email = "" ;
    $pass ="";
    $domicilio = "";
    $provincia = "";
    $estado= "";
    if($_POST){
        $errores = guardar($_POST);
    }
?>   
<!DOCTYPE html>
<html lang="es">

<head>
<?php include('head.php') ?>
<style>
 
</style>

</head>

<body>

    <!-- NO BORRAR / MENU DEL SITIO -->

    <?php
        include('menu.php');
           
        if(isset($errores)){
            echo $errores;
        };
       
     ?>
    <form action= "asociarme.php" method="POST" enctype="multipart/form-data">
    <label>Nombre y Apellido</label><input type="text" name="nombre" value = "<?php echo $nombre?>"><br>
    <label>DNI</label> <input type="number" name="dni" value = "<?php echo $dni?>"  ><br>
    <label for="">Email</label><input type="email" name="email" value = "<?php echo $email?>"><br>
    <label>Password</label> <input type="password" name="pass" value = "<?php echo $pass?>" ><br>
    <label>Domicilio</label>
    <input type="text" name="domicilio" value = "<?php echo $domicilio?>">
    <select name="provincias" value = "<?php echo $provincia?>" >
        <option value="" disable selected>Elige una provincia</option>
        <option value="MZA">Mendoza</option>
        <option value="SSJ">San Juan</option>
        <option value="SSL">San Luis</option>
        <option value="CAT">Catamarca</option>
    </select>
    <br>
    
    <label for="">Estado civil</label>
    <input type="radio" name="estado-civil" value="s" value = "<?php echo $estado?>"><label for="">Soltero</label>
    <input type="radio" name="estado-civil" value="c" value = "<?php echo $estado?>"><label for="">casado</label>
    <input type="radio" name="estado-civil" value="v" value = "<?php echo $estado?>"><label for="">Viudo</label> 
    <input type="submit" class="btn btn-success " value="Enviar">
     
</body>
    </html>