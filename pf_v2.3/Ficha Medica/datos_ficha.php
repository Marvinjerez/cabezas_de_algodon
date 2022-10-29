
<?php

require 'conex_ficha.php';

$fecha_vis = $_POST['fecha_vis'];
$motivo = $_POST['motivo'];
$nombre_doc =$_POST['nombre_doc'];
$nom_paciente = $_POST['nomPaciente'];
$examenes = $_POST['examenes'];
$resulexam = $_POST['resulexam'];
$diagnostico = $_POST['diagnostico'];
$medicamento = $_POST['medicamento'];
$dosis = $_POST['dosis'];
$tiempoapli = $_POST['tiempoapli'];
$observaciones = $_POST['observacion'];


$insertarficha = "INSERT INTO ficha_medica (fecha_visita,motivo_visita, nombre_med, nombre_paciente, 
                                            examenes_reali, resul_examenes, diagnostico, nom_medicamento, tiempo_apli, observaciones)
                                                    VALUES ('$fecha_vis','$motivo','$nombre_doc', 
                                                    '$nom_paciente', '$examenes', '$resulexam', '$diagnostico',
                                                    '$dosis', '$tiempoapli', '$observaciones')";

$query = mysqli_query($conectar, $insertarficha);

if($query){

   echo "<script> alert('correcto');
    location.href = 'exp_paciente.html';
   </script>";

}else{
    echo "<script> alert('incorrecto');
    location.href = 'exp_paciente.html';
    </script>";
}



?>