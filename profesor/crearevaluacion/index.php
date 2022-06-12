<?php 

	session_start();

	if (empty($_SESSION['id'])) {
		header("Location: ../../inicioDeSesion");
	}else{
		if ($_SESSION['rol']==2) {

			?>


				<!-- trayendo cabecera de  codigo html de la carpeta partials--->
				<?php require 'header1.php' ?> 

				<h1>Bienvenido Profesor</h1>
				<br>
				<!-- Formulario de evaluacion-->

				<h2>Crear evaluacion</h2>
				<br>
				<form action="crear.php" method="POST">

					<label for="grado">Grado</label><br>
					<input type="text" name="grado" placeholder="Grado" style="padding: 20px;border: solid #70D156 2px; border-radius: 10px;" required="" pattern="[0-9]+">

					<br><br>

					<label for="seccion">Sección</label><br>
					<input type="text" name="seccion" placeholder="Sección" style="padding: 20px;border: solid #70D156 2px; border-radius: 10px;" required="" pattern="[A-Z]+">

					<br><br>

					<label for="creado">Fecha de inicio</label><br>
					<input type="text" name="inicio" placeholder="Fecha de inicio" style="padding: 20px;border: solid #70D156 2px; border-radius: 10px;"required="" pattern="[0-9-/]+">
					
					<br><br>

					<label for="cierre">Fecha de cierre</label><br>
					<input type="text" name="cierre" placeholder="Fecha de cierre" style="padding: 20px;border: solid #70D156 2px; border-radius: 10px;" required="" pattern="[0-9-/]+">
					
					<br><br>

					<label for="descripcion">Descripción</label><br>
					<textarea type="text" name="descripcion" placeholder="Descripción" style="padding: 20px;border: solid #70D156 2px; border-radius: 10px;" required=""></textarea>
					<!----- preguntas ------>

					<br> <br>
					<h2>Ingresar Preguntas:</h2>

					<?php for ($i=1; $i < 21; $i++) { 
						?>	<br><br>

							<label for="pregunta<?php echo($i); ?>">Pregunta <?php echo($i); ?></label>
							<br>
							<textarea type="text" name="pregunta<?php echo($i); ?>" placeholder="Pregunta <?php echo($i); ?>" style="padding: 20px;border: solid #70D156 2px; border-radius: 10px;"></textarea>


						<?php
					}

					?>

					<br><br>

					<input type="submit" name="crear" value="Registrar Evaluación" style="width:180px;height:70px; border-radius: 10px;border: solid #1D8230 5px; background-color: #0BF6CD;font-size: 17px;">
					<br>
					<br>

				</form>

				<!-- trayendo footer de  codigo html con scripts de la carpeta partials--->
				<?php require '../../partials/footer.php' ?> 


		<?php
			
		}elseif ($_SESSION['rol']==3) {
			header("Location: ../../estudiante/");
		}
	}

?>

