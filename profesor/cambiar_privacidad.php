<?php
if (isset($_POST['guardar'])) {
	$privacidad = $_POST['privacidad'];
	$id = $_GET['id'];

	$conn = mysqli_connect('localhost','root','','crud');

	$query = "UPDATE `evaluaciones` SET `publico`='$privacidad' WHERE `id`=".$id ;

	
	$result = mysqli_query($conn, $query);

	if (!$result) {
		echo "error";
	}else{
	}

	

}

?>