<?php session_start(); ?>
<!-- trayendo cabecera de  codigo html de la carpeta partials--->
<?php require 'header1.php' ?> 

	
<!-- Formulario de Registro-->

<h2>Registrar profesor:</h2>
<br>
<form action="registrar.php" method="POST">

	<label for="nombres">Nombre</label><br>
	<input type="text" name="nombres" placeholder="Nombre" style="padding: 20px;border: solid #70D156 2px; border-radius: 10px;" required="" pattern="[a-zA-Z ]+">

	<br><br>

	<label for="apellidos">Apellido</label><br>
	<input type="text" name="apellidos" placeholder="Apellido" style="padding: 20px;border: solid #70D156 2px; border-radius: 10px;" required="" pattern="[a-zA-Z ]+">

	<br><br>

	<label for="clave">Contraseña</label><br>
	<input type="password" name="clave" placeholder="Contraseña" style="padding: 20px;border: solid #70D156 2px; border-radius: 10px;" required="">
	
	<br><br>

	<label for="confirmarclave">Confirmar contraseña</label><br>
	<input type="password" name="confirmarclave" placeholder="Contraseña" style="padding: 20px;border: solid #70D156 2px; border-radius: 10px;">

	<br><br>

	<input type="submit" name="registrar" value="Registrar Profesor" style="width:180px;height:70px; border-radius: 10px;border: solid #1D8230 5px; background-color: #0BF6CD;font-size: 17px;">

</form>


<!-- trayendo footer de  codigo html con scripts de la carpeta partials--->
<?php require '../../partials/footer.php' ?> 