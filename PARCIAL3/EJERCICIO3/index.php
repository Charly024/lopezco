<?php
	include	 "conexion.php";
	$consultaSQL = "select id, codigo, componente, voltaje, amperaje, material from componentes";
	$consulta = $con -> prepare($consultaSQL);
	$consulta -> execute();
	$resultado = $consulta->fetchAll(PDO::FETCH_OBJ);
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
				<h1>Componentes</h1>
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
					<?php  
					for ($i=0; $i<=count($resultado)-1; $i++) {
					?>
						<tr>
						<td><?php printf($resultado[$i]->id);?></td>
						<td><?php printf($resultado[$i]->codigo);?></td>
						<td><?php printf($resultado[$i]->componente);?></td>
						<td><?php printf($resultado[$i]->voltaje);?></td>
						<td><?php printf($resultado[$i]->amperaje);?></td>
						<td><?php printf($resultado[$i]->material);?></td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
			
		</div>
</body>
</html>