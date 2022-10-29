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
  <link rel="stylesheet" media="screen and (max-width:768px)" href="../displays/mobile.css" />
  <link rel="stylesheet" href="style_farmacia.css">
  <title>Inventario Farmacia</title>
</head>
<body>
    
<ul>
        <li><a class="active" href="../dashboard/dashboard.html">Dashboard</a></li>
        <li><a href="../Ficha Medica/ficha_medica.html">Ficha Medica</a></li>
        <li><a href="../Expediente paciente/ex_paciente.html">Expediente Paciente</a></li>
        <li><a href="../Farmacia/farmacia.php">Farmacia</a></li>
      </ul>
<br>
    

	<table>
		<tr>
        <h1>Inventario Medicamentos</h1>
			<td>ID</td>
			<td>Nombre del Medicamento</td>
			<td>Medida</td>
			<td>Precio</td>	
		</tr>

		<?php 

		$sql="SELECT * from farmacia";
		$result=mysqli_query($conectar,$sql);

		while($mostrar=mysqli_fetch_array($result)){
		 ?>

		<tr>
			<td><?php echo $mostrar['id_medicamento'] ?></td>
			<td><?php echo $mostrar['nombre_medica'] ?></td>
			<td><?php echo $mostrar['medida'] ?></td>
			<td><?php echo $mostrar['precio'] ?></td>
		</tr>
	<?php 
	}
	 ?>
	</table>

</body>
</html>