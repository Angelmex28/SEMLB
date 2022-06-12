<?php
if (isset($_POST['registrar'])) {
	
	$nombres = $_POST['nombres'];
	$apellidos = $_POST['apellidos'];
	$grado = $_POST['grado'];
	$seccion = $_POST['seccion'];
	$clave = $_POST['clave'];
	$rol = 3;

	$conn = mysqli_connect('localhost','root','','crud');

	$query = "INSERT INTO `usuarios` (`nombres`, apellidos, clave, rol, grado, seccion) VALUES ('$nombres', '$apellidos', '$clave', '$rol', '$grado', '$seccion')";

	$result = mysqli_query($conn, $query);

	if (!$result) {
		echo "error al registrar datos";
	}else{
?>
<!-- trayendo cabecera de  codigo html de la carpeta partials--->
<?php require 'partials/header1.php' ?> 

<h1>Te registraste correctamente!!!! ahora inicia sesion con tus datos</h1>

<!-- trayendo footer de  codigo html con scripts de la carpeta partials--->
<?php require 'partials/footer.php' ?> 
<?php
	}
}