<?php require 'header1.php' ?> 

<?php 

if (isset($_GET['id'])){
  	$id = $_GET['id'];
  	$conn = mysqli_connect('localhost','root','','crud');
	$query = "SELECT * FROM respuestas WHERE (id LIKE '%$id%')";
	$result = mysqli_query($conn, $query);
	$row = mysqli_fetch_array($result);

	$id_evaluacion = $row['id_evaluacion'];
	$query2 = "SELECT * FROM evaluaciones WHERE (id LIKE '%$id_evaluacion%')";

	$result2 = mysqli_query($conn, $query2);
	$row2 = mysqli_fetch_array($result2);

	$idestudiante = $row['id_estudiante'];
	$query3 = "SELECT * FROM calificaciones WHERE (id_usuario LIKE '%$idestudiante%') AND (id_evaluacion LIKE '%$id_evaluacion%') ";

	

	$result3 = mysqli_query($conn, $query3);
	$row3 = mysqli_fetch_array($result3);
	$nr = mysqli_num_rows($result3);

	 ?>
<h1>   </h1>
		<div class="titulo" style="font-size: 25px;"><h1>Información:</h1></div><br>
		<p>Para el grado: <?php echo $row['grado'];?></p>
		<p>Para la seccion: <?php echo $row['seccion'];?></p>
		<p>fecha de inicio: <?php echo $row2['creado'];?></p>
		<p>fecha de cierre: <?php echo $row2['cierre'];?></p>

		<br>
		<form action="presentar.php" method="POST">
			<h1>Datos del estudiante</h1><br>
			<label for="nombres">Nombre: </label>
			<input type="text" name="nombres" value="<?php echo $row['nombres'] ?>" readonly="readonly"style="padding: 20px;border: solid #70D156 2px; border-radius: 10px;">

			<label for="apellidos">Apellidos: </label>
			<input type="text" name="apellidos" value="<?php echo $row['apellidos'] ?>" readonly="readonly"style="padding: 20px;border: solid #70D156 2px; border-radius: 10px;">

			<label for="grado">Grado: </label>
			<input type="text" name="grado" value="<?php echo $row['grado'] ?>" readonly="readonly"style="padding: 20px;border: solid #70D156 2px; border-radius: 10px;">

			<label for="seccion">Seccion: </label>
			<input type="text" name="seccion" value="<?php echo $row['seccion'] ?>" readonly="readonly"style="padding: 20px;border: solid #70D156 2px; border-radius: 10px;">

			<br><br>

			<h1>Respuestas</h1><br>
		<?php for ($i=1; $i <21; $i++) { 

			if ($row2['pregunta'.$i] != "") { ?>
				
				<label for="<?php echo $row2['pregunta'.$i]; ?>"style="padding: 20px; border-radius: 10px;"> <?php echo $row2['pregunta'.$i]; ?></label><br>
				<textarea name="respuesta<?php echo $i ?>" readonly="readonly"style="padding: 20px;border: solid #70D156 2px; border-radius: 10px;"><?php echo $row['respuesta'.$i]; ?></textarea>
				<br><br>

				<?php
			}

			?>
				
			<?php
		} ?>
			<br><br>  
			</form>
		<?php 
	}else{
		header("Location: ../");
	}?>

	<?php 
	
	if ($nr >= 1) { ?>

<div class="contenido">
	<div class="titulo" style="font-size: 25px;	border-radius: 3em;background: #10ECAB;padding: 1em 4em;grid-area: titulo;display: flex;justify-content: center;align-items: center;font-size: 1em"><h1>Puntuación de evaluación:</h1></div><br>
	<form action="evaluar.php" method="POST">
		<label for="puntos" style="padding: 20px; border-radius: 10px;">ID del estudiante:</label>

		<input type="text" name="idestudiante" value="<?php echo $row['id_estudiante']; ?>" readonly="readonly"style="padding: 20px;border: solid #70D156 2px; border-radius: 10px;">
		<label for="puntos" style="padding: 20px;; border-radius: 10px;">ID de la evaluacion:</label>
		<input type="text" name="idevaluacion" value="<?php echo $row['id_evaluacion']; ?>" readonly="readonly" style="padding: 20px;border: solid #70D156 2px; border-radius: 10px;">
		<br><br>
		<label for="puntos"style="padding: 20px; border-radius: 10px;">Calificación: </label><br>
		<input type="text" name="puntos" value="<?php echo $row3['calificacion'] ?>"readonly="readonly" style="padding: 20px;border: solid #70D156 2px; border-radius: 10px;">
		<br><br>
		<label for="observacion">Observación: </label><br>
		<textarea name="observacion" style="padding: 20px;border: solid #70D156 2px; border-radius: 10px;" readonly="readonly"><?php echo $row3['observacion'] ?></textarea>
		<br> <br>
		<br>
		<br>
	</form>
	</div>


		<?php
	}else{ ?>

<div class="contenido">
	<div class="titulo" style="font-size: 25px;	border-radius: 3em;background: #10ECAB;padding: 1em 4em;grid-area: titulo;display: flex;justify-content: center;align-items: center;font-size: 1em"><h1>Puntuación de evaluación:</h1></div><br>
	<form action="evaluar.php" method="POST">
		<label for="puntos" style="padding: 20px; border-radius: 10px;">ID del estudiante:</label>

		<input type="text" name="idestudiante" value="<?php echo $row['id_estudiante']; ?>" readonly="readonly"style="padding: 20px;border: solid #70D156 2px; border-radius: 10px;">
		<label for="puntos" style="padding: 20px;; border-radius: 10px;">ID de la evaluacion:</label>
		<input type="text" name="idevaluacion" value="<?php echo $row['id_evaluacion']; ?>" readonly="readonly" style="padding: 20px;border: solid #70D156 2px; border-radius: 10px;">
		<br><br>
		<label for="puntos"style="padding: 20px; border-radius: 10px;">Calificación: </label><br>
		<input type="text" name="puntos" value="<?php echo $row3['calificacion'] ?>" style="padding: 20px;border: solid #70D156 2px; border-radius: 10px;" required="" pattern="[A-Z]+" placeholder="Ingresar letra en mayúscula">
		<br><br>
		<label for="observacion">Observación: </label><br>
		<textarea name="observacion" style="padding: 20px;border: solid #70D156 2px; border-radius: 10px;" required="" placeholder="Ingresar observación"><?php echo $row3['observacion'] ?></textarea>
		<br> <br>


		<div class="invisible" style="display: none">
			<input type="text" name="nombres" value="<?php echo $row['nombres'] ?>" readonly="readonly"style="padding: 20px;border: solid #70D156 2px; border-radius: 10px;">

			<label for="apellidos">Apellidos: </label>
			<input type="text" name="apellidos" value="<?php echo $row['apellidos'] ?>" readonly="readonly"style="padding: 20px;border: solid #70D156 2px; border-radius: 10px;">

			<label for="grado">Grado: </label>
			<input type="text" name="grado" value="<?php echo $row['grado'] ?>" readonly="readonly"style="padding: 20px;border: solid #70D156 2px; border-radius: 10px;">

			<label for="seccion">Seccion: </label>
			<input type="text" name="seccion" value="<?php echo $row['seccion'] ?>" readonly="readonly"style="padding: 20px;border: solid #70D156 2px; border-radius: 10px;">
		</div>

		
		<input type="submit" name="guardar" value="Evaluar" style="width:70px;height:50px; border-radius: 10px;border: solid #1D8230 5px; background-color: #0BF6CD;font-size: 17px;">
		<br>
		<br>
	</form>
	</div>


		<?php
	}




	 ?>

	 
</div>

<!-- trayendo footer de  codigo html con scripts de la carpeta partials--->
<?php require '../../partials/footer.php' ?> 