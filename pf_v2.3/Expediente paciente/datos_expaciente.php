<?php

require 'conex.php';


$pnombre = $_POST['nombres'];
$papellido = $_POST['apellidos'];
$correo = $_POST['correo'];
$fechanac =$_POST['fechanac'];
$edad = $_POST['edad'];
$genero = $_POST['genero'];
$telefono = $_POST['telefono'];
$tsangre = $_POST['sangre'];

$insertar = "INSERT INTO ex_paciente (nombre,apellido,correo,fecha_nacimiento,edad,genero,telefono,tipo_sangre)
VALUES ('$pnombre','$papellido','$correo', '$fechanac','$edad', '$genero', '$telefono', '$tsangre') ";

$query = mysqli_query($conectar, $insertar);

if($query){

   echo "<script> alert('correcto');
    location.href = 'ex_paciente.html';
   </script>";

}else{
    echo "<script> alert('incorrecto');
    location.href = 'ex_paciente.html';
    </script>";
}



?>
