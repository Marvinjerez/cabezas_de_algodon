<?php

include('conex.php');

$user = $_POST['usuario'];
$pass = $_POST['contraseña'];
$id_rol = $_POST['id_rol'];

$conex = mysqli_connect("mysql8001.site4now.net","a8cb5a_project","12481248Mj","db_a8cb5a_project");

$insertar = "INSERT INTO users (usuario,contraseña,id_rol) VALUES ('$user', '$pass','$id_rol') ";

$query = mysqli_query($conex, $insertar);

if($query){

   echo "<script> alert('Creación Correcta');
    location.href = '../creacion_usuario/creacion_user.html';
   </script>";

}else if ($query == true)

echo "<script> alert('El usuario ya existe');
</script>";

else{

    echo "<script> alert('Creación incorrecta');
    </script>";
}




?>