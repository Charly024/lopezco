<?php
	
	require 'conexion.php';
	
	$sql = "SELECT id, codigo, componente, voltaje, amperaje, material FROM componentes";
	$resultado = $mysqli->query($sql);
	
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/jquery.dataTables.min.css">
		
		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="js/jquery-3.4.1.min.js" ></script>
		<script src="js/bootstrap.min.js" ></script>
		<script src="js/jquery.dataTables.min.js" ></script>
    <title>DataTable</title>
    <script>
			$(document).ready(function() {
			$('#tabla').DataTable();
			} );
			
		</script>
</head>
<body>
<div class="container">
			<div class="row">
				<h1>Empleados</h1>
			</div>
			
			<div class="row">
				<a href="nuevo.php" class="btn btn-primary">Registrar</a>
			</div>
			
			<table id="tabla" class="display" style="width:100%">
				<thead>
					<tr>
						<th>ID</th>
						<th>Codigo</th>
						<th>Componente</th>
						<th>Voltaje</th>
						<th>Amperaje</th>
						<th>Mateiral</th>
					</tr>
				</thead>
				<tbody>
					<?php while($fila = $resultado->fetch_assoc()) { ?>
						<tr>
							<td><?php echo $fila['id']; ?></td>
							<td><?php echo $fila['codigo']; ?></td>
							<td><?php echo $fila['componeete']; ?></td>
							<td><?php echo $fila['voltaje']; ?></td>
							<td><?php echo $fila['amperaje']; ?></td>
							<td><?php echo $fila['material']; ?> </td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
			
		</div>
</body>
</html>