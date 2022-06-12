<?php 

	session_start();

	if (empty($_SESSION['id'])) {
		header("Location: ../inicioDeSesion");
	}else{

		if ($_SESSION['rol']==2) {
			
		
		?>

		<!-- trayendo cabecera de  codigo html de la carpeta partials--->
		<?php require 'header1.php' ?> 

		
		<h1>BIENVENIDO(a)</h1> 
		<h1>Profesor(a) <?php echo $_SESSION['nombres']; ?></h1>
		<br>
		<h2><a style="color: #3EA668" href="crearevaluacion/">Crear evaluación</a></h2>
		<br>
		<table style="padding: 0 2em;">
			<thead>
				<style type="text/css">
					th{padding: 1em 1em;border: solid #ddd 1px}
					td{text-align: center;padding: 1em 0;border: solid #ddd 1px}
				</style>
				<th>Nombre</th>
				<th>Apellido</th>
				<th>Grado</th>
				<th>Seccion</th>
				<th>Descripción</th>
				<th>Creado</th>
				<th>Cierre</th>
				<th>Público</th>
				<th>Ver respuestas</th>
				<th>Descargar reporte</th>
				<th>Eliminar evaluación</th>
			</thead>
			
				<?php 
		$idprofe = $_SESSION['id'];
		$conn = mysqli_connect('localhost','root','','crud');

		$query = "SELECT * FROM evaluaciones WHERE (id_profesor LIKE '%$idprofe%')";

		$result = mysqli_query($conn, $query);
		while ($row = mysqli_fetch_array($result)) {?>
		<tbody>
			<td><?php echo $row['nombres_profesor'];?></td>
			<td><?php echo $row['apellidos_profesor'];?></td>
			<td><?php echo $row['grado'];?></td>
			<td><?php echo $row['seccion'];?></td>
			<td><?php echo $row['descripcion'];?></td>
			<td><?php echo $row['creado'];?></td>
			<td><?php echo $row['cierre'];?></td>
			
			<?php if($row['publico']==1){ ?>

				<td><form action="cambiar_privacidad.php?id=<?php echo $row['id'];?>" method="POST" >
				<label for="cars"></label>

				<select id="cars" name="privacidad" style="padding: 0.5em;font-size: 1.2em;color: white; background: green">
				  <option value="1" style="background: green; padding: 1em;">Publico</option>
				  <option value="0" style="background: red; padding: 1em;">Privado</option>
				</select>
				<input type="submit" name="guardar" value="guardar">
				</form></td>

			<?php }else{ ?>

				<td><form action="cambiar_privacidad.php?id=<?php echo $row['id'];?>" method="POST" >
				<label for="cars"></label>

				<select id="cars" name="privacidad" style="padding: 0.5em;font-size: 1.2em;color: white; background: red">
				  <option value="0" style="background: red; padding: 1em;">privado</option>
				  <option value="1" style="background: green; padding: 1em;">Publico</option>
				</select>
				<input type="submit" name="guardar" value="guardar">
				</form></td>

			<?php } ?>	

			


			<td><a style="color: #3EA668" href="respuestas/index.php?id=<?php echo $row['id'];?>">Ver respuestas</a></td>


			
			<td><a href="../reportes/reporte.php?id=<?php echo $row['id'];?>"><img src="../img/imprimir.png" width="70px" height="50px" alt=""></a></td>
				

					<td><a href="eliminar_evaluacion.php?id=<?php echo $row['id'];?>"><img src="../img/eliminar.png" width="70px" height="50px" alt=""></a></td>
		</tbody>
		<?php }?>
			
		</table>
		<br>
		<br>
		<br>
		

		<!-- trayendo footer de  codigo html con scripts de la carpeta partials--->
		<?php require '../partials/footer.php' ?> 

		<?php
		}else{

			session_destroy();
			header("refresh:1;url=../inicioDeSesion");
		}
	}
?>

