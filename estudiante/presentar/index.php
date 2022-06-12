<?php session_start(); ?>

<!-- trayendo cabecera de  codigo html de la carpeta partials--->
<?php require 'header1.php' ?> 

<?php 

if (isset($_GET['id'])){
  	$id = $_GET['id'];
  	$conn = mysqli_connect('localhost','root','','crud');
	$query = "SELECT * FROM evaluaciones WHERE (id LIKE '%$id%')";
	$result = mysqli_query($conn, $query);

	$id_estudiante = $_SESSION['id'];
	$query2 = mysqli_query($conn, "SELECT * FROM respuestas WHERE (id_evaluacion LIKE '%$id%') AND (id_estudiante LIKE '%$id_estudiante%')");
	$respuestas =mysqli_fetch_array($query2);
	$nr = mysqli_num_rows($query2);

	$query3 = "SELECT * FROM calificaciones WHERE (id_usuario LIKE '%$id_estudiante%') AND (id_evaluacion LIKE '%$id%') ";
	$result3 = mysqli_query($conn, $query3);
	$row3 = mysqli_fetch_array($result3);

	$row = mysqli_fetch_array($result); ?>


		<br><h1>Evaluación:</h1><br>
		<div class="titulo" style="font-size: 25px;	border-radius: 3em;background: #10ECAB;padding: 1em 4em;grid-area: titulo;display: flex;justify-content: center;align-items: center;font-size: 1em"><h1>Informacion de la evaluación:</h1></div><br>
		<p>Nombres del maestro: <?php echo $row['nombres_profesor'];?></p>
		<p>Apellidos del maestro: <?php echo $row['apellidos_profesor'];?></p>
		<p>Para el grado: <?php echo $row['grado'];?></p>
		<p>Para la seccion: <?php echo $row['seccion'];?></p>
		<p>Fecha de inicio: <?php echo $row['creado'];?></p>
		<p>Fecha de cierre: <?php echo $row['cierre'];?></p>
		<p>Descripción de la evaluación: <?php echo $row['descripcion'];?></p>

		<form action="presentar.php" method="POST">
			
			<br>
			<br>
			<h1>Datos del estudiante:</h1>
			<input type="text" name="id_evaluacion" value="<?php echo $row['id'];?>" style="display: none;">

			<br>
			<label for="nombres">Nombre: </label>
			<input type="text" name="nombres" value="<?php echo $_SESSION['nombres'] ?>" style="padding: 20px;border: solid #70D156 2px; border-radius: 10px;" required="" pattern="[a-zA-Z0-9]+">

			<label for="apellidos">Apellido: </label>
			<input type="text" name="apellidos" value="<?php echo $_SESSION['apellidos'] ?>" style="padding: 20px;border: solid #70D156 2px; border-radius: 10px;" required="" pattern="[a-zA-Z0-9]+">

			<label for="grado">Grado: </label>
			<input type="text" name="grado" value="<?php echo $_SESSION['grado'] ?>" style="padding: 20px;border: solid #70D156 2px; border-radius: 10px;" required="" pattern="[0-9]+">

			<label for="seccion">Sección: </label>
			<input type="text" name="seccion" value="<?php echo $_SESSION['seccion'] ?>" style="padding: 20px;border: solid #70D156 2px; border-radius: 10px;" required="" pattern="[A-Z]+">

			<br><br><br><br>

			<div class="titulo" style="font-size: 25px;	border-radius: 3em;background: #10ECAB;padding: 1em 4em;grid-area: titulo;display: flex;justify-content: center;align-items: center;font-size: 1em"><h1>Preguntas:</h1></div><br>
			<br>
			<?php

		if ($nr >=1) {
		?> <p style="padding: 0.5em 1em;background: green;color: white;" >Ya presentaste esta evaluación</p> <?php ;
		 for ($i=1; $i <21; $i++) { 
			?><br>
				<label for="<?php echo $row['pregunta'.$i]; ?>"> <?php echo $row['pregunta'.$i]; ?></label>
				<br>
				<textarea name="pregunta<?php echo $i ?>" readonly="readonly" style="padding: 20px;border: solid #70D156 2px; border-radius: 10px;"><?php echo $respuestas['respuesta'.$i]; ?></textarea>
				<br><br>
			<?php
		} ?>

		<div class="contenido">
	<div class="titulo" id="puntos" style="font-size: 25px;	border-radius: 3em;background: #10ECAB;padding: 1em 4em;grid-area: titulo;display: flex;justify-content: center;align-items: center;font-size: 1em"><h1>Puntuación de evaluación:</h1></div><br>
	<form action="evaluar.php" method="POST">
		<br><br>
		<label for="puntos" style="padding: 20px; border-radius: 10px;">ID del estudiante:</label>
		<input type="text" name="idestudiante" value="<?php echo $id_estudiante; ?>" readonly="readonly"style="padding: 20px;border: solid #70D156 2px; border-radius: 10px;">
		<br><br>

		<label for="puntos" style="padding: 20px;; border-radius: 10px;">ID de la evaluacion:</label>
		<input type="text" name="idevaluacion" value="<?php echo $id; ?>" readonly="readonly" style="padding: 20px;border: solid #70D156 2px; border-radius: 10px;">

		<br><br>
		<label for="puntos"style="padding: 20px; border-radius: 10px;">Calificación: </label>
		<input type="text" name="puntos" value="<?php echo $row3['calificacion'] ?>"readonly="readonly" style="padding: 20px;border: solid #70D156 2px; border-radius: 10px;">
		<br><br>
		<label for="observacion">Observación: </label>
		<textarea name="observacion" style="padding: 20px;border: solid #70D156 2px; border-radius: 10px;" readonly="readonly"><?php echo $row3['observacion'] ?></textarea>
		<br> <br>
		<br>
		<br>
	</form>
	</div>

		<?php
	}else{

		 for ($i=1; $i <21; $i++) { 
		 	if ($row['pregunta'.$i] != "") {  ?>
		 		<div class="pregunta">
		 		<label for="<?php echo $row['pregunta'.$i]; ?>"> <?php echo $row['pregunta'.$i]; ?></label>
				<br>
				<textarea name="respuesta<?php echo $i ?>" style="padding: 20px;border: solid #70D156 2px; border-radius: 10px;"></textarea>
				<br><br>
				</div>

		 		<?php
		 	}else{ ?>

		 		<div class="pregunta" style="display: none;">
		 		<label for="<?php echo $row['pregunta'.$i]; ?>"> <?php echo $row['pregunta'.$i]; ?></label>
				<br>
				<textarea name="respuesta<?php echo $i ?>" style="padding: 20px;border: solid #70D156 2px; border-radius: 10px;"></textarea>
				<br><br>
				</div>
				
			

		 <?php	}
			
		} ?>

			<input type="submit" name="presentar" value="Presentar" style="width:100px;height:70px; border-radius: 10px;border: solid #1D8230 5px; background-color: #0BF6CD;font-size: 17px;">
			<br><br>
			</form>
	

	
		<?php }
	}else{
		header("Location: ../");
	}?>



<!-- trayendo footer de  codigo html con scripts de la carpeta partials--->
<?php require '../../partials/footer.php' ?> 