<?php

include('conex.php');

$user = $_POST['usuario'];
$pass = $_POST['contraseña'];

session_start();

$_SESSION['usuario']=$user;

$conex = mysqli_connect("mysql8001.site4now.net","a8cb5a_project","12481248Mj","db_a8cb5a_project");

$consulta1 = "SELECT * FROM users WHERE usuario='$user' AND contraseña='$pass'";

$query = mysqli_query($conex, $consulta1);

$filas=mysqli_fetch_array($query);


if($filas['id_rol']==1){ //admin
  
  header("location:../dashboard/dashboard.html");
    
}else if ($filas['id_rol']==2){
  header("location:../index/index.html");
}


else{
?>
<?php
include("login.html");
?>
  <h4>ERROR EN LA AUTENTICACION</h4>
  <?php
}
mysqli_free_result($query);
mysqli_close($rol);