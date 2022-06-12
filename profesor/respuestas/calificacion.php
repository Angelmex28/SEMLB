<?php
session_start();
if (isset($_POST['crear'])) {

	$calificacion = $_SESSION['calificacion'];
	$observacion = $_SESSION['observacion'];

	$conn = mysqli_connect('localhost','root','','crud');

	$query = "INSERT INTO `evaluaciones` (`calificacion`, `observacion`) VALUES (NULL, '$calificacion', '$observacion')";
	$result = mysqli_query($conn, $query);

	if (!$result) {
		echo "error al registrar datos";
	}else{
?>

<!-- trayendo cabecera de  codigo html de la carpeta partials--->
<?php require 'header1.php' ?> 

Registraste los datos correctamente!!!! ahora vuelve a iniciar sesion para poder visualizar los cambios

<!-- trayendo footer de  codigo html con scripts de la carpeta partials--->
<?php require '../../partials/footer.php' ?> 
<?php
	}
}
