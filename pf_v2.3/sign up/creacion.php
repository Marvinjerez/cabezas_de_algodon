<?php

include('conex.php');

$user = $_POST['usuario'];
$pass = $_POST['contraseña'];

$conex = mysqli_connect("mysql8001.site4now.net","a8cb5a_project","12481248Mj","db_a8cb5a_project");

$insertar = "INSERT INTO users (usuario,contraseña) VALUES ('$user', '$pass') ";

$query = mysqli_query($conex, $insertar);

if($query){

   echo "<script> alert('Creación Correcta');
    location.href = '../login/login.html';
   </script>";

}else{
    echo "<script> alert('Creación incorrecta');
    location.href = 'sign_up.html';
    </script>";
}



?>