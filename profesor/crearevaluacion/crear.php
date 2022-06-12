<?php
session_start();
if (isset($_POST['crear'])) {
	
	$nombres = $_SESSION['nombres'];
	$apellidos = $_SESSION['apellidos'];
	$id_profesor =  $_SESSION['id'];;
	$grado = $_POST['grado'];
	$seccion = $_POST['seccion'];
	$inicio = $_POST['inicio'];
	$cierre = $_POST['cierre'];
	$descripcion = $_POST['descripcion'];
	$pregunta1 = $_POST['pregunta1'];
	$pregunta2 = $_POST['pregunta2'];
	$pregunta3 = $_POST['pregunta3'];
	$pregunta4 = $_POST['pregunta4'];
	$pregunta5 = $_POST['pregunta5'];
	$pregunta6 = $_POST['pregunta6'];
	$pregunta7 = $_POST['pregunta7'];
	$pregunta8 = $_POST['pregunta8'];
	$pregunta9 = $_POST['pregunta9'];
	$pregunta10 = $_POST['pregunta10'];
	$pregunta11 = $_POST['pregunta11'];
	$pregunta12 = $_POST['pregunta12'];
	$pregunta13 = $_POST['pregunta13'];
	$pregunta14 = $_POST['pregunta14'];
	$pregunta15 = $_POST['pregunta15'];
	$pregunta16 = $_POST['pregunta16'];
	$pregunta17 = $_POST['pregunta17'];
	$pregunta18 = $_POST['pregunta18'];
	$pregunta19 = $_POST['pregunta19'];
	$pregunta20 = $_POST['pregunta20'];
	$publico = "pu";

	$conn = mysqli_connect('localhost','root','','crud');

	//INSERT INTO `evaluaciones` (`id`, `id_profesor`, `nombres_profesor`, `apellidos_profesor`, `creado`, `pregunta1`, `pregunta2`, `pregunta3`, `pregunta4`, `pregunta5`, `pregunta6`, `pregunta7`, `pregunta8`, `pregunta9`, `pregunta10`, `pregunta11`, `pregunta12`, `pregunta13`, `pregunta14`, `pregunta15`, `pregunta16`, `pregunta17`, `pregunta18`, `pregunta19`, `pregunta20`, `cierre`, `publico`, `descripcion`) VALUES (NULL, '3', 'asfasf', 'asfasf', 'asf', 'asfas', 'asfasf', 'asfafasfas', 'fasf', 'asfasfasf', 'asfasf', 'asfas', 'fasfasf', 'asfasf', 'asfasf', 'asfasf', 'asfasf', 'asfasf', 'asfasfas', 'fasf', 'asfasf', 'asfasf', 'asfasfasf', 'asfasfasf', 'asfasfasf', '122', '12', '23');

	$query = "INSERT INTO `evaluaciones` (`id`, `id_profesor`, `nombres_profesor`, `apellidos_profesor`, `creado`, `pregunta1`, `pregunta2`, `pregunta3`, `pregunta4`, `pregunta5`, `pregunta6`, `pregunta7`, `pregunta8`, `pregunta9`, `pregunta10`, `pregunta11`, `pregunta12`, `pregunta13`, `pregunta14`, `pregunta15`, `pregunta16`, `pregunta17`, `pregunta18`, `pregunta19`, `pregunta20`, `cierre`, `publico`, `descripcion`, `grado`, `seccion`) VALUES (NULL, '$id_profesor', '$nombres', '$apellidos', '$inicio', '$pregunta1', '$pregunta2', '$pregunta3', '$pregunta4', '$pregunta5', '$pregunta6', '$pregunta7', '$pregunta8', '$pregunta9', '$pregunta10', '$pregunta11', '$pregunta12', '$pregunta13', '$pregunta14', '$pregunta15', '$pregunta16', '$pregunta17', '$pregunta18', '$pregunta19', '$pregunta20', '$cierre', '$publico', '$descripcion', '$grado', '$seccion')";

	$result = mysqli_query($conn, $query);

	if (!$result) {
		echo "error al registrar datos";
	}else{
?>

<!-- trayendo cabecera de  codigo html de la carpeta partials--->
<?php require 'header1.php' ?> 

Registraste la Evaluación correctamente!!!! ahora vuelve a iniciar sesion para poder visualizarla

<!-- trayendo footer de  codigo html con scripts de la carpeta partials--->
<?php require '../../partials/footer.php' ?> 
<?php
	}
}
