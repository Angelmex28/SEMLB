<?php 

	session_start();

	if (empty($_SESSION['id'])) {
		header("Location: ../inicioDeSesion");
	}else{

		if ($_SESSION['rol']==1) {
			
		
		?>

		<!-- trayendo cabecera de  codigo html de la carpeta partials--->
		<?php require 'header1.php' ?> 
		
		<h1>BIENVENIDO ADMINISTRADOR</h1>
		<br>
		<h2>
			<a href="registrarprofesor/">Registrar Profesor</a>
		</h2>

		<!-- trayendo footer de  codigo html con scripts de la carpeta partials--->
		<?php require '../partials/footer.php' ?> 

		<?php
		}else{

			session_destroy();
			header("refresh:1;url=../inicioDeSesion");
		}
	}
?>
