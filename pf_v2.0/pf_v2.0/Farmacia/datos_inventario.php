
<?php

require 'conex.php';

$nombre_medica = $_POST['nombre_medica'];
$medida = $_POST['medida'];
$precio = $_POST['precio'];


$inventario = "INSERT INTO farmacia (nombre_medica, medida, precio) VALUES ('$nombre_medica','$medida','$precio')";

$query = mysqli_query($conectar, $inventario);

if($query){

   echo "<script> alert('correcto');
    location.href = 'agregar_medicamentos.html';
   </script>";

}else{
    echo "<script> alert('incorrecto');
    location.href = 'agregar_medicamentos.html';
    </script>";
}



?>