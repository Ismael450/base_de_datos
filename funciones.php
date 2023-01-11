 <?php
 //esto guardaria las cuentas que asociaron con la clinica
 function guardar(){

   $nombre =  $_POST['nombre'];  

   $dni = $_POST['dni']; 

   $email = $_POST['email'];

   $pass =$_POST['pass'];

   $domicilio = $_POST['domicilio'];

   $provincia = $_POST['provincias'];

   $estado= $_POST['estado-civil'];
   //esto hashea la password
   $passNueva =password_hash($pass, PASSWORD_DEFAULT);
   $resultado = password_verify($pass,$passNueva);

include('conexion.php');

$sql = "INSERT INTO `asociarme` (`DNI`, `nombre_y_apellido`, `password`, `email`, `domicilio`, `provincia`, `estado_civil`) VALUES ('$dni', '$nombre', '$passNueva', '$email', '$domicilio', '$provincia', '$estado');";

mysqli_query($conexion, $sql);

mysqli_close($conexion);

$ok= "<div class= 'padre alert alert-success  ' ><div class= 'col'> asociado con exito </div> </div>";
return $ok;
 }

 

 
 
//lsita todos los turnos que se han hecho
function listar(){

   include('conexion.php');

   $sql = "SELECT * FROM turnos ";

  $datos = mysqli_query($conexion, $sql);

   mysqli_close($conexion);

   return $datos;
}
function modificar($dni){

   include("conexion.php");
   $sql = "SELECT * FROM turnos WHERE DNI=".$dni;

   $resultado = mysqli_query($conexion, $sql);

   mysqli_close($conexion);

   return $resultado;
}
//modifica los turnos
 function updateUser($datos)
 {
   $dni =  $datos['DNI'];
   $nombre =  $datos['nombre_y_apellido'];
   $especialidad =  $datos['especialidad'];
   $fechaconsulta =  $datos['fecha_consulta'];
   $email =  $datos['email'];

    include("conexion.php");
    $sql = "UPDATE turnos SET  nombre_y_apellido= '$nombre', email= '$email', especialidad= '$especialidad', fecha_de_consulta= '$fechaconsulta'  WHERE  DNI = '$dni';";

    mysqli_query($conexion, $sql);

    mysqli_close($conexion);
    //$ok = "Usuario modificado!";
    //return $ok;
    header("location:listado-turnos.php?");
     
 }
 //saca los turnos 
function turnos(){
   $dni = $_POST['dni'];

   $nombre = $_POST['nombre'];

   $email = $_POST['email'];

   $provincia = $_POST['provincia'];

   $ciudad = $_POST['ciudad'];  

   $especialidad = $_POST['especialidad'];

   $FechaDeConsulta = $_POST['fecha_consulta'];

 include('conexion.php');

 $sql = "INSERT INTO `turnos` (`DNI`, `nombre_y_apellido`, `email`, `ciudad`, `provincia`, `especialidad`, `fecha_de_consulta`) VALUES ('$dni' ,'$nombre' ,'$email' ,'$ciudad', '$provincia', '$especialidad', '$FechaDeConsulta');";
 mysqli_query($conexion, $sql);

 mysqli_close($conexion);

 $result= "turno sacado con exitos paaa";

 return $result;
  
}
/*login del sistema*/
function validarLogin($datos){
   $email = $datos['email'];
   $pass = $datos['pass'];

   include("conexion.php");

   $sql = "SELECT * FROM asociarme WHERE email = '$email'";

   $resultado = mysqli_query($conexion, $sql);

   mysqli_close($conexion);

   $usuario = mysqli_fetch_array($resultado);

   $passBD = password_verify($pass,$usuario['password']);

   if($passBD ==TRUE){
       session_start();
       $_SESSION = $usuario;
       header('location:cpanel.php');
   }else{
       $errores = ["La contraseña no coincide"];
       return $errores;
   }
    
}
//lista todos los usuarios
function listarUser(){

   include('conexion.php');

   $sql = "SELECT * FROM asociarme ";

  $datos = mysqli_query($conexion, $sql);

   mysqli_close($conexion);

   return $datos;
}
?>