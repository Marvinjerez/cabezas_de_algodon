<?php 

$host = "mysql8001.site4now.net";
$user = "a8cb5a_project";
$clave = "12481248Mj";
$bd  = "db_a8cb5a_project";

$conectar = mysqli_connect($host,$user,$clave,$bd);


 ?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="icon" href="../img/icon.png">
  <link rel="stylesheet" href="style_tablas.css">
  <link rel="stylesheet" media="screen and (max-width:768px)" href="../displays/mobile.css" />
  <title>Farmacia</title>
</head>
<body>
<div class="area"></div><nav class="main-menu">
            <ul>
                <li>
                    <a href="">
                        <i class="fa fa-home fa-2x"></i>
                        <span class="nav-text">
                            Dashboard
                        </span>
                    </a>
                  
                </li>
                <li class="has-subnav">
                    <a href="../creacion_usuario/creacion_user.html">
                       <i class="fa fa-list fa-2x"></i>
                        <span class="nav-text">
                            Creacion de Usuario
                        </span>
                    </a> 
                </li>

                <li class="has-subnav">
                    <a href="../Expediente paciente/ex_paciente.html">
                       <i class="fa fa-list fa-2x"></i>
                        <span class="nav-text">
                            Creacion Expediente Medico
                        </span>
                    </a> 
                </li>

                <li class="has-subnav">
                    <a href="../Farmacia/agregar_medicamentos.html">
                       <i class="fa fa-list fa-2x"></i>
                        <span class="nav-text">
                            Llenar Inventario
                        </span>
                    </a> 
                </li>

                <li class="has-subnav">
                    <a href="../Ficha Medica/ficha_medica.html">
                       <i class="fa fa-list fa-2x"></i>
                        <span class="nav-text">
                            Crear Ficha Medica
                        </span>
                    </a> 
                </li>


                <li>
                    <a href="../tablas/tabla_usuario.php">
                        <i class="fa fa-bar-chart-o fa-2x"></i>
                        <span class="nav-text">
                            Tabla Usuarios
                        </span>
                    </a>
                </li>
                <li>
                    <a href="../tablas/tabla_expediente.php">
                        <i class="fa fa-bar-chart-o fa-2x"></i>
                        <span class="nav-text">
                            Tabla Expediente Medico
                        </span>
                    </a>
                </li>
               
                <li>
                    <a href="../tablas/tabla_farmacia.php">
                        <i class="fa fa-bar-chart-o fa-2x"></i>
                        <span class="nav-text">
                            Tabla Farmacia
                        </span>
                    </a>
                </li>

                <li>
                    <a href="../tablas/tabla_ficha.php">
                        <i class="fa fa-bar-chart-o fa-2x"></i>
                        <span class="nav-text">
                            Tabla Ficha Medica
                        </span>
                    </a>
                </li>

                <li>
                    <a href="../tablas/tabla_citas.php">
                        <i class="fa fa-bar-chart-o fa-2x"></i>
                        <span class="nav-text">
                            Calendario Citas
                        </span>
                    </a>
                </li>

                <li>
                    <a href="https://drive.google.com/file/d/1jJkowE2rIdN3j8lUhcwBr-twjNmfhVG0/view?usp=sharing">
                       <i class="fa fa-info fa-2x"></i>
                        <span class="nav-text">
                            Manual
                        </span>
                    </a>
                </li>
            </ul>

            <ul class="logout">
                <li>
                   <a href="../Index/index.html">
                         <i class="fa fa-power-off fa-2x"></i>
                        <span class="nav-text">
                            Vista de Usuarios
                        </span>
                    </a>
                </li>  
            </ul>

        </nav>


        </div>
    
<br>
    
	<table>
		<tr>
		<h1>Expedientes Medicos</h1>
			<td>ID</td>
			<td>Fecha Visita</td>
			<td>Motivo</td>
			<td>Nombre Del Medico</td>
            <td>Nombre Del Paciente</td>
			<td>Examenes Realizados</td>
			<td>Resultado Examenes</td>
			<td>Diagnostico</td>
			<td>Nombre del Medicamento </td>
			<td>Tiempo De Aplicacion</td>	
			<td>Observaciones en la visita</td>	
		</tr>

		<?php 

		$sql="SELECT * from ficha_medica";
		$result=mysqli_query($conectar,$sql);

		while($mostrar=mysqli_fetch_array($result)){
		 ?>

		<tr>
			<td><?php echo $mostrar['id_fichamed'] ?></td>
			<td><?php echo $mostrar['fecha_visita'] ?></td>
			<td><?php echo $mostrar['motivo_visita'] ?></td>
			<td><?php echo $mostrar['nombre_med'] ?></td>
			<td><?php echo $mostrar['nombre_paciente'] ?></td>
			<td><?php echo $mostrar['examenes_reali'] ?></td>
			<td><?php echo $mostrar['resul_examenes'] ?></td>
			<td><?php echo $mostrar['diagnostico'] ?></td>
			<td><?php echo $mostrar['nom_medicamento'] ?></td>
			<td><?php echo $mostrar['tiempo_apli'] ?></td>
			<td><?php echo $mostrar['observaciones'] ?></td>

		</tr>
	<?php 
	}
	 ?>
	</table>

</body>
</html>