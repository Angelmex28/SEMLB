<?php
session_start();
if (isset($_POST['presentar'])) {
	$id = $_SESSION['id'];
	$conn = mysqli_connect('localhost','root','','crud');

		$query12 = "SELECT * FROM usuarios WHERE (id LIKE '%$id%')";

		$result12 = mysqli_query($conn, $query12);
		$row = mysqli_fetch_array($result12);


	$nombres = $row['nombres'];
	$apellidos = $row['apellidos'];
	$grado = $row['grado'];
	$seccion = $row['seccion'];
	$id_estudiante =  $_SESSION['id'];
	$id_evaluacion = $_POST['id_evaluacion'];
	$respuesta1 = $_POST['respuesta1'];
	$respuesta2 = $_POST['respuesta2'];
	$respuesta3 = $_POST['respuesta3'];
	$respuesta4 = $_POST['respuesta4'];
	$respuesta5 = $_POST['respuesta5'];
	$respuesta6 = $_POST['respuesta6'];
	$respuesta7 = $_POST['respuesta7'];
	$respuesta8 = $_POST['respuesta8'];
	$respuesta9 = $_POST['respuesta9'];
	$respuesta10 = $_POST['respuesta10'];
	$respuesta11 = $_POST['respuesta11'];
	$respuesta12 = $_POST['respuesta12'];
	$respuesta13 = $_POST['respuesta13'];
	$respuesta14 = $_POST['respuesta14'];
	$respuesta15 = $_POST['respuesta15'];
	$respuesta16 = $_POST['respuesta16'];
	$respuesta17 = $_POST['respuesta17'];
	$respuesta18 = $_POST['respuesta18'];
	$respuesta19 = $_POST['respuesta19'];
	$respuesta20 = $_POST['respuesta20'];
	$publico = "pu";


	$conn = mysqli_connect('localhost','root','','crud');

	//INSERT INTO `evaluaciones` (`id`, `id_profesor`, `nombres_profesor`, `apellidos_profesor`, `creado`, `pregunta1`, `pregunta2`, `pregunta3`, `pregunta4`, `pregunta5`, `pregunta6`, `pregunta7`, `pregunta8`, `pregunta9`, `pregunta10`, `pregunta11`, `pregunta12`, `pregunta13`, `pregunta14`, `pregunta15`, `pregunta16`, `pregunta17`, `pregunta18`, `pregunta19`, `pregunta20`, `cierre`, `publico`, `descripcion`) VALUES (NULL, '3', 'asfasf', 'asfasf', 'asf', 'asfas', 'asfasf', 'asfafasfas', 'fasf', 'asfasfasf', 'asfasf', 'asfas', 'fasfasf', 'asfasf', 'asfasf', 'asfasf', 'asfasf', 'asfasf', 'asfasfas', 'fasf', 'asfasf', 'asfasf', 'asfasfasf', 'asfasfasf', 'asfasfasf', '122', '12', '23');

	$query = "INSERT INTO `respuestas` (`id`, `nombres`, `apellidos`, `id_estudiante`, `id_evaluacion`, `fecha`, `respuesta1`, `respuesta2`, `respuesta3`, `respuesta4`, `respuesta5`, `respuesta6`, `respuesta7`, `respuesta8`, `respuesta9`, `respuesta10`, `respuesta11`, `respuesta12`, `respuesta13`, `respuesta14`, `respuesta15`, `respuesta16`, `respuesta17`, `respuesta18`, `respuesta19`, `respuesta20`, `grado`, `seccion`) VALUES (NULL, '$nombres', '$apellidos', '$id_estudiante', '$id_evaluacion', CURRENT_DATE(), '$respuesta1', '$respuesta2', '$respuesta3', '$respuesta4', '$respuesta5', '$respuesta6', '$respuesta7', '$respuesta8', '$respuesta9', '$respuesta10', '$respuesta11', '$respuesta12', '$respuesta13', '$respuesta14', '$respuesta15', '$respuesta16', '$respuesta17', '$respuesta18', '$respuesta19', '$respuesta20', '$grado', '$seccion');";

	$result = mysqli_query($conn, $query);

	if (!$result) {
		echo "error al registrar datos";
	}else{
?>

<!-- trayendo cabecera de  codigo html de la carpeta partials--->
<?php require 'header1.php' ?> 

presentaste tu prueba!!!

<!-- trayendo footer de  codigo html con scripts de la carpeta partials--->
<?php require '../../partials/footer.php';
header("refresh:1;url=../"); ?> 

<?php
	}
}
