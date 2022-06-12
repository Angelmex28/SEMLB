<?php

if (isset($_POST['guardar'])) {
	$nombres = $_POST['nombres'];
	$apellidos = $_POST['apellidos'];
	$grado = $_POST['grado'];
	$seccion = $_POST['seccion'];
	$idestudiante = $_POST['idestudiante'];
	$idevaluacion = $_POST['idevaluacion'];
	$nota = $_POST['puntos'];
	$observacion = $_POST['observacion'];

	$conn = mysqli_connect('localhost','root','','crud');

	$query = "INSERT INTO `calificaciones` (`id_usuario`, `id_evaluacion`, `calificacion`, `observacion`, `nombres`, `apellidos`, `grado`, `seccion`) VALUES ('$idestudiante', '$idevaluacion', '$nota', '$observacion', '$nombres', '$apellidos', '$grado', '$seccion')";;

	$result = mysqli_query($conn, $query);

	if (!$result) {
		echo "error al registrar datos";
	}else{
		echo "evaluado correctamente";
		header("refresh:1;url=../");
	}

}

?>