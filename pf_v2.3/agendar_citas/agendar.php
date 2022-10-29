<?php

include('conex.php');

$nombre_paciente = $_POST['nombre_paciente'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$direccion = $_POST['direccion'];
$fecha_cita = $_POST['fecha_cita'];
$hora_cita = $_POST['hora_cita'];


$conex = mysqli_connect("mysql8001.site4now.net","a8cb5a_project","12481248Mj","db_a8cb5a_project");

$insertar = "INSERT INTO citas (nombre_paciente, correo, telefono, dir, fecha_cita, hora_cita) 
VALUES ('$nombre_paciente','$correo ','$telefono','$direccion','$fecha_cita','$hora_cita') ";

$query = mysqli_query($conex, $insertar);

if($query){

   echo "<script> alert('Su cita se agendo correctamente');
    location.href = '../';
   </script>";

}else if ($query == true)

echo "<script> alert('La cita ya fue asignada');
</script>";

else{

    echo "<script> alert('Creación incorrecta');
    </script>";
}




?>