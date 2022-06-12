<?php

if (isset($_GET['id'])) {
	$id = $_GET['id'];

	$conn = mysqli_connect('localhost','root','','crud');

	$query = "DELETE FROM `evaluaciones` WHERE `evaluaciones`.`id` = $id";

	
	$result = mysqli_query($conn, $query);

	if (!$result) {
		echo "error";
	}else{
		echo "borrado";
	}
}

?>