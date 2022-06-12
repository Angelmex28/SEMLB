<?php session_start(); ?>

<!-- trayendo cabecera de  codigo html de la carpeta partials--->
<?php 


	if (empty($_SESSION['id'])) {
		header("Location: ../inicioDeSesion");
	}else{

		if ($_SESSION['rol']==2) {
			
		
		?>

		<!-- trayendo cabecera de  codigo html de la carpeta partials--->
		<?php require 'header1.php' ?> 
		<br>
		<h1>Respuestas de la evaluación:</h1>
		<br>
		<br>
		<table style="padding: 0 2em;">
			<thead>
				<style type="text/css">
					th{padding: 1em 2em;border: solid #ddd 2px}
					td{text-align: center;padding: 1em 0;border: solid #ddd 2px}
				</style>
				<th>Nombre</th>
				<th>Apellido</th>
				<th>Grado</th>
				<th>Sección</th>
				<th>Ver respuestas</th>
			</thead>
			
				<?php 
		$idprofe = $_SESSION['id'];
		$id = $_GET['id'];
		$conn = mysqli_connect('localhost','root','','crud');

		$query = "SELECT * FROM respuestas WHERE (id_evaluacion LIKE '%$id%')";

		$result = mysqli_query($conn, $query);

		while ($row = mysqli_fetch_array($result)) {
			{?>
		<tbody>
			<td><?php echo $row['nombres'];?></td>
			<td><?php echo $row['apellidos'];?></td>
			<td><?php echo $row['grado'];?></td>
			<td><?php echo $row['seccion'];?></td>
			<td><a style="color: #3EA668" href="respuestas.php?id=<?php echo $row['id'];?>">Ver respuestas</a></td>

		</tbody>
		<?php }?>
<?php }?>

			
		</table>
		<br>
		


		<!-- trayendo footer de  codigo html con scripts de la carpeta partials--->
		<?php require '../../partials/footer.php' ?> 

		<?php
		}else{

			session_destroy();
			header("refresh:1;url=../inicioDeSesion");
		}
	}
?>

