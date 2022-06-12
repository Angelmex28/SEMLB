<?php session_start(); ?>
<?php
if (isset($_POST['registrar'])) {
	
	$nombres = $_POST['nombres'];
	$apellidos = $_POST['apellidos'];
	$clave = $_POST['clave'];
	$rol =2;
	$grado=0;
	$seccion=0;

	$conn = mysqli_connect('localhost','root','','crud');

	$query = "INSERT INTO `usuarios` (`nombres`, apellidos, clave, rol, grado, seccion) VALUES ('$nombres', '$apellidos', '$clave', '$rol', '$grado', '$seccion')";

	$result = mysqli_query($conn, $query);

	if (!$result) {
		echo "error al registrar datos";
	}else{
?>

<!-- trayendo cabecera de  codigo html de la carpeta partials--->
<?php require 'header1.php' ?> 

Te registraste a un profesor correctamente!!!! ahora inicia sesion con tus datos

<!-- trayendo footer de  codigo html con scripts de la carpeta partials--->
<?php require '../../partials/footer.php' ?> 
<?php
	}
}
